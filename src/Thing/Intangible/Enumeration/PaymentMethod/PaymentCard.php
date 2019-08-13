<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A payment method using a credit, debit, store or other card to associate the payment with an account.
* @see http://schema.org/PaymentCard
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
*/
class PaymentCard extends PaymentMethod
{

    /**
    * A floor limit is the amount of money above which credit card transactions must be authorized.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function floorLimit(?MonetaryAmount $value)
    {
        $this->setProperty('floorLimit', $value);
        return $this;
    }

    /**
    * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
    * @param bool $value
    * @return $this
    */
    public function contactlessPayment(?bool $value)
    {
        $this->setProperty('contactlessPayment', $value);
        return $this;
    }

    /**
    * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
    * @param bool $value
    * @return $this
    */
    public function cashBack(?bool $value)
    {
        $this->setProperty('cashBack', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Enumeration\\PaymentMethod\\PaymentCard','Thing\\PaymentCard');

