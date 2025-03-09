<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

/**
* A financial product for the loaning of an amount of money, or line of credit, under agreed terms and charges.
* @see schema:LoanOrCredit
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class LoanOrCredit extends FinancialProduct
{
   /**
        * The type of a loan or credit.
        */
    protected $loanType = null;

   /**
        * The duration of the loan or credit agreement.
        */
    protected $loanTerm = null;

   /**
        * Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
        */
    protected $requiredCollateral = null;

   /**
        * The amount of money.
        */
    protected $amount = null;

   /**
        * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
        */
    protected $currency = null;

   /**
        * The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
        */
    protected $recourseLoan = null;

   /**
        * A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
        */
    protected $loanRepaymentForm = null;

   /**
        * Whether the terms for payment of interest can be renegotiated during the life of the loan.
        */
    protected $renegotiableLoan = null;

   /**
        * The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
        */
    protected $gracePeriod = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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


}
