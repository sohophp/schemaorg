<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Class;
use Sohophp\SchemaOrg\Thing\Intangible\Property;

/**
* Lists or enumerations—for example, a list of cuisines or music genres, etc.
* @see http://schema.org/Enumeration
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Enumeration extends Intangible
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Enumeration','Thing\\Enumeration');

