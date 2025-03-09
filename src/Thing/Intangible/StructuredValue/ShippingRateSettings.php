<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A ShippingRateSettings represents re-usable pieces of shipping information. It is designed for publication on an URL that may be referenced via the [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several occurrences can be published, distinguished and matched (i.e. identified/referenced) by their different values for [[shippingLabel]].
* @see schema:ShippingRateSettings
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ShippingRateSettings extends StructuredValue
{
   /**
        * Indicates when shipping to a particular [[shippingDestination]] is not available.
        */
    protected $doesNotShip = null;

   /**
        * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
        */
    protected $shippingDestination = null;

   /**
        * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
        */
    protected $shippingLabel = null;

   /**
        * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most appropriate.
        */
    protected $shippingRate = null;

   /**
        * A monetary value above (or at) which the shipping rate becomes free. Intended to be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]] matching this [[ShippingRateSettings]].
        */
    protected $freeShippingThreshold = null;

   /**
        * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
        */
    protected $isUnlabelledFallback = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setDoesNotShip($value)
    {
        $this->setProperty('doesNotShip', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDoesNotShip()
    {
       return $this->getProperty('doesNotShip');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setShippingDestination($value)
    {
        $this->setProperty('shippingDestination', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingDestination()
    {
       return $this->getProperty('shippingDestination');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setShippingLabel($value)
    {
        $this->setProperty('shippingLabel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingLabel()
    {
       return $this->getProperty('shippingLabel');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setShippingRate($value)
    {
        $this->setProperty('shippingRate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingRate()
    {
       return $this->getProperty('shippingRate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFreeShippingThreshold($value)
    {
        $this->setProperty('freeShippingThreshold', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFreeShippingThreshold()
    {
       return $this->getProperty('freeShippingThreshold');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsUnlabelledFallback($value)
    {
        $this->setProperty('isUnlabelledFallback', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsUnlabelledFallback()
    {
       return $this->getProperty('isUnlabelledFallback');
    }


}
