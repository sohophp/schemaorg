<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\RepaymentSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing;

/**
* A financial product for the loaning of an amount of money under agreed terms
 * and charges.
* @see http://schema.org/LoanOrCredit
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class LoanOrCredit extends FinancialProduct
{


    /**
        * The duration of the loan or credit agreement.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function loanTerm($value)
    {
        $this->setProperty('loanTerm', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function setLoanTerm($value)
    {
        $this->setProperty('loanTerm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLoanTerm()
    {
       return $this->getProperty('loanTerm');
    }


    /**
        * Whether the terms for payment of interest can be renegotiated during the life
 * of the loan.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function renegotiableLoan($value)
    {
        $this->setProperty('renegotiableLoan', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setRenegotiableLoan($value)
    {
        $this->setProperty('renegotiableLoan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRenegotiableLoan()
    {
       return $this->getProperty('renegotiableLoan');
    }


    /**
        * A form of paying back money previously borrowed from a lender. Repayment
 * usually takes the form of periodic payments that normally include part
 * principal plus interest in each payment.
        * @param RepaymentSpecification|array|string|mixed $value
    * @return $this
    */
    public function loanRepaymentForm($value)
    {
        $this->setProperty('loanRepaymentForm', $value);
        return $this;
    }

    /**
    * @param RepaymentSpecification|array|string|mixed $value
    * @return $this
    */
    public function setLoanRepaymentForm($value)
    {
        $this->setProperty('loanRepaymentForm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLoanRepaymentForm()
    {
       return $this->getProperty('loanRepaymentForm');
    }


    /**
        * The period of time after any due date that the borrower has to fulfil its
 * obligations before a default (failure to pay) is deemed to have occurred.
        * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function gracePeriod($value)
    {
        $this->setProperty('gracePeriod', $value);
        return $this;
    }

    /**
    * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function setGracePeriod($value)
    {
        $this->setProperty('gracePeriod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGracePeriod()
    {
       return $this->getProperty('gracePeriod');
    }


    /**
        * The amount of money.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function amount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function setAmount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmount()
    {
       return $this->getProperty('amount');
    }


    /**
        * Assets required to secure loan or credit repayments. It may take form of
 * third party pledge, goods, financial instruments (cash, securities, etc.)
        * @param string|Thing|array|mixed $value
    * @return $this
    */
    public function requiredCollateral($value)
    {
        $this->setProperty('requiredCollateral', $value);
        return $this;
    }

    /**
    * @param string|Thing|array|mixed $value
    * @return $this
    */
    public function setRequiredCollateral($value)
    {
        $this->setProperty('requiredCollateral', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequiredCollateral()
    {
       return $this->getProperty('requiredCollateral');
    }


    /**
        * The only way you get the money back in the event of default is the security.
 * Recourse is where you still have the opportunity to go back to the borrower
 * for the rest of the money.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function recourseLoan($value)
    {
        $this->setProperty('recourseLoan', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setRecourseLoan($value)
    {
        $this->setProperty('recourseLoan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecourseLoan()
    {
       return $this->getProperty('recourseLoan');
    }


    /**
        * The currency in which the monetary amount is expressed.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types e.g. "Ithaca HOUR".
        * @param string|array|mixed $value
    * @return $this
    */
    public function currency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCurrency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCurrency()
    {
       return $this->getProperty('currency');
    }


    /**
        * The type of a loan or credit.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function loanType($value)
    {
        $this->setProperty('loanType', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setLoanType($value)
    {
        $this->setProperty('loanType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLoanType()
    {
       return $this->getProperty('loanType');
    }


}
