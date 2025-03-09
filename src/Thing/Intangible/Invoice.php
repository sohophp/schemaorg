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
        */
    protected $minimumPaymentDue = null;

   /**
        * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
        */
    protected $paymentMethodId = null;

   /**
        * The name of the credit card or other method of payment for the order.
        */
    protected $paymentMethod = null;

   /**
        * A number that confirms the given order or payment has been received.
        */
    protected $confirmationNumber = null;

   /**
        * The date that payment is due.
        */
    protected $paymentDue = null;

   /**
        * The date the invoice is scheduled to be paid.
        */
    protected $scheduledPaymentDate = null;

   /**
        * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
        */
    protected $category = null;

   /**
        * The date that payment is due.
        */
    protected $paymentDueDate = null;

   /**
        * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
        */
    protected $provider = null;

   /**
        * The time interval used to compute the invoice.
        */
    protected $billingPeriod = null;

   /**
        * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
        */
    protected $referencesOrder = null;

   /**
        * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
        */
    protected $broker = null;

   /**
        * The status of payment; whether the invoice has been paid or not.
        */
    protected $paymentStatus = null;

   /**
        * The total amount due.
        */
    protected $totalPaymentDue = null;

   /**
        * The identifier for the account the payment will be applied to.
        */
    protected $accountId = null;

   /**
        * Party placing the order or paying the invoice.
        */
    protected $customer = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
