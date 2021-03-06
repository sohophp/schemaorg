<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;

/**
* Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.
* @see http://schema.org/LocationFeatureSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue

*
*/
class LocationFeatureSpecification extends PropertyValue
{

    /**
    * The hours during which this service or contact is available.
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function hoursAvailable(?OpeningHoursSpecification $value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }
   /**
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function setHoursAvailable(?OpeningHoursSpecification $value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHoursAvailable()
    {
       return $this->getProperty('hoursAvailable');
    }

    /**
    * The date when the item becomes valid.
    * @param |array $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }

    /**
    * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
    * @param |array $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\PropertyValue\\LocationFeatureSpecification','Thing\\LocationFeatureSpecification');

