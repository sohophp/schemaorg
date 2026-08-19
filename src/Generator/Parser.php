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
        $resolvedPath = $filePath === null ? false : realpath($filePath);
        if ($resolvedPath === false || !is_readable($resolvedPath)) {
            throw new \RuntimeException('The JSON-LD file does not exist or is not readable: ' . ($filePath ?? ''));
        }
        $this->filePath = $resolvedPath;

        $content = file_get_contents($this->filePath);
        if ($content === false) {
            throw new \RuntimeException('Unable to read JSON-LD file: ' . $this->filePath);
        }
        $this->data = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
        if (!isset($this->data->{'@graph'}) || !is_array($this->data->{'@graph'})) {
            throw new \UnexpectedValueException('JSON-LD file does not contain a valid @graph: ' . $this->filePath);
        }

        $this->graphs = [];
        $this->classes = [];
        $this->properties = [];
        $this->dataTypes = [];
        $this->relateds = [];

        foreach ($this->data->{'@graph'} as $index => $array) {
            $item = new ParserItem($array, $this);
            $id = $item->getId();
            if ($id === null || $id === '') {
                throw new \UnexpectedValueException('JSON-LD graph item at index ' . $index . ' has no @id: ' . $this->filePath);
            }
            if (array_key_exists($id, $this->graphs)) {
                throw new \UnexpectedValueException('JSON-LD graph contains duplicate @id "' . $id . '": ' . $this->filePath);
            }
            $this->graphs[$id] = $item;
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
