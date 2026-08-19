<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A loan in which property or real estate is used as collateral. (A loan securitized against some real estate.)
 * @see https://schema.org/MortgageLoan
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
 */
class MortgageLoan extends LoanOrCredit
{
    /**
     * Whether borrower is a resident of the jurisdiction where the property is located.
     * @see https://schema.org/domiciledMortgage
     * @param bool|array $value
     * @return $this
     */
    public function domiciledMortgage($value)
    {
        $this->setProperty('domiciledMortgage', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setDomiciledMortgage($value)
    {
        $this->setProperty('domiciledMortgage', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addDomiciledMortgage($value)
    {
        $current = $this->getProperty('domiciledMortgage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('domiciledMortgage', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getDomiciledMortgage()
    {
        return $this->getProperty('domiciledMortgage');
    }
    /**
     * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
     * @see https://schema.org/loanMortgageMandateAmount
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function loanMortgageMandateAmount($value)
    {
        $this->setProperty('loanMortgageMandateAmount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setLoanMortgageMandateAmount($value)
    {
        $this->setProperty('loanMortgageMandateAmount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addLoanMortgageMandateAmount($value)
    {
        $current = $this->getProperty('loanMortgageMandateAmount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('loanMortgageMandateAmount', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getLoanMortgageMandateAmount()
    {
        return $this->getProperty('loanMortgageMandateAmount');
    }
}
