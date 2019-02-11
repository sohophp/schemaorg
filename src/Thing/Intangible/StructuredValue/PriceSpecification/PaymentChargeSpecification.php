<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
* The costs of settling the payment using a particular payment method.
* @see http://schema.org/PaymentChargeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class PaymentChargeSpecification extends PriceSpecification
{

    /**
    * The payment method(s) to which the payment charge specification applies.
    * @param PaymentMethod $value
    * @return $this
    */
    public function appliesToPaymentMethod(?PaymentMethod $value)
    {
        $this->setProperty('appliesToPaymentMethod', $value);
        return $this;
    }

    /**
    * The delivery method(s) to which the delivery charge or payment charge specification applies.
    * @param DeliveryMethod $value
    * @return $this
    */
    public function appliesToDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('appliesToDeliveryMethod', $value);
        return $this;
    }


}

