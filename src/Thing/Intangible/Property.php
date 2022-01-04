<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Class;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

/**
* A property, used to indicate attributes and relationships of some Thing; equivalent to rdf:Property.
* @see http://schema.org/Property
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Property extends Intangible
{

    /**
    * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
    * @param Class|array|string $value
    * @return $this
    * @deprecated use setRangeIncludes
    */
    public function rangeIncludes($value)
    {
        $this->setProperty('rangeIncludes', $value);
        return $this;
    }
   /**
    * @param Class|array|string $value
    * @return $this
    */
    public function setRangeIncludes($value)
    {
        $this->setProperty('rangeIncludes', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRangeIncludes()
    {
       return $this->getProperty('rangeIncludes');
    }

    /**
    * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other, but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses; in these situations RDFa and JSON-LD syntax for reverse properties can be used.
    * @param Property|array|string $value
    * @return $this
    * @deprecated use setInverseOf
    */
    public function inverseOf($value)
    {
        $this->setProperty('inverseOf', $value);
        return $this;
    }
   /**
    * @param Property|array|string $value
    * @return $this
    */
    public function setInverseOf($value)
    {
        $this->setProperty('inverseOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInverseOf()
    {
       return $this->getProperty('inverseOf');
    }

    /**
    * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
    * @param Class|array|string $value
    * @return $this
    * @deprecated use setDomainIncludes
    */
    public function domainIncludes($value)
    {
        $this->setProperty('domainIncludes', $value);
        return $this;
    }
   /**
    * @param Class|array|string $value
    * @return $this
    */
    public function setDomainIncludes($value)
    {
        $this->setProperty('domainIncludes', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDomainIncludes()
    {
       return $this->getProperty('domainIncludes');
    }

    /**
    * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
    * @param Class|Enumeration|Property|array|string $value
    * @return $this
    * @deprecated use setSupersededBy
    */
    public function supersededBy($value)
    {
        $this->setProperty('supersededBy', $value);
        return $this;
    }
   /**
    * @param Class|Enumeration|Property|array|string $value
    * @return $this
    */
    public function setSupersededBy($value)
    {
        $this->setProperty('supersededBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSupersededBy()
    {
       return $this->getProperty('supersededBy');
    }


}
