<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;

/**
* Specifies a location feature by providing a structured value representing a
 * feature of an accommodation as a property-value pair of varying degrees of
 * formality.
* @see http://schema.org/LocationFeatureSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue
*/
class LocationFeatureSpecification extends PropertyValue
{


    /**
        * The hours during which this service or contact is available.
        * @param OpeningHoursSpecification|array|string|mixed $value
    * @return $this
    */
    public function hoursAvailable($value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }

    /**
    * @param OpeningHoursSpecification|array|string|mixed $value
    * @return $this
    */
    public function setHoursAvailable($value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHoursAvailable()
    {
       return $this->getProperty('hoursAvailable');
    }


    /**
        * The date when the item becomes valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }


    /**
        * The date after when the item is not valid. For example the end of an offer,
 * salary period, or a period of opening hours.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }


}
