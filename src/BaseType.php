<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg;

/**
 * Class BaseType
 * @package Sohophp\SchemaOrg
 */
class BaseType implements \ArrayAccess, \JsonSerializable
{
    /**
     * @var array
     */
    protected array $properties = [];
    /**
     * @var mixed
     */
    protected mixed $type;

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet(mixed $offset, mixed $value):void
    {
        $this->properties[$offset] = $value;
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet(mixed $offset):mixed
    {
        return $this->properties[$offset];
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(mixed $offset):bool
    {
        return array_key_exists($offset, $this->properties);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset(mixed $offset):void
    {
        unset($this->properties[$offset]);
    }

    /**
     * @return array
     */
    public function jsonSerialize():array
    {
        return $this->toArray();
    }

    /**
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        if (str_starts_with($name, 'get')) {
            $name = substr($name, 4);
            $name[0] = strtolower($name[0]);
            return $this->getProperty($name);
        }

        if (str_starts_with($name, 'set')) {
            $name = substr($name, 4);
            $name[0] = strtolower($name[0]);
        }
        $this->setProperty($name, ...$arguments);
        return $this;
    }

    /**
     * @param bool $context
     * @return array
     */
    public function toArray(bool $context = true):  array
    {

        $vars = $this->properties;
        $type = $this->getType();
        if ($type !== false) {
            $vars = array_merge(['@type' => $type], $vars);
        }
        if ($context) {
            $vars = array_merge(['@context' => $this->getContext()], $vars);
        }

        return $this->filterArray($vars);

    }

    /**
     * @param mixed $vars
     * @return mixed
     */
    public function filterArray(mixed $vars):mixed
    {
        if ($vars instanceof BaseType) {
            return $vars->toArray(false);
        } elseif ($vars instanceof DataType) {
            return $vars->getValue();
        } elseif (is_array($vars)) {
            return array_map([$this, 'filterArray'], $vars);
        } else {
            return $vars;
        }
    }

    /**
     * @param $property
     * @param $value
     * @return $this
     */
    public function setProperty($property, $value): static
    {
        $this->properties[$property] = $value;
        return $this;
    }

    /**
     * @param $property
     * @return $this|array|string
     */
    public function getProperty($property): array|string|static
    {
        return $this->properties[$property];
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return 'https://schema.org';
    }

    /**
     * @return mixed
     */
    public function getType(): mixed
    {
        try {
            return $this->type ?? (new \ReflectionClass($this))->getShortName();
        } catch (\ReflectionException $e) {
            $arr = preg_split('#\#', static::class);
            return $arr[count($arr) - 1];
        }
    }

    /**
     * @param int $options
     * @return false|string
     */
    public function toJson(int $options = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES): bool|string
    {
        return json_encode($this->toArray(), $options | JSON_UNESCAPED_SLASHES);
    }

    /**
     *
     * @param int $options
     * @return string
     */

    public function toScript(int $options = JSON_UNESCAPED_UNICODE): string
    {
        $script = [];
        $script[] = '<script type="application/ld+json">';
        $script[] = $this->toJson($options);
        $script[] = '</script>';
        if ($options & JSON_PRETTY_PRINT) {
            return implode(PHP_EOL, $script);
        } else {
            return implode('', $script);
        }
    }
}
