<?php declare(strict_types=1);
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
    * @param MonetaryAmount $value
    * @return $this
    */
    public function earlyPrepaymentPenalty(?MonetaryAmount $value)
    {
        $this->setProperty('earlyPrepaymentPenalty', $value);
        return $this;
    }

    /**
    * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
    * @param  $value
    * @return $this
    */
    public function loanPaymentFrequency($value)
    {
        $this->setProperty('loanPaymentFrequency', $value);
        return $this;
    }

    /**
    * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
    * @param  $value
    * @return $this
    */
    public function numberOfLoanPayments($value)
    {
        $this->setProperty('numberOfLoanPayments', $value);
        return $this;
    }

    /**
    * The amount of money to pay in a single payment.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function loanPaymentAmount(?MonetaryAmount $value)
    {
        $this->setProperty('loanPaymentAmount', $value);
        return $this;
    }

    /**
    * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function downPayment(?MonetaryAmount $value)
    {
        $this->setProperty('downPayment', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\RepaymentSpecification','Thing\\RepaymentSpecification');

