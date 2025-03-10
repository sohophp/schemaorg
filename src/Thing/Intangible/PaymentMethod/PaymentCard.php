<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod;

use Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod;

/**
* A payment method using a credit, debit, store or other card to associate the
 * payment with an account.
* @see schema:PaymentCard
* @package Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod
*/
class PaymentCard extends PaymentMethod
{


    /**
        * A cardholder benefit that pays the cardholder a small percentage of their net
 * expenditures.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cashBack($value)
    {
        $this->setProperty('cashBack', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCashBack($value)
    {
        $this->setProperty('cashBack', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCashBack()
    {
       return $this->getProperty('cashBack');
    }


    /**
        * The minimum payment is the lowest amount of money that one is required to pay
 * on a credit card statement each month.
        * @param array|string|mixed $value
    * @return $this
    */
    public function monthlyMinimumRepaymentAmount($value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMonthlyMinimumRepaymentAmount($value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMonthlyMinimumRepaymentAmount()
    {
       return $this->getProperty('monthlyMinimumRepaymentAmount');
    }


    /**
        * A secure method for consumers to purchase products or services via debit,
 * credit or smartcards by using RFID or NFC technology.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contactlessPayment($value)
    {
        $this->setProperty('contactlessPayment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContactlessPayment($value)
    {
        $this->setProperty('contactlessPayment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContactlessPayment()
    {
       return $this->getProperty('contactlessPayment');
    }


    /**
        * A floor limit is the amount of money above which credit card transactions
 * must be authorized.
        * @param array|string|mixed $value
    * @return $this
    */
    public function floorLimit($value)
    {
        $this->setProperty('floorLimit', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFloorLimit($value)
    {
        $this->setProperty('floorLimit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFloorLimit()
    {
       return $this->getProperty('floorLimit');
    }


}
