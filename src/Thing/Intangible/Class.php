<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Property;

/**
* A class, also often called a 'Type'; equivalent to rdfs:Class.
* @see http://schema.org/Class
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Class extends Intangible
{

    /**
    * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
    * @param Class|Enumeration|Property $value
    * @return $this
    */
    public function supersededBy($value)
    {
        $this->setProperty('supersededBy', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Class','Thing\\Class');

