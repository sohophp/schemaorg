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

    /**
     * TypesGenerator constructor.
     * @param Configure $configure
     * @param Parser $parser
     * @param Environment $twig
     * @param Logger $Logger
     */
    public function __construct(Configure $configure, Parser $parser, Environment $twig, Logger $Logger)
    {
        $this->configure = $configure;
        $this->parser = $parser;
        $this->twig = $twig;
        $this->Logger = $Logger;
    }

    public function clear()
    {
        $dir = $this->configure->getBaseDir() . '/Thing';
        $output = shell_exec('rm -rf ' . $dir);
        echo $output, PHP_EOL;
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
        $entitiesMap = [];
        /**
         * @var ParserItem $graph
         */
        foreach ($this->parser->getClasses() as $i => $graph) {

            if ($this->configure->get('consoleMessage')) {
                echo($i + 1), "\n";
                echo $graph->getId(), "\n";
            }

            /**
             * 有个3dmodel是数字开头 和class
             * 2019-10-07
             */
            if (!preg_match('#^[a-zA-Z].*?#', $graph->getName()) || in_array($graph->getName(), ['Class', 'Function'])) {
                continue;
            };

            $class = [];
            $class['name'] = $graph->getName();
            $class['annotations'] = [];
            $class['annotations'][] = $graph->getComment();
            $class['annotations'][] = sprintf('@see %s', $graph->getUri());
            $class['namespace'] = $this->fullNamespace($graph->getNamespace());
            $uses = [];
            $parent = $graph->getParent();
            if ($parent) {
                if ($this->configure->getFullPath()) {
                    $uses[] = $this->fullNamespace($parent->getFullClassName());
                }
                $class['parent'] = $parent->getName();
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
                if (!in_array("array", $range)) {
                    $range[] = 'array';
                }

                if (!in_array('string', $range)) {
                    $range[] = 'string';
                }

                $class['properties'][] = [
                    'name' => $property->getName(),
                    'annotations' => [$property->getComment()],
                    'range' => implode('|', $range),
                    'range_default' => null
//                    'range_default' => count($range) === 1 && array_values($range)[0] ? '?' . array_values($range)[0] : null
                ];
            }

            $class['uses'] = array_unique($uses);
            $dir = $this->itemToDir($graph);
            $filename = $dir . DIRECTORY_SEPARATOR . $graph->getName() . '.php';
            if ($this->configure->get('consoleMessage')) {
                echo $filename . "\n";
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
            $entitiesMap[] = [
                'name' => $graph->getName(),
                'className' => $graph->getFullClassName()
            ];
        }

        /**
         * @since 2021/12/23  不使用别名快捷方式了
         */

        // $this->generateEntities($entitiesMap);

        return $classFiles;
    }

    public function generateEntities(array $entitiesMap)
    {
        $entitiesMapFile = $this->configure->getBaseDir() . DIRECTORY_SEPARATOR . 'Entities.php';

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
    }

    public function itemToDir(ParserItem $item): string
    {
        if ($this->configure->getFullPath()) {
            return $this->configure->getBaseDir()
                . DIRECTORY_SEPARATOR
                . implode(DIRECTORY_SEPARATOR, $item->getPath());
        }
        return $this->configure->getBaseDir();
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
                'array_syntax' => ['syntax' => 'short'],
                'phpdoc_order' => true,
                'declare_strict_types' => true,
            ]))
            ->getFixers();

        $runner = new Runner(new \ArrayIterator($fileInfos), $fixers, new NullDiffer(), null, new ErrorsManager(), new Linter(), false, new NullCacheManager());
        $runner->fix();
    }

}
