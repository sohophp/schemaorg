<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\RepaymentSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing;

/**
* A financial product for the loaning of an amount of money under agreed terms and charges.
* @see http://schema.org/LoanOrCredit
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class LoanOrCredit extends FinancialProduct
{

    /**
    * The duration of the loan or credit agreement.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function loanTerm(?QuantitativeValue $value)
    {
        $this->setProperty('loanTerm', $value);
        return $this;
    }

    /**
    * Whether the terms for payment of interest can be renegotiated during the life of the loan.
    * @param bool $value
    * @return $this
    */
    public function renegotiableLoan(?bool $value)
    {
        $this->setProperty('renegotiableLoan', $value);
        return $this;
    }

    /**
    * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
    * @param RepaymentSpecification $value
    * @return $this
    */
    public function loanRepaymentForm(?RepaymentSpecification $value)
    {
        $this->setProperty('loanRepaymentForm', $value);
        return $this;
    }

    /**
    * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
    * @param Duration $value
    * @return $this
    */
    public function gracePeriod(?Duration $value)
    {
        $this->setProperty('gracePeriod', $value);
        return $this;
    }

    /**
    * The amount of money.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function amount(? $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
    * @param string|Thing $value
    * @return $this
    */
    public function requiredCollateral($value)
    {
        $this->setProperty('requiredCollateral', $value);
        return $this;
    }

    /**
    * The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
    * @param bool $value
    * @return $this
    */
    public function recourseLoan(?bool $value)
    {
        $this->setProperty('recourseLoan', $value);
        return $this;
    }

    /**
    * The currency in which the monetary amount is expressed.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string $value
    * @return $this
    */
    public function currency(?string $value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
    * The type of a loan or credit.
    * @param string|string $value
    * @return $this
    */
    public function loanType($value)
    {
        $this->setProperty('loanType', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\FinancialProduct\\LoanOrCredit','Thing\\LoanOrCredit');

