<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* ShippingDeliveryTime provides various pieces of information about delivery times for shipping.
* @see schema:ShippingDeliveryTime
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ShippingDeliveryTime extends StructuredValue
{
   /**
        * Days of the week when the merchant typically operates, indicated via opening hours markup.
        */
    protected $businessDays = null;

   /**
        * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY).  This is by common convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business normally operates.
        */
    protected $handlingTime = null;

   /**
        * The typical delay the order has been sent for delivery and the goods reach the final customer. Typical properties: minValue, maxValue, unitCode (d for DAY).
        */
    protected $transitTime = null;

   /**
        * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day. For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be most typically used via the [[ShippingRateSettings]] publication pattern. The time is indicated using the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal Time (UTC).
        */
    protected $cutoffTime = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBusinessDays($value)
    {
        $this->setProperty('businessDays', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBusinessDays()
    {
       return $this->getProperty('businessDays');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHandlingTime($value)
    {
        $this->setProperty('handlingTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHandlingTime()
    {
       return $this->getProperty('handlingTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTransitTime($value)
    {
        $this->setProperty('transitTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTransitTime()
    {
       return $this->getProperty('transitTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCutoffTime($value)
    {
        $this->setProperty('cutoffTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCutoffTime()
    {
       return $this->getProperty('cutoffTime');
    }


}
