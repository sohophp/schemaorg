<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A payment method using a credit, debit, store or other card to associate the
 * payment with an account.
* @see http://schema.org/PaymentCard
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
*/
class PaymentCard extends PaymentMethod
{


    /**
        * A floor limit is the amount of money above which credit card transactions
 * must be authorized.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function floorLimit($value)
    {
        $this->setProperty('floorLimit', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
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


    /**
        * A secure method for consumers to purchase products or services via debit,
 * credit or smartcards by using RFID or NFC technology.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function contactlessPayment($value)
    {
        $this->setProperty('contactlessPayment', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
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
        * A cardholder benefit that pays the cardholder a small percentage of their net
 * expenditures.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function cashBack($value)
    {
        $this->setProperty('cashBack', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
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


}
