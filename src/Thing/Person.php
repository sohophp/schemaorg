<?php

namespace Sohophp\SchemaOrg\Thing;


use Sohophp\SchemaOrg\Thing;

/**
 * Class Person
 * @package Sohophp\SchemaOrg\Thing
 * @see https://schema.org/Person
 */
class Person extends Thing
{

    public function __construct($name = null)
    {
        if (!is_null($name)) {
            $this->name($name);
        }
    }
}
