<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Class;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

/**
* A property, used to indicate attributes and relationships of some Thing; equivalent to rdf:Property.
* @see http://schema.org/Property
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Property extends Intangible
{

    /**
    * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
    * @param Class $value
    * @return $this
    */
    public function rangeIncludes(?Class $value)
    {
        $this->setProperty('rangeIncludes', $value);
        return $this;
    }

    /**
    * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other, but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses; in these situations RDFa and JSON-LD syntax for reverse properties can be used.
    * @param Property $value
    * @return $this
    */
    public function inverseOf(?Property $value)
    {
        $this->setProperty('inverseOf', $value);
        return $this;
    }

    /**
    * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
    * @param Class $value
    * @return $this
    */
    public function domainIncludes(?Class $value)
    {
        $this->setProperty('domainIncludes', $value);
        return $this;
    }

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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Property','Thing\\Property');

