<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\FinancialService\BankOrCreditUnion;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * The act of transferring money from one place to another place. This may occur electronically or physically.
 * @see https://schema.org/MoneyTransfer
 * @package Sohophp\SchemaOrg\Thing\Action\TransferAction
 */
class MoneyTransfer extends TransferAction
{
    /**
     * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the beneficiary.
     * @see https://schema.org/beneficiaryBank
     * @param string|BankOrCreditUnion|array $value
     * @return $this
     */
    public function beneficiaryBank($value)
    {
        $this->setProperty('beneficiaryBank', $value);
        return $this;
    }

    /**
     * @param string|BankOrCreditUnion|array $value
     * @return $this
     */
    public function setBeneficiaryBank($value)
    {
        $this->setProperty('beneficiaryBank', $value);
        return $this;
    }

    /**
     * @param string|BankOrCreditUnion $value
     * @return $this
     */
    public function addBeneficiaryBank($value)
    {
        $current = $this->getProperty('beneficiaryBank');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('beneficiaryBank', $current);
        return $this;
    }

    /**
     * @return string|BankOrCreditUnion|array
     */
    public function getBeneficiaryBank()
    {
        return $this->getProperty('beneficiaryBank');
    }
    /**
     * The amount of money.
     * @see https://schema.org/amount
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function amount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addAmount($value)
    {
        $current = $this->getProperty('amount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('amount', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getAmount()
    {
        return $this->getProperty('amount');
    }
}
