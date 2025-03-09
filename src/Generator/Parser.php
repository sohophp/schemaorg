<?php

namespace Sohophp\SchemaOrg\Generator;

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
    private Configure $configure;

    private $graphs = [];
    private $classes = [];
    private $properties = [];
    private $dataTypes = [];
    private $relateds = [];

    /**
     * @param Configure $configure
     */
    public function parse(Configure $configure): void
    {
        $this->configure = $configure;
        $this->parseJsonld($this->configure->getSchemaJsonldFilePath());
    }

    /**
     * @param string|null $filePath
     * @return bool
     */
    public function parseJsonld(?string $filePath): bool
    {
        $this->filePath = realpath($filePath);
        if (!file_exists($this->filePath) || !is_readable($this->filePath)) {
            $Logger = new Logger("parser");
            $Logger->warning('The jsonld file is not exists!');
            return false;
        }

        $content = file_get_contents($this->filePath);
        $this->data = json_decode($content, false);//['@graph'];

        $this->graphs = [];

        foreach ($this->data->{'@graph'} as $array) {
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
        return true;
    }

    /**
     * @return array
     */
    public function getGraphs(): array
    {
        return $this->graphs;
    }

    /**
     * @return array
     */
    public function getDataTypes(): array
    {
        return $this->dataTypes;
    }

    /**
     * @return array
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @return array
     */
    public function getClasses(): array
    {
        return $this->classes;
    }

    /**
     * @return array
     */
    public function getRelateds(): array
    {
        return $this->relateds;
    }

    public function getItemById(string $id): ?ParserItem
    {
        $graphs = $this->getGraphs();
        return $graphs[$id] ?? null;
    }

}
