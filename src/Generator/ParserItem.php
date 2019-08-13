<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Generator;

/**
 * Class ParserItem
 * @package Sohophp\SchemaOrg\Generator
 */
class ParserItem
{
    /**
     * @var \stdClass
     */
    private $item;
    /**
     * @var Parser
     */
    private $parser;

    /**
     * ParserItem constructor.
     * @param $item
     * @param Parser $parser
     */
    public function __construct($item, Parser $parser)
    {
        $this->item = $item;
        $this->parser = $parser;
    }

    /**
     * @param $key
     * @return |null
     */
    public function __get($key)
    {
        return $this->getProperty($key);
    }

    /**
     * @param $key
     * @return |null
     */
    public function getProperty($key)
    {
        return $this->item->{$key} ?? null;
    }

    /**
     * @return \stdClass
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return array
     */
    public function getTypes(): array
    {
        $types = $this->getProperty('@type');
        if (!is_array($types)) {
            return [$types];
        } else {
            return $types;
        }
    }

    /**
     * return first type
     * @return string|null
     */
    public function getType(): ?string
    {

        $types = $this->getTypes();
        return $types ? $types[0] : "";
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->getProperty('@id');
    }

    /**
     * @return bool
     */
    public function isClass(): bool
    {
        $types = $this->getTypes();
        return in_array('rdfs:Class', $types);
    }

    /**
     * @return bool
     */
    public function isDataType(): bool
    {
        $types = $this->getTypes();
        $names = ['Boolean', 'Float', 'Integer', 'Text', 'URL', 'Date', 'DateTime', 'Time', 'DataType', 'Number'];
        return in_array($this->getName(), $names) || in_array('http://schema.org/DataType', $types);
    }

    /**
     * @return bool
     */
    public function isProperty()
    {
        $types = $this->getTypes();
        return in_array('rdf:Property', $types);
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->getProperty('rdfs:comment');
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        $label = $this->getProperty('rdfs:label');
        if (is_object($label)) {
            return $label->{"@value"};
        }
        return $label;
    }

    /**
     * @return array
     */
    public function getRangeIncludes(): array
    {
        return $this->itemIds($this->getProperty('http://schema.org/rangeIncludes'));
    }

    /**
     * @return array
     */
    public function getDomainIncludes(): array
    {
        return $this->itemIds($this->getProperty('http://schema.org/domainIncludes'));
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->getLabel();
    }

    /**
     * @return string|null
     */
    public function getUri()
    {
        return $this->getId();
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        $id = $this->getId();
        $properties = [];
        /**
         * @var self $property
         */
        foreach ($this->parser->getProperties() as $property) {
            if ($property->hasDomain($id)) {
                $properties[] = $property;
            }
        }
        return $properties;
    }

    /**
     * @param string $id
     * @return bool
     */
    public function hasRange(string $id): bool
    {
        return in_array($id, $this->getRangeIncludes());
    }

    /**
     * @param string $id
     * @return bool
     */
    public function hasDomain(string $id): bool
    {
        return in_array($id, $this->getDomainIncludes());
    }

    /**
     * @param string $id
     * @return ParserItem|null
     */
    public function getItemById(string $id): ?ParserItem
    {
        $graphs = $this->parser->getGraphs();
        return $graphs[$id] ?? null;
    }


    /**
     * @return ParserItem|null
     */
    public function getParent(): ?self
    {
        return $this->parent($this->item);
    }

    /**
     * @param $item
     * @return ParserItem|null
     */
    public function parent($item): ?self
    {
        $parents = $this->parents($item);
        return count($parents) ? $parents[0] : null;
    }

    /**
     * @param $item
     * @return array|null
     */
    public function parents($item): ?array
    {
        $parents = $item->{'rdfs:subClassOf'} ?? null;
        return $this->items($parents);
    }

    /**
     * @param $parents
     * @return array
     */
    public function items($parents)
    {

        $ids = $this->itemIds($parents);
        return array_map([$this, 'getItemById'], $ids);

    }

    /**
     * @param $search
     * @return array
     */
    public function itemIds($search)
    {
        if (is_array($search)) {
            $ids = [];
            foreach ($search as $arr) {
                foreach ($this->itemIds($arr) as $id) {
                    $ids[] = $id;
                }
            }
            return array_filter($ids);
        } elseif (is_object($search)) {
            return array_filter([$search->{'@id'} ?? null]);
        } else {
            return array_filter([$search]);
        }
    }

    /**
     * @return array
     */
    public function getParents()
    {
        return $this->deepParent($this->item);
    }

    /**
     * @param $item
     * @param array $parents
     * @return array
     */
    public function deepParent($item, $parents = [])
    {
        $parent = $this->parent($item);
        if (is_null($parent)) {
            return $parents;
        } else {
            $parents[] = $parent;
            return $this->deepParent($parent->getItem(), $parents);
        }
    }

    /**
     * @return array 所在路径
     */
    public function getPath()
    {
        $parents = $this->getParents();

        $path = [];
        foreach ($parents as $parent) {
            $path[] = $parent->getName();
        }

        return array_reverse($path);
    }


    /**
     * @return string 命名空间
     */
    public function getNamespace(): string
    {
        return implode('\\', $this->getPath());
    }

    /**
     * @return string 包含命名空间的类名
     */
    public function getFullClassName(): string
    {
        return $this->getNamespace() . '\\' . $this->getName();
    }

    /**
     * @return array 属性取值范围
     */

    public function getPropertyRange()
    {
        $includes = $this->getRangeIncludes();
        return array_map([$this, 'getItemById'], $includes);
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        return ['item' => $this->item];
    }

}
