<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Generator;

class ArrayCollection implements \ArrayAccess, \JsonSerializable,\Countable
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $this->deep($data);
    }

    public function deep(array $data): array
    {
        array_walk($data, function (&$value) {
            if (is_array($value)) {
                $value = new ArrayCollection($value);
            }
        });
        return $data;
    }

    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->data);
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    public function jsonSerialize()
    {
        return $this->data;
    }
    public function count()
    {
        return count($this->data);
    }


}
