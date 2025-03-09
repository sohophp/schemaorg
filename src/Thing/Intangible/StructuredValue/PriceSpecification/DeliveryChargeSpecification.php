<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* The price for the delivery of an offer using a particular delivery method.
* @see schema:DeliveryChargeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class DeliveryChargeSpecification extends PriceSpecification
{
   /**
        * The delivery method(s) to which the delivery charge or payment charge specification applies.
        */
    protected $appliesToDeliveryMethod = null;

   /**
        * The geographic area where a service or offered item is provided.
        */
    protected $areaServed = null;

   /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
    
        */
    protected $eligibleRegion = null;

   /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
      
        */
    protected $ineligibleRegion = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAppliesToDeliveryMethod($value)
    {
        $this->setProperty('appliesToDeliveryMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAppliesToDeliveryMethod()
    {
       return $this->getProperty('appliesToDeliveryMethod');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleRegion()
    {
       return $this->getProperty('eligibleRegion');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIneligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIneligibleRegion()
    {
       return $this->getProperty('ineligibleRegion');
    }


}
