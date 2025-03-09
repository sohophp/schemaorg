<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A DeliveryTimeSettings represents re-usable pieces of shipping information, relating to timing. It is designed for publication on an URL that may be referenced via the [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several occurrences can be published, distinguished (and identified/referenced) by their different values for [[transitTimeLabel]].
* @see schema:DeliveryTimeSettings
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class DeliveryTimeSettings extends StructuredValue
{
   /**
        * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
        */
    protected $transitTimeLabel = null;

   /**
        * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
        */
    protected $shippingDestination = null;

   /**
        * The total delay between the receipt of the order and the goods reaching the final customer.
        */
    protected $deliveryTime = null;

   /**
        * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
        */
    protected $isUnlabelledFallback = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setTransitTimeLabel($value)
    {
        $this->setProperty('transitTimeLabel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTransitTimeLabel()
    {
       return $this->getProperty('transitTimeLabel');
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
    public function setDeliveryTime($value)
    {
        $this->setProperty('deliveryTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeliveryTime()
    {
       return $this->getProperty('deliveryTime');
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
