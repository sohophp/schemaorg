<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\Order;

/**
* A statement of the money due for goods or services; a bill.
* @see http://schema.org/Invoice
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Invoice extends Intangible
{

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * The date that payment is due.
    * @param  $value
    * @return $this
    */
    public function paymentDue($value)
    {
        $this->setProperty('paymentDue', $value);
        return $this;
    }

    /**
    * The time interval used to compute the invoice.
    * @param Duration $value
    * @return $this
    */
    public function billingPeriod(?Duration $value)
    {
        $this->setProperty('billingPeriod', $value);
        return $this;
    }

    /**
    * A number that confirms the given order or payment has been received.
    * @param string $value
    * @return $this
    */
    public function confirmationNumber(?string $value)
    {
        $this->setProperty('confirmationNumber', $value);
        return $this;
    }

    /**
    * The date the invoice is scheduled to be paid.
    * @param  $value
    * @return $this
    */
    public function scheduledPaymentDate($value)
    {
        $this->setProperty('scheduledPaymentDate', $value);
        return $this;
    }

    /**
    * Party placing the order or paying the invoice.
    * @param Person|Organization $value
    * @return $this
    */
    public function customer($value)
    {
        $this->setProperty('customer', $value);
        return $this;
    }

    /**
    * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param string|Thing $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * The status of payment; whether the invoice has been paid or not.
    * @param PaymentStatusType|string $value
    * @return $this
    */
    public function paymentStatus($value)
    {
        $this->setProperty('paymentStatus', $value);
        return $this;
    }

    /**
    * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
    * @param Organization|Person $value
    * @return $this
    */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
    * The name of the credit card or other method of payment for the order.
    * @param PaymentMethod $value
    * @return $this
    */
    public function paymentMethod(?PaymentMethod $value)
    {
        $this->setProperty('paymentMethod', $value);
        return $this;
    }

    /**
    * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
    * @param string $value
    * @return $this
    */
    public function paymentMethodId(?string $value)
    {
        $this->setProperty('paymentMethodId', $value);
        return $this;
    }

    /**
    * The minimum payment required at this time.
    * @param PriceSpecification|MonetaryAmount $value
    * @return $this
    */
    public function minimumPaymentDue($value)
    {
        $this->setProperty('minimumPaymentDue', $value);
        return $this;
    }

    /**
    * The total amount due.
    * @param MonetaryAmount|PriceSpecification $value
    * @return $this
    */
    public function totalPaymentDue($value)
    {
        $this->setProperty('totalPaymentDue', $value);
        return $this;
    }

    /**
    * The identifier for the account the payment will be applied to.
    * @param string $value
    * @return $this
    */
    public function accountId(?string $value)
    {
        $this->setProperty('accountId', $value);
        return $this;
    }

    /**
    * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
    * @param Order $value
    * @return $this
    */
    public function referencesOrder(?Order $value)
    {
        $this->setProperty('referencesOrder', $value);
        return $this;
    }

    /**
    * The date that payment is due.
    * @param  $value
    * @return $this
    */
    public function paymentDueDate($value)
    {
        $this->setProperty('paymentDueDate', $value);
        return $this;
    }


}

