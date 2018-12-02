<?php

namespace Sohophp\SchemaOrg\Generator;

use Sohophp\SchemaOrg\Generator\Configure;

class Parser
{
    /**
     * @var string  jsonld file path
     * @see https://schema.org/docs/developers.html
     */
    private $filePath;
    /**
     * @var array
     */
    private $data = [];
    /**
     * @var Configure
     */
    private $configure;

    private $graphs = [];
    private $classes = [];
    private $properties = [];
    private $dataTypes = [];
    private $relateds = [];

    public function parse(Configure $configure)
    {
        $this->configure = $configure;
        $this->parseJsonld($this->configure->getSchemaJsonldFilePath());
    }

    public function parseJsonld(?string $filePath)
    {
        $this->filePath = realpath($filePath);
        if (!file_exists($this->filePath) || !is_readable($this->filePath)) {
            throw new \Exception('The jsonld file is not exists!');
            return false;
        }
        $content = file_get_contents($this->filePath);
        $this->data = json_decode($content, true)['@graph'];
        $this->graphs = [];
        foreach ($this->data as $array) {
            $item = new ParserItem($array, $this);
            $this->graphs[$item->getId()] = $item;
        }
        /**
         * @var ParserItem $item
         */
        foreach ($this->graphs as $item) {
            if ($item->isDataType()) {
                $this->dataTypes[] = $item;
            } elseif ($item->isProperty()) {
                $this->properties[] = $item;
            } elseif ($item->isClass()) {
                $this->classes[] = $item;
            } else {
                $this->relateds[] = $item;
            }
        }

        //var_dump(count($this->dataTypes),count($this->properties),count($this->classes),count($this->relateds));
        //exit;

    }

    public function getGraphs(): array
    {
        return $this->graphs;
    }

    public function getDataTypes(): array
    {
        return $this->dataTypes;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function getClasses(): array
    {
        return $this->classes;
    }

}
