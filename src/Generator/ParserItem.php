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
    private \stdClass $item;
    /**
     * @var Parser
     */
    private Parser $parser;

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
     * @return null|string|mixed
     */
    public function __get($key)
    {
        return $this->getProperty($key);
    }

    /**
     * @param $key
     * @return null|string|mixed|array|object|\stdClass
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
        }
        return $types;
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
        $names = ['Boolean', 'Float', 'Integer', 'Text', 'URL', 'Date', 'DateTime', 'Time', 'DataType', 'Number', 'schema:DataType'];
        return in_array($this->getName(), $names) || in_array('http://schema.org/DataType', $types);
    }

    /**
     * @return bool
     */
    public function isProperty(): bool
    {
        $types = $this->getTypes();
        return in_array('rdf:Property', $types);
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        $comment = $this->getProperty('rdfs:comment');
        if (is_object($comment)) {
            $comment = $comment->{'@value'} ?? '';
        }
        return Filters::doc((string)$comment);

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
        $search = [];
        foreach (['http://schema.org/rangeIncludes', 'schema:rangeIncludes'] as $property) {
            $s = $this->getProperty($property);
            if (is_array($s)) {
                $search = array_merge($search, $s);
            } elseif ($s) {
                $search[] = $s;
            }
        }
        return $this->itemIds($this->getProperty('http://schema.org/rangeIncludes'));
    }

    /**
     * @return array
     */
    public function getDomainIncludes(): array
    {
        $search = [];
        foreach (['http://schema.org/domainIncludes', 'schema:domainIncludes'] as $property) {
            $s = $this->getProperty($property);
            if (is_array($s)) {
                $search = array_merge($search, $s);
            } elseif ($s) {
                $search[] = $s;
            }
        }

        return $this->itemIds($search);
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
    public function getProperties(): array
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
        }
        if (is_object($search)) {
            return array_filter([$search->{'@id'} ?? null]);
        }
        return array_filter([$search]);
    }

    /**
     * @return array
     */
    public function getParents(): array
    {
        return $this->deepParent($this->item);
    }

    /**
     * @param $item
     * @param array $parents
     * @return array
     */
    public function deepParent($item, array $parents = []): array
    {
        $parent = $this->parent($item);
        if (is_null($parent)) {
            return $parents;
        }
        $parents[] = $parent;
        return $this->deepParent($parent->getItem(), $parents);
    }



    /**
     * @return array 所在路径
     */
    public function getPath(): array
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

    public function getPropertyRange(): array
    {
        $includes = $this->getRangeIncludes();
        return array_map([$this, 'getItemById'], $includes);
    }

    /**
     * @return array
     */
    public function __debugInfo(): array
    {
        return ['item' => $this->item];
    }

}
