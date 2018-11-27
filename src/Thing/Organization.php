<?php

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
 * Class Organization
 * @package Sohophp\SchemaOrg\Thing
 * @see https://schema.org/Organization
 */
class Organization extends Thing
{
    public function __construct($name = null)
    {
        if (!is_null($name)) {
            $this->name($name);
        }

    }

    /**
     * @param $value
     * @return $this
     */
    public function logo($value)
    {
        if (is_string($value)) {
            $value = new Thing\CreativeWork\MediaObject\ImageObject($value);
        }
        $this->setProperty('logo', $value);
        return $this;
    }

}
