<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A statement of the money due for goods or services; a bill.
* @see schema:Invoice
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Invoice extends Intangible
{


    /**
        * The minimum payment required at this time.
        * @param array|string|mixed $value
    * @return $this
    */
    public function minimumPaymentDue($value)
    {
        $this->setProperty('minimumPaymentDue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMinimumPaymentDue($value)
    {
        $this->setProperty('minimumPaymentDue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMinimumPaymentDue()
    {
       return $this->getProperty('minimumPaymentDue');
    }


    /**
        * An identifier for the method of payment used (e.g. the last 4 digits of the
 * credit card).
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentMethodId($value)
    {
        $this->setProperty('paymentMethodId', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPaymentMethodId($value)
    {
        $this->setProperty('paymentMethodId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentMethodId()
    {
       return $this->getProperty('paymentMethodId');
    }


    /**
        * The name of the credit card or other method of payment for the order.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentMethod($value)
    {
        $this->setProperty('paymentMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPaymentMethod($value)
    {
        $this->setProperty('paymentMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentMethod()
    {
       return $this->getProperty('paymentMethod');
    }


    /**
        * A number that confirms the given order or payment has been received.
        * @param array|string|mixed $value
    * @return $this
    */
    public function confirmationNumber($value)
    {
        $this->setProperty('confirmationNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setConfirmationNumber($value)
    {
        $this->setProperty('confirmationNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getConfirmationNumber()
    {
       return $this->getProperty('confirmationNumber');
    }


    /**
        * The date that payment is due.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentDue($value)
    {
        $this->setProperty('paymentDue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPaymentDue($value)
    {
        $this->setProperty('paymentDue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentDue()
    {
       return $this->getProperty('paymentDue');
    }


    /**
        * The date the invoice is scheduled to be paid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function scheduledPaymentDate($value)
    {
        $this->setProperty('scheduledPaymentDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setScheduledPaymentDate($value)
    {
        $this->setProperty('scheduledPaymentDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getScheduledPaymentDate()
    {
       return $this->getProperty('scheduledPaymentDate');
    }


    /**
        * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }


    /**
        * The date that payment is due.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentDueDate($value)
    {
        $this->setProperty('paymentDueDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPaymentDueDate($value)
    {
        $this->setProperty('paymentDueDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentDueDate()
    {
       return $this->getProperty('paymentDueDate');
    }


    /**
        * The service provider, service operator, or service performer; the goods
 * producer. Another party (a seller) may offer those services or goods on
 * behalf of the provider. A provider may also serve as the seller.
        * @param array|string|mixed $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }


    /**
        * The time interval used to compute the invoice.
        * @param array|string|mixed $value
    * @return $this
    */
    public function billingPeriod($value)
    {
        $this->setProperty('billingPeriod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBillingPeriod($value)
    {
        $this->setProperty('billingPeriod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBillingPeriod()
    {
       return $this->getProperty('billingPeriod');
    }


    /**
        * The Order(s) related to this Invoice. One or more Orders may be combined into
 * a single Invoice.
        * @param array|string|mixed $value
    * @return $this
    */
    public function referencesOrder($value)
    {
        $this->setProperty('referencesOrder', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReferencesOrder($value)
    {
        $this->setProperty('referencesOrder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReferencesOrder()
    {
       return $this->getProperty('referencesOrder');
    }


    /**
        * An entity that arranges for an exchange between a buyer and a seller.  In
 * most cases a broker never acquires or releases ownership of a product or
 * service involved in an exchange.  If it is not clear whether an entity is a
 * broker, seller, or buyer, the latter two terms are preferred.
        * @param array|string|mixed $value
    * @return $this
    */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBroker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroker()
    {
       return $this->getProperty('broker');
    }


    /**
        * The status of payment; whether the invoice has been paid or not.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentStatus($value)
    {
        $this->setProperty('paymentStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPaymentStatus($value)
    {
        $this->setProperty('paymentStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentStatus()
    {
       return $this->getProperty('paymentStatus');
    }


    /**
        * The total amount due.
        * @param array|string|mixed $value
    * @return $this
    */
    public function totalPaymentDue($value)
    {
        $this->setProperty('totalPaymentDue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTotalPaymentDue($value)
    {
        $this->setProperty('totalPaymentDue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTotalPaymentDue()
    {
       return $this->getProperty('totalPaymentDue');
    }


    /**
        * The identifier for the account the payment will be applied to.
        * @param array|string|mixed $value
    * @return $this
    */
    public function accountId($value)
    {
        $this->setProperty('accountId', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccountId($value)
    {
        $this->setProperty('accountId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccountId()
    {
       return $this->getProperty('accountId');
    }


    /**
        * Party placing the order or paying the invoice.
        * @param array|string|mixed $value
    * @return $this
    */
    public function customer($value)
    {
        $this->setProperty('customer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCustomer($value)
    {
        $this->setProperty('customer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCustomer()
    {
       return $this->getProperty('customer');
    }


}
