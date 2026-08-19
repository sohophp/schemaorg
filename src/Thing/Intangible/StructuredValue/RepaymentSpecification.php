<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A structured value representing repayment.
 * @see https://schema.org/RepaymentSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class RepaymentSpecification extends StructuredValue
{
    /**
     * The amount to be paid as a penalty in the event of early payment of the loan.
     * @see https://schema.org/earlyPrepaymentPenalty
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function earlyPrepaymentPenalty($value)
    {
        $this->setProperty('earlyPrepaymentPenalty', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setEarlyPrepaymentPenalty($value)
    {
        $this->setProperty('earlyPrepaymentPenalty', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addEarlyPrepaymentPenalty($value)
    {
        $current = $this->getProperty('earlyPrepaymentPenalty');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('earlyPrepaymentPenalty', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getEarlyPrepaymentPenalty()
    {
        return $this->getProperty('earlyPrepaymentPenalty');
    }
    /**
     * The amount of money to pay in a single payment.
     * @see https://schema.org/loanPaymentAmount
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function loanPaymentAmount($value)
    {
        $this->setProperty('loanPaymentAmount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setLoanPaymentAmount($value)
    {
        $this->setProperty('loanPaymentAmount', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addLoanPaymentAmount($value)
    {
        $current = $this->getProperty('loanPaymentAmount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('loanPaymentAmount', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getLoanPaymentAmount()
    {
        return $this->getProperty('loanPaymentAmount');
    }
    /**
     * a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
     * @see https://schema.org/downPayment
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function downPayment($value)
    {
        $this->setProperty('downPayment', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setDownPayment($value)
    {
        $this->setProperty('downPayment', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addDownPayment($value)
    {
        $current = $this->getProperty('downPayment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('downPayment', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getDownPayment()
    {
        return $this->getProperty('downPayment');
    }
    /**
     * Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
     * @see https://schema.org/loanPaymentFrequency
     * @param mixed $value
     * @return $this
     */
    public function loanPaymentFrequency($value)
    {
        $this->setProperty('loanPaymentFrequency', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setLoanPaymentFrequency($value)
    {
        $this->setProperty('loanPaymentFrequency', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addLoanPaymentFrequency($value)
    {
        $current = $this->getProperty('loanPaymentFrequency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('loanPaymentFrequency', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLoanPaymentFrequency()
    {
        return $this->getProperty('loanPaymentFrequency');
    }
    /**
     * The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
     * @see https://schema.org/numberOfLoanPayments
     * @param mixed $value
     * @return $this
     */
    public function numberOfLoanPayments($value)
    {
        $this->setProperty('numberOfLoanPayments', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setNumberOfLoanPayments($value)
    {
        $this->setProperty('numberOfLoanPayments', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addNumberOfLoanPayments($value)
    {
        $current = $this->getProperty('numberOfLoanPayments');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfLoanPayments', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfLoanPayments()
    {
        return $this->getProperty('numberOfLoanPayments');
    }
}
