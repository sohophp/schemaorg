<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A product or service offered by a bank whereby one may deposit, withdraw or transfer money and in some cases be paid interest.
 * @see https://schema.org/BankAccount
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
 */
class BankAccount extends FinancialProduct
{
    /**
     * A minimum amount that has to be paid in every month.
     * @see https://schema.org/accountMinimumInflow
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function accountMinimumInflow($value)
    {
        $this->setProperty('accountMinimumInflow', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setAccountMinimumInflow($value)
    {
        $this->setProperty('accountMinimumInflow', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addAccountMinimumInflow($value)
    {
        $current = $this->getProperty('accountMinimumInflow');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accountMinimumInflow', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getAccountMinimumInflow()
    {
        return $this->getProperty('accountMinimumInflow');
    }
    /**
     * An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a set amount of money.
     * @see https://schema.org/accountOverdraftLimit
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function accountOverdraftLimit($value)
    {
        $this->setProperty('accountOverdraftLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setAccountOverdraftLimit($value)
    {
        $this->setProperty('accountOverdraftLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addAccountOverdraftLimit($value)
    {
        $current = $this->getProperty('accountOverdraftLimit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accountOverdraftLimit', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getAccountOverdraftLimit()
    {
        return $this->getProperty('accountOverdraftLimit');
    }
    /**
     * The type of a bank account.
     * @see https://schema.org/bankAccountType
     * @param string|array $value
     * @return $this
     */
    public function bankAccountType($value)
    {
        $this->setProperty('bankAccountType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBankAccountType($value)
    {
        $this->setProperty('bankAccountType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBankAccountType($value)
    {
        $current = $this->getProperty('bankAccountType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bankAccountType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBankAccountType()
    {
        return $this->getProperty('bankAccountType');
    }
}
