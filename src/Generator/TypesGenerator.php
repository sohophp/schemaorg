<?php

namespace Sohophp\SchemaOrg\Generator;

use PhpCsFixer\Cache\NullCacheManager;
use PhpCsFixer\Differ\NullDiffer;
use PhpCsFixer\Error\ErrorsManager;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\Linter\Linter;
use PhpCsFixer\RuleSet;
use PhpCsFixer\Runner\Runner;

class TypesGenerator
{
    /**
     * @var Configure
     */
    private $configure;
    /**
     * @var Parser
     */
    private $parser;
    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * TypesGenerator constructor.
     * @param Configure $configure
     * @param Parser $parser
     * @param \Twig_Environment $twig
     * @param Logger $Logger
     */
    public function __construct(Configure $configure, Parser $parser, \Twig_Environment $twig,Logger $Logger)
    {
        $this->configure = $configure;
        $this->parser = $parser;
        $this->twig = $twig;
        $this->Logger = $Logger;
    }

    /**
     * @return array|bool
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function generate()
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
            $class = [];
            $class['name'] = $graph->getName();
            $class['annotations'] = [];
            $class['annotations'][] = $graph->getComment();
            $class['annotations'][] = sprintf('@see %s', $graph->getUri());
            $class['namespace'] = $this->fullNamespace($graph->getNamespace());
            $uses = [];
            $parent = $graph->getParent();
            if ($parent) {
                $uses[] = $this->fullNamespace($parent->getFullClassName());
                $class['parent'] = $parent->getName();
            } else {
                $uses[] = $this->fullNamespace($this->configure->getClassBase());
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
                            $uses[] = $this->fullNamespace($item->getFullClassName());
                        }
                        $range[] = $item->getName();
                    } else {
                        $range[] = $this->rangeString($item);
                    }
                }
                $range = array_filter($range);//rangeString可能有null
                $range = array_values($range);
                $class['properties'][] = [
                    'name' => $property->getName(),
                    'annotations' => [$property->getComment()],
                    'range' => implode('|', $range),
                    'range_default' => count($range) == 1 ? '?' . $range[0] : null
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
                    return false;
                }
            }
            if (!file_put_contents($filename, $this->twig->render('class.php.twig', ['class' => $class]))) {
                throw new \Exception('Can not create file ' . $dir . DIRECTORY_SEPARATOR . $graph->getName() . '.php');
                return false;
            }
            $classFiles[] = $filename;
            $entitiesMap[] = [
                'name' => $graph->getName(),
                'className' => $graph->getFullClassName()
            ];
        }
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
        return $classFiles;
    }

    public function itemToDir(ParserItem $item): string
    {
        return $this->configure->getBaseDir() . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $item->getPath());
    }

    /**
     * @param $item ParserItem
     * @return string|null
     */
    public function rangeString($item): ?string
    {
        switch ($item->getName()) {
            case 'Boolean':
                return 'bool';
            case 'Float':
                return 'float';
            case 'Integer':
                return 'int';
            case 'Text':
            case 'URL':
                return 'string';
            case 'Date':
            case 'DateTime':
            case 'Time':
                //return '\\' . \DateTimeInterface::class;
            case 'DataType':
            case 'Number':
                return null;
        }
    }

    public function fullNamespace($namespace): string
    {
        return trim($this->configure->getNamespace() . '\\' . trim($namespace, '\\'), '\\');
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
        $fixers = (new FixerFactory())
            ->registerBuiltInFixers()
            ->useRuleSet(new RuleSet([
                //'@Symfony' => true,
                'array_syntax' => ['syntax' => 'short'],
                'phpdoc_order' => true,
                'declare_strict_types' => true,
            ]))
            ->getFixers();

        $runner = new Runner(
            new \ArrayIterator($fileInfos),
            $fixers,
            new NullDiffer(),
            null,
            new ErrorsManager(),
            new Linter(),
            false,
            new NullCacheManager()
        );
        $runner->fix();
    }
}
