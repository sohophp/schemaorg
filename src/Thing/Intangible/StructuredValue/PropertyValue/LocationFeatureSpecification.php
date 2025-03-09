<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

/**
* Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.
* @see schema:LocationFeatureSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue
*/
class LocationFeatureSpecification extends PropertyValue
{
   /**
        * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
        */
    protected $validThrough = null;

   /**
        * The date when the item becomes valid.
        */
    protected $validFrom = null;

   /**
        * The hours during which this service or contact is available.
        */
    protected $hoursAvailable = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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


}
