<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
* The costs of settling the payment using a particular payment method.
* @see http://schema.org/PaymentChargeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification

*
*/
class PaymentChargeSpecification extends PriceSpecification
{

    /**
    * The payment method(s) to which the payment charge specification applies.
    * @param PaymentMethod|array $value
    * @return $this
    */
    public function appliesToPaymentMethod(?PaymentMethod $value)
    {
        $this->setProperty('appliesToPaymentMethod', $value);
        return $this;
    }
   /**
    * @param PaymentMethod|array $value
    * @return $this
    */
    public function setAppliesToPaymentMethod(?PaymentMethod $value)
    {
        $this->setProperty('appliesToPaymentMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAppliesToPaymentMethod()
    {
       return $this->getProperty('appliesToPaymentMethod');
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


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\PriceSpecification\\PaymentChargeSpecification','Thing\\PaymentChargeSpecification');

