<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Generator;
/**
 *
 */
class ArrayCollection implements \ArrayAccess, \JsonSerializable,\Countable
{
    /**
     * @var array
     */
    private array $data;

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

    public function offsetSet(mixed $offset,mixed $value):void
    {
        $this->data[$offset] = $value;
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetExists(mixed $offset):bool
    {
        return array_key_exists($offset, $this->data);
    }

    public function offsetUnset(mixed $offset):void
    {
        unset($this->data[$offset]);
    }

    public function jsonSerialize():array
    {
        return $this->data;
    }

    public function count():int
    {
        return count($this->data);
    }


}
