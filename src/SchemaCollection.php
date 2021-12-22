<?php

namespace Sohophp\SchemaOrg;
/**
 *
 */
class SchemaCollection implements \JsonSerializable, \Countable
{
    /**
     * @var array
     */
    protected array $items = [];

    public function __construct( array $items = [])
    {
        $this->items = $items;
    }

    public function count():int
    {
        return count($this->items);
    }

    public function toArray():array
    {
        return (array) $this->items;
    }

    /**
     * @param BaseType $item
     * @return $this
     */
    public function add(BaseType $item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toJson($options = JSON_UNESCAPED_UNICODE): string
    {
        return json_encode($this->items, $options);
    }

    /**
     *
     * @param int $options
     * @return string
     */
    public function toScript(int $options = JSON_UNESCAPED_UNICODE): string
    {
        return $this->arrayToScript($this->items, $options);
    }

    /**
     * @param array $array
     * @param int $options
     * @return string
     */
    public function arrayToScript(array $array, int $options = JSON_UNESCAPED_UNICODE): string
    {
        $script = [];
        $script[] = '<script type="application/ld+json">';
        $script[] = json_encode($array, $options);
        $script[] = '</script>';
        if ($options & JSON_PRETTY_PRINT) {
            return implode(PHP_EOL, $script);
        }
        return implode('', $script);
    }

    public function __toString()
    {
        return $this->toScript();
    }
}
