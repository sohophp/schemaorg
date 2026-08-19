<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A payment method using a credit, debit, store or other card to associate the payment with an account.
 * @see https://schema.org/PaymentCard
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
 */
class PaymentCard extends FinancialProduct
{
    /**
     * A floor limit is the amount of money above which credit card transactions must be authorized.
     * @see https://schema.org/floorLimit
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function floorLimit($value)
    {
        $this->setProperty('floorLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setFloorLimit($value)
    {
        $this->setProperty('floorLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addFloorLimit($value)
    {
        $current = $this->getProperty('floorLimit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('floorLimit', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getFloorLimit()
    {
        return $this->getProperty('floorLimit');
    }
    /**
     * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
     * @see https://schema.org/monthlyMinimumRepaymentAmount
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function monthlyMinimumRepaymentAmount($value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setMonthlyMinimumRepaymentAmount($value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addMonthlyMinimumRepaymentAmount($value)
    {
        $current = $this->getProperty('monthlyMinimumRepaymentAmount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('monthlyMinimumRepaymentAmount', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getMonthlyMinimumRepaymentAmount()
    {
        return $this->getProperty('monthlyMinimumRepaymentAmount');
    }
    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
     * @see https://schema.org/cashBack
     * @param bool|array $value
     * @return $this
     */
    public function cashBack($value)
    {
        $this->setProperty('cashBack', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setCashBack($value)
    {
        $this->setProperty('cashBack', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addCashBack($value)
    {
        $current = $this->getProperty('cashBack');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('cashBack', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getCashBack()
    {
        return $this->getProperty('cashBack');
    }
    /**
     * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
     * @see https://schema.org/contactlessPayment
     * @param bool|array $value
     * @return $this
     */
    public function contactlessPayment($value)
    {
        $this->setProperty('contactlessPayment', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setContactlessPayment($value)
    {
        $this->setProperty('contactlessPayment', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addContactlessPayment($value)
    {
        $current = $this->getProperty('contactlessPayment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contactlessPayment', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getContactlessPayment()
    {
        return $this->getProperty('contactlessPayment');
    }
}
