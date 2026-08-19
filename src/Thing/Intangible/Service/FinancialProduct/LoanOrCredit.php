<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\RepaymentSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A financial product for the loaning of an amount of money, or line of credit, under agreed terms and charges.
 * @see https://schema.org/LoanOrCredit
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
 */
class LoanOrCredit extends FinancialProduct
{
    /**
     * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
     * @see https://schema.org/requiredCollateral
     * @param Thing|string|array $value
     * @return $this
     */
    public function requiredCollateral($value)
    {
        $this->setProperty('requiredCollateral', $value);
        return $this;
    }

    /**
     * @param Thing|string|array $value
     * @return $this
     */
    public function setRequiredCollateral($value)
    {
        $this->setProperty('requiredCollateral', $value);
        return $this;
    }

    /**
     * @param Thing|string $value
     * @return $this
     */
    public function addRequiredCollateral($value)
    {
        $current = $this->getProperty('requiredCollateral');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requiredCollateral', $current);
        return $this;
    }

    /**
     * @return Thing|string|array
     */
    public function getRequiredCollateral()
    {
        return $this->getProperty('requiredCollateral');
    }
    /**
     * The type of a loan or credit.
     * @see https://schema.org/loanType
     * @param string|array $value
     * @return $this
     */
    public function loanType($value)
    {
        $this->setProperty('loanType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLoanType($value)
    {
        $this->setProperty('loanType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLoanType($value)
    {
        $current = $this->getProperty('loanType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('loanType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLoanType()
    {
        return $this->getProperty('loanType');
    }
    /**
     * The duration of the loan or credit agreement.
     * @see https://schema.org/loanTerm
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function loanTerm($value)
    {
        $this->setProperty('loanTerm', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setLoanTerm($value)
    {
        $this->setProperty('loanTerm', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addLoanTerm($value)
    {
        $current = $this->getProperty('loanTerm');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('loanTerm', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getLoanTerm()
    {
        return $this->getProperty('loanTerm');
    }
    /**
     * The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
     * @see https://schema.org/recourseLoan
     * @param bool|array $value
     * @return $this
     */
    public function recourseLoan($value)
    {
        $this->setProperty('recourseLoan', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setRecourseLoan($value)
    {
        $this->setProperty('recourseLoan', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addRecourseLoan($value)
    {
        $current = $this->getProperty('recourseLoan');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('recourseLoan', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getRecourseLoan()
    {
        return $this->getProperty('recourseLoan');
    }
    /**
     * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
     * @see https://schema.org/gracePeriod
     * @param Duration|array $value
     * @return $this
     */
    public function gracePeriod($value)
    {
        $this->setProperty('gracePeriod', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setGracePeriod($value)
    {
        $this->setProperty('gracePeriod', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addGracePeriod($value)
    {
        $current = $this->getProperty('gracePeriod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gracePeriod', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getGracePeriod()
    {
        return $this->getProperty('gracePeriod');
    }
    /**
     * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
     * @see https://schema.org/loanRepaymentForm
     * @param RepaymentSpecification|array $value
     * @return $this
     */
    public function loanRepaymentForm($value)
    {
        $this->setProperty('loanRepaymentForm', $value);
        return $this;
    }

    /**
     * @param RepaymentSpecification|array $value
     * @return $this
     */
    public function setLoanRepaymentForm($value)
    {
        $this->setProperty('loanRepaymentForm', $value);
        return $this;
    }

    /**
     * @param RepaymentSpecification $value
     * @return $this
     */
    public function addLoanRepaymentForm($value)
    {
        $current = $this->getProperty('loanRepaymentForm');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('loanRepaymentForm', $current);
        return $this;
    }

    /**
     * @return RepaymentSpecification|array
     */
    public function getLoanRepaymentForm()
    {
        return $this->getProperty('loanRepaymentForm');
    }
    /**
     * Whether the terms for payment of interest can be renegotiated during the life of the loan.
     * @see https://schema.org/renegotiableLoan
     * @param bool|array $value
     * @return $this
     */
    public function renegotiableLoan($value)
    {
        $this->setProperty('renegotiableLoan', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setRenegotiableLoan($value)
    {
        $this->setProperty('renegotiableLoan', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addRenegotiableLoan($value)
    {
        $current = $this->getProperty('renegotiableLoan');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('renegotiableLoan', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getRenegotiableLoan()
    {
        return $this->getProperty('renegotiableLoan');
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
    /**
     * The currency in which the monetary amount is expressed. Use standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @see https://schema.org/currency
     * @param string|array $value
     * @return $this
     */
    public function currency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCurrency($value)
    {
        $current = $this->getProperty('currency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('currency', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCurrency()
    {
        return $this->getProperty('currency');
    }
}
