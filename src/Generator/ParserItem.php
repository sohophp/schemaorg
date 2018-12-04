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
     * @var array
     */
    private $item;
    /**
     * @var Parser
     */
    private $parser;

    public function __construct(array $item, Parser $parser)
    {
        $this->item = $item;
        $this->parser = $parser;
    }

    public function getItem(): array
    {
        return $this->item;
    }

    public function getTypes(): array
    {

        $types = $this->item['@type'] ?? [];

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
        return $this->item['@id'];
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
        return $this->item['rdfs:comment'] ?? null;
    }

    public function getLabel(): ?string
    {
        return $this->item['rdfs:label'] ?? null;
    }


    public function getRangeIncludes(): array
    {
        return $this->item['http://schema.org/rangeIncludes'] ?? [];
    }

    public function getDomainIncludes(): array
    {
        return $this->item['http://schema.org/domainIncludes'] ?? [];
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

    public function parents(array $item): ?array
    {
        $parents = $item['rdfs:subClassOf'] ?? null;
        if (!is_array($parents)) {
            $classes = [$this->getItemById((string)$parents)];
        } elseif (isset($parents['@id'])) {
            $classes = [$this->getItemById((string)$parents['@id'])];
        } else {
            $classes = [];
            foreach ($parents as $parent) {
                if (is_array($parent) && isset($parent['@id'])) {
                    $classes[] = $this->getItemById($parent['@id']);
                } else {
                    $classes[] = $this->getItemById((string)$parent);
                }
            }
        }
        return array_filter($classes);
    }

    public function getParents()
    {
        return $this->deepParent($this->item);
    }

    public function deepParent(array $item, $parents = [])
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
        $range = [];
        if (isset($includes['@id'])) {
            $item = $this->getItemById($includes['@id']);
            if (!is_null($item)) {
                $range[] = $item;

            }
        } else {
            foreach ($includes as $include) {
                $item = $this->getItemById($include['@id']);
                if (!is_null($item)) {
                    $range[] = $item;
                }
            }
        }
        return $range;
    }


}
