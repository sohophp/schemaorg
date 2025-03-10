<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A structured value representing repayment.
* @see http://schema.org/RepaymentSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class RepaymentSpecification extends StructuredValue
{


    /**
        * The amount to be paid as a penalty in the event of early payment of the loan.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function earlyPrepaymentPenalty($value)
    {
        $this->setProperty('earlyPrepaymentPenalty', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
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


    /**
        * Frequency of payments due, i.e. number of months between payments. This is
 * defined as a frequency, i.e. the reciprocal of a period of time.
        * @param array|string|mixed $value
    * @return $this
    */
    public function loanPaymentFrequency($value)
    {
        $this->setProperty('loanPaymentFrequency', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of payments contractually required at origination to repay the
 * loan. For monthly paying loans this is the number of months from the
 * contractual first payment date to the maturity date.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfLoanPayments($value)
    {
        $this->setProperty('numberOfLoanPayments', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The amount of money to pay in a single payment.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function loanPaymentAmount($value)
    {
        $this->setProperty('loanPaymentAmount', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
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
        * a type of payment made in cash during the onset of the purchase of an
 * expensive good/service. The payment typically represents only a percentage of
 * the full purchase price.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function downPayment($value)
    {
        $this->setProperty('downPayment', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
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


}
