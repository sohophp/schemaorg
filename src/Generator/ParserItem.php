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

    public function __construct($item, Parser $parser)
    {
        $this->item = $item;
        $this->parser = $parser;
    }

    public function __get($key)
    {
        return $this->getProperty($key);
    }

    public function getProperty($key)
    {
        return $this->item->{$key} ?? null;
    }

    public function getItem()
    {
        return $this->item;
    }

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

    public function getId(): ?string
    {
        return $this->getProperty('@id');
    }

    public function isClass(): bool
    {
        $types = $this->getTypes();
        return in_array('rdfs:Class', $types);
    }

    public function isDataType(): bool
    {
        $types = $this->getTypes();
        $names = ['Boolean', 'Float', 'Integer', 'Text', 'URL', 'Date', 'DateTime', 'Time', 'DataType', 'Number'];
        return in_array($this->getName(), $names) || in_array('http://schema.org/DataType', $types);
    }

    public function isProperty()
    {
        $types = $this->getTypes();
        return in_array('rdf:Property', $types);
    }

    public function getComment(): ?string
    {
        return $this->getProperty('rdfs:comment');
    }

    public function getLabel(): ?string
    {
        return $this->getProperty('rdfs:label');
    }

    public function getRangeIncludes(): array
    {
        return $this->itemIds($this->getProperty('http://schema.org/rangeIncludes'));
    }

    public function getDomainIncludes(): array
    {
        return $this->itemIds($this->getProperty('http://schema.org/domainIncludes'));
    }

    public function getName()
    {
        return $this->getLabel();
    }

    public function getUri()
    {
        return $this->getId();
    }

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

    public function hasRange(string $id): bool
    {
        return in_array($id, $this->getRangeIncludes());
    }

    public function hasDomain(string $id): bool
    {
        return in_array($id, $this->getDomainIncludes());
    }

    public function getItemById(string $id): ?ParserItem
    {
        $graphs = $this->parser->getGraphs();
        return $graphs[$id] ?? null;
    }


    public function getParent(): ?self
    {
        return $this->parent($this->item);
    }

    public function parent($item): ?self
    {
        $parents = $this->parents($item);
        return count($parents) ? $parents[0] : null;
    }

    public function parents($item): ?array
    {
        $parents = $item->{'rdfs:subClassOf'} ?? null;
        return $this->items($parents);
    }

    public function items($parents)
    {

        $ids = $this->itemIds($parents);
        return array_map([$this, 'getItemById'], $ids);

    }

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

    public function getParents()
    {
        return $this->deepParent($this->item);
    }

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

    public function __debugInfo()
    {
        return ['item' => $this->item];
    }

}
