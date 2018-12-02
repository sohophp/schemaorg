<?php

namespace Sohophp\SchemaOrg\Generator;

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

    public function __construct(Configure $configure, Parser $parser, \Twig_Environment $twig)
    {
        $this->configure = $configure;
        $this->parser = $parser;
        $this->twig = $twig;

    }

    public function generate()
    {

        /**
         * @var ParserItem $graph
         */
        foreach ($this->parser->getClasses() as $i => $graph) {
            echo $i."\n";
            echo $graph->getId() . "\n";
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
            echo $filename."\n";

            if (!is_dir($dir)) {
                if (!mkdir($dir, 0777, true)) {
                    throw new \Exception('Failed to create folders ' . $dir);
                    return false;
                }
            }

            if (!file_put_contents($filename,  $this->twig->render('class.php.twig', ['class' => $class]))) {
                throw new \Exception('Can not create file ' . $dir . DIRECTORY_SEPARATOR . $graph->getName() . '.php');
                return false;
            }
        }

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
                return '\\' . \DateTimeInterface::class;
            case 'DataType':
            case 'Number':
                return null;
        }
    }

    public function fullNamespace($namespace): string
    {
        return trim($this->configure->getNamespace() . '\\' . trim($namespace, '\\'), '\\');
    }
}
