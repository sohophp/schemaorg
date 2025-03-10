<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* The costs of settling the payment using a particular payment method.
* @see schema:PaymentChargeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class PaymentChargeSpecification extends PriceSpecification
{


    /**
        * The payment method(s) to which the payment charge specification applies.
        * @param array|string|mixed $value
    * @return $this
    */
    public function appliesToPaymentMethod($value)
    {
        $this->setProperty('appliesToPaymentMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAppliesToPaymentMethod($value)
    {
        $this->setProperty('appliesToPaymentMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAppliesToPaymentMethod()
    {
       return $this->getProperty('appliesToPaymentMethod');
    }


    /**
        * The delivery method(s) to which the delivery charge or payment charge
 * specification applies.
        * @param array|string|mixed $value
    * @return $this
    */
    public function appliesToDeliveryMethod($value)
    {
        $this->setProperty('appliesToDeliveryMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
