<?php

namespace Sohophp\SchemaOrg;

use Sohophp\SchemaOrg\DataType;
use \ReflectionClass;

class BaseType implements \ArrayAccess, \JsonSerializable
{
    protected $properties = [];
    protected $type;

    public function offsetSet($offset, $value)
    {
        $this->properties[$offset] = $value;
    }

    public function offsetGet($offset)
    {
        return $this->properties[$offset];// ?? null;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->properties);
    }

    public function offsetUnset($offset)
    {
        unset($this->properties[$offset]);
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toArray()
    {
        $vars = $this->properties;
        $type = $this->getType();
        if ($type !== false) {
            $vars = array_merge(['@type' => $type], $vars);
        }
        return $this->filterArray($vars);
    }

    public function filterArray($vars)
    {
        if ($vars instanceof BaseType) {
            return $vars->toArray();
        } elseif ($vars instanceof DataType) {
            return $vars->getValue();
        } elseif (is_array($vars)) {
            return array_map([$this, 'filterArray'], $vars);
        } else {
            return $vars;
        }
    }

    public function setProperty($property, $value)
    {
        $this->properties[$property] = $value;
        return $this;
    }

    public function getProperty($property)
    {
        return $this->properties[$property];
    }

    public function getContext()
    {
        return 'https://schema.org';
    }

    public function getType()
    {
        return $this->type ?? (new ReflectionClass($this))->getShortName();
    }

    public function toJson($options = JSON_UNESCAPED_UNICODE)
    {
        return json_encode(array_merge(['@context' => $this->getContext()], $this->toArray()), $options);
    }

    public function toScript($options = JSON_UNESCAPED_UNICODE )
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
