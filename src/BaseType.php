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
    protected $properties = [];
    /**
     * @var
     */
    protected $type;

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->properties[$offset] = $value;
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->properties[$offset];
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->properties);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->properties[$offset]);
    }

    /**
     * @return array|mixed|null
     */
    public function jsonSerialize()
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
        if (substr($name, 0, 3) === 'get') {
            $name = substr($name, 4);
            $name[0] = strtolower($name[0]);
            return $this->getProperty($name);
        }

        if (substr($name, 0, 3) === 'set') {
            $name = substr($name, 4);
            $name[0] = strtolower($name[0]);
        }
        $this->setProperty($name, ...$arguments);
        return $this;
    }

    /**
     * @param bool $context
     * @return array|null
     */
    public function toArray($context = true)
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
     * @param $vars
     * @return array|null
     */
    public function filterArray($vars)
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
    public function setProperty($property, $value)
    {
        $this->properties[$property] = $value;
        return $this;
    }

    /**
     * @param $property
     * @return $this|array|string
     */
    public function getProperty($property)
    {
        return $this->properties[$property];
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return 'https://schema.org';
    }

    /**
     * @return mixed|string
     */
    public function getType()
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
    public function toJson($options = JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    {
        return json_encode($this->toArray(), $options | JSON_UNESCAPED_SLASHES);
    }

    /**
     *
     * @param int $options
     * @return string
     */

    public function toScript(int $options = JSON_UNESCAPED_UNICODE)
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
