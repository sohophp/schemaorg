<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value representing repayment.
* @see schema:RepaymentSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class RepaymentSpecification extends StructuredValue
{
   /**
        * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
        */
    protected $loanPaymentFrequency = null;

   /**
        * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
        */
    protected $numberOfLoanPayments = null;

   /**
        * The amount of money to pay in a single payment.
        */
    protected $loanPaymentAmount = null;

   /**
        * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
        */
    protected $downPayment = null;

   /**
        * The amount to be paid as a penalty in the event of early payment of the loan.
        */
    protected $earlyPrepaymentPenalty = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setLoanPaymentFrequency($value)
    {
        $this->setProperty('loanPaymentFrequency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLoanPaymentFrequency()
    {
       return $this->getProperty('loanPaymentFrequency');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfLoanPayments($value)
    {
        $this->setProperty('numberOfLoanPayments', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfLoanPayments()
    {
       return $this->getProperty('numberOfLoanPayments');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLoanPaymentAmount($value)
    {
        $this->setProperty('loanPaymentAmount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLoanPaymentAmount()
    {
       return $this->getProperty('loanPaymentAmount');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDownPayment($value)
    {
        $this->setProperty('downPayment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDownPayment()
    {
       return $this->getProperty('downPayment');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEarlyPrepaymentPenalty($value)
    {
        $this->setProperty('earlyPrepaymentPenalty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEarlyPrepaymentPenalty()
    {
       return $this->getProperty('earlyPrepaymentPenalty');
    }


}
