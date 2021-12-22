<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* The price for the delivery of an offer using a particular delivery method.
* @see http://schema.org/DeliveryChargeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification

*
*/
class DeliveryChargeSpecification extends PriceSpecification
{

    /**
    * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br/><br/>

See also <a class="localLink" href="http://schema.org/eligibleRegion">eligibleRegion</a>.
    * @param Place|string|GeoShape|array $value
    * @return $this
    */
    public function ineligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }
   /**
    * @param Place|string|GeoShape|array $value
    * @return $this
    */
    public function setIneligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIneligibleRegion()
    {
       return $this->getProperty('ineligibleRegion');
    }

    /**
    * The delivery method(s) to which the delivery charge or payment charge specification applies.
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function appliesToDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('appliesToDeliveryMethod', $value);
        return $this;
    }
   /**
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function setAppliesToDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('appliesToDeliveryMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAppliesToDeliveryMethod()
    {
       return $this->getProperty('appliesToDeliveryMethod');
    }

    /**
    * The geographic area where a service or offered item is provided.
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
   /**
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }

    /**
    * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>

See also <a class="localLink" href="http://schema.org/ineligibleRegion">ineligibleRegion</a>.
    * @param Place|string|GeoShape|array $value
    * @return $this
    */
    public function eligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }
   /**
    * @param Place|string|GeoShape|array $value
    * @return $this
    */
    public function setEligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEligibleRegion()
    {
       return $this->getProperty('eligibleRegion');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\PriceSpecification\\DeliveryChargeSpecification','Thing\\DeliveryChargeSpecification');

