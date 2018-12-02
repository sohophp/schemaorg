<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
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

     public function appliesToPaymentMethod(?PaymentMethod $value):self
     {
        $this->setProperty("appliesToPaymentMethod",$value);
        return $this;
     }

     
}

