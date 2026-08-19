<?php

namespace Sohophp\SchemaOrg\Generator;

use PhpCsFixer\Cache\NullCacheManager;
use PhpCsFixer\Differ\NullDiffer;
use PhpCsFixer\Error\ErrorsManager;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\Linter\Linter;
use PhpCsFixer\RuleSet\RuleSet;
use PhpCsFixer\Runner\Runner;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class TypesGenerator
{
    /**
     * @var Configure
     */
    private Configure $configure;
    /**
     * @var Parser
     */
    private Parser $parser;
    /**
     * @var Environment
     */
    private Environment $twig;
    private Logger $logger;
    private ?string $outputBaseDir = null;

    /**
     * TypesGenerator constructor.
     * @param Configure $configure
     * @param Parser $parser
     * @param Environment $twig
     * @param Logger $logger
     */
    public function __construct(Configure $configure, Parser $parser, Environment $twig, Logger $logger)
    {
        $this->configure = $configure;
        $this->parser = $parser;
        $this->twig = $twig;
        $this->logger = $logger;
    }

    public function clear(): void
    {
        $dir = $this->configure->getBaseDir() . '/Thing';
        $this->removeDirectory($dir);
    }

    private function removeDirectory(string $dir): void
    {
        if (!is_dir($dir)) {
            return;
        }

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach ($iterator as $item) {
            if ($item->isDir()) {
                rmdir($item->getPathname());
            } else {
                unlink($item->getPathname());
            }
        }
        rmdir($dir);
    }

    private function replaceGeneratedDirectory(string $stagingDir, string $targetDir): void
    {
        $backupDir = $targetDir . '.backup-' . uniqid('', true);
        $hasTarget = is_dir($targetDir);

        if ($hasTarget && !rename($targetDir, $backupDir)) {
            throw new \RuntimeException('Unable to move the existing generated directory: ' . $targetDir);
        }

        try {
            if (!rename($stagingDir, $targetDir)) {
                throw new \RuntimeException('Unable to install generated directory: ' . $targetDir);
            }
        } catch (\Throwable $exception) {
            if ($hasTarget && is_dir($backupDir)) {
                rename($backupDir, $targetDir);
            }
            throw $exception;
        }

        if ($hasTarget) {
            $this->removeDirectory($backupDir);
        }
    }

    /**
     * @return array
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws \Exception
     */
    public function generate(): array
    {
        $classFiles = [];
        $baseDir = $this->configure->getBaseDir();
        $stagingBaseDir = $baseDir . DIRECTORY_SEPARATOR . '.schemaorg-generation-' . uniqid('', true);
        if (!mkdir($stagingBaseDir, 0777, true) && !is_dir($stagingBaseDir)) {
            throw new \RuntimeException('Unable to create generation staging directory: ' . $stagingBaseDir);
        }
        $this->outputBaseDir = $stagingBaseDir;

        try {
            /**
             * @var ParserItem $graph
             */
            foreach ($this->parser->getClasses() as $i => $graph) {
                //            if($graph->getId()=='schema:LocalBusiness') {
                //
                //            }else{
                //                continue;
                //            }

                if ($this->configure->get('consoleMessage')) {
                    echo ($i + 1), "\n";
                    echo $graph->getId(), "\n";
                }


                /**
                 * 有个3dmodel是数字开头 和class
                 * 2019-10-07
                 */
                $name = $graph->getName();
                if (!is_string($name) || !preg_match('#^[a-zA-Z].*?#', $name) || in_array($name, ['Class', 'Function'], true)) {
                    continue;
                };

                $class = [];
                $class['name'] = $name;
                $class['annotations'] = [];
                $class['annotations'][] = $this->formatDoc($graph->getComment());
                $class['annotations'][] = sprintf('@see %s', $this->fullUri($graph->getUri()));
                $class['namespace'] = $this->fullNamespace($graph->getNamespace());
                $uses = [];
                $parent = $graph->getParent();
                $parentName = $parent?->getName();
                if (is_string($parentName) && $parentName !== '') {
                    if ($this->configure->getFullPath()) {
                        $uses[] = $this->fullNamespace($parent->getFullClassName());
                    }
                    $class['parent'] = $parentName;
                } else {
                    if ($this->configure->getFullPath()) {
                        $uses[] = $this->fullNamespace($this->configure->getClassBase());
                    }
                    $class['parent'] = $this->configure->getClassBase();
                }

                $class['properties'] = [];

                /**
                 * @var ParserItem $property
                 */
                foreach ($graph->getProperties() as $property) {
                    $range = [];
                    /**
                     * @var ParserItem $item
                     */
                    foreach ($property->getPropertyRange() as $item) {
                        if ($item->isClass() && !$item->isDataType()) {
                            if ($item->getId() != $graph->getId()) {
                                if ($this->configure->getFullPath()) {
                                    $uses[] = $this->fullNamespace($item->getFullClassName());
                                }
                            }
                            $range[] = $item->getName();
                        } else {
                            $range[] = $this->rangeString($item);
                        }
                    }

                    //rangeString可能有null
                    $range = array_filter($range, function ($var) {
                        return !empty(trim((string)$var));
                    });
                    $range = array_values(array_unique($range));
                    if (!$range) {
                        $range[] = 'mixed';
                    }
                    $rangeDoc = in_array('mixed', $range, true)
                        ? 'mixed'
                        : implode('|', $range) . '|array';
                    $valueDoc = in_array('mixed', $range, true) ? 'mixed' : implode('|', $range);

                    $class['properties'][] = [
                        'name' => $property->getName(),
                        'annotations' => [
                            $this->formatDoc($property->getComment(), 4),
                            sprintf('@see %s', $this->fullUri($property->getUri())),
                        ],
                        'range' => $rangeDoc,
                        'value_range' => $valueDoc,
                        'range_default' => null
                        //                    'range_default' => count($range) === 1 && array_values($range)[0] ? '?' . array_values($range)[0] : null
                    ];
                }

                $class['uses'] = array_unique($uses);
                $dir = $this->itemToDir($graph);
                $filename = $dir . DIRECTORY_SEPARATOR . $graph->getName() . '.php';

                if ($this->configure->get('consoleMessage')) {
                    echo str_replace($stagingBaseDir, $baseDir, $filename) . "\n";
                }
                if (!is_dir($dir)) {
                    if (!mkdir($dir, 0777, true)) {
                        throw new \Exception('Failed to create folders ' . $dir);
                    }
                }

                if (!file_put_contents($filename, $this->twig->render('class.php.twig', ['class' => $class]))) {
                    throw new \Exception('Can not create file ' . $dir . DIRECTORY_SEPARATOR . $graph->getName() . '.php');
                }
                $classFiles[] = $filename;
            }

            if (!$classFiles) {
                throw new \RuntimeException('No schema classes were generated. The existing generated directory was not changed.');
            }

            if ($this->configure->getFixCs()) {
                $this->fixCs($classFiles);
            }

            $stagingDir = $stagingBaseDir . DIRECTORY_SEPARATOR . 'Thing';
            $targetDir = $baseDir . DIRECTORY_SEPARATOR . 'Thing';
            if ($this->configure->getFullPath()) {
                $this->replaceGeneratedDirectory($stagingDir, $targetDir);
            } else {
                foreach ($classFiles as $file) {
                    $targetFile = str_replace($stagingBaseDir, $baseDir, $file);
                    if (!is_dir(dirname($targetFile)) && !mkdir(dirname($targetFile), 0777, true) && !is_dir(dirname($targetFile))) {
                        throw new \RuntimeException('Unable to create generated file directory: ' . dirname($targetFile));
                    }
                    if (!rename($file, $targetFile)) {
                        throw new \RuntimeException('Unable to install generated file: ' . $targetFile);
                    }
                }
            }

            return array_map(
                static fn(string $file): string => str_replace($stagingBaseDir, $baseDir, $file),
                $classFiles
            );
        } finally {
            $this->outputBaseDir = null;
            if (is_dir($stagingBaseDir)) {
                $this->removeDirectory($stagingBaseDir);
            }
        }
    }

    public function generateEntities(array $entitiesMap)
    {
        $classFiles = [];
        $entitiesMapFile = ($this->outputBaseDir ?? $this->configure->getBaseDir()) . DIRECTORY_SEPARATOR . 'Entities.php';

        file_put_contents(
            $entitiesMapFile,
            $this->twig->render(
                'entities.php.twig',
                [
                    'entities' => $entitiesMap,
                    'namespace' => $this->fullNamespace('')
                ]
            )
        );
        $classFiles[] = $entitiesMapFile;
        if ($this->configure->getFixCs()) {
            $this->fixCs($classFiles);
        }
        return $classFiles;
    }

    public function itemToDir(ParserItem $item): string
    {
        if ($this->configure->getFullPath()) {
            return ($this->outputBaseDir ?? $this->configure->getBaseDir())
                . DIRECTORY_SEPARATOR
                . implode(DIRECTORY_SEPARATOR, $item->getPath());
        }
        return $this->outputBaseDir ?? $this->configure->getBaseDir();
    }

    /**
     * @param $item ParserItem
     * @return string|null
     */
    public function rangeString(ParserItem $item): ?string
    {
        return match ($item->getName()) {
            'Boolean' => 'bool',
            'Float' => 'float',
            'Integer' => 'int',
            'Text', 'URL' => 'string',
            'Date', 'DateTime', 'Time', 'DataType', 'Number' => null,
            default => null,
        };
    }

    public function fullNamespace($namespace): string
    {
        return $this->configure->getFullPath()
            ? trim($this->configure->getNamespace() . '\\' . trim($namespace, '\\'), '\\')
            : $this->configure->getNamespace();
    }

    private function fullUri(?string $uri): string
    {
        if ($uri === null || $uri === '') {
            return '';
        }

        return str_starts_with($uri, 'schema:')
            ? 'https://schema.org/' . substr($uri, strlen('schema:'))
            : $uri;
    }

    private function formatDoc(string $comment, int $indent = 0): string
    {
        $comment = preg_replace('/\R\s*\*\s?/', ' ', $comment) ?? $comment;

        return preg_replace('/\s+/', ' ', trim($comment)) ?? '';
    }


    /**
     * Uses PHP CS Fixer to make generated files following PSR and Symfony Coding Standards.
     */
    private function fixCs(array $files): void
    {
        $fileInfos = [];
        foreach ($files as $file) {
            $fileInfos[] = new \SplFileInfo($file);
        }
        // //'@Symfony' => true,
        $fixers = (new FixerFactory())
            ->registerBuiltInFixers()
            ->useRuleSet(new RuleSet([
                '@PSR12' => true,
                'array_syntax' => ['syntax' => 'short'],
                'declare_strict_types' => true,
            ]))
            ->getFixers();

        $runner = new Runner(new \ArrayIterator($fileInfos), $fixers, new NullDiffer(), null, new ErrorsManager(), new Linter(), false, new NullCacheManager());
        $runner->fix();
    }
}
