<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

/**
* A loan in which property or real estate is used as collateral. (A loan
 * securitized against some real estate.)
* @see schema:MortgageLoan
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
*/
class MortgageLoan extends LoanOrCredit
{


    /**
        * Amount of mortgage mandate that can be converted into a proper mortgage at a
 * later stage.
        * @param array|string|mixed $value
    * @return $this
    */
    public function loanMortgageMandateAmount($value)
    {
        $this->setProperty('loanMortgageMandateAmount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLoanMortgageMandateAmount($value)
    {
        $this->setProperty('loanMortgageMandateAmount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLoanMortgageMandateAmount()
    {
       return $this->getProperty('loanMortgageMandateAmount');
    }


    /**
        * Whether borrower is a resident of the jurisdiction where the property is
 * located.
        * @param array|string|mixed $value
    * @return $this
    */
    public function domiciledMortgage($value)
    {
        $this->setProperty('domiciledMortgage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDomiciledMortgage($value)
    {
        $this->setProperty('domiciledMortgage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDomiciledMortgage()
    {
       return $this->getProperty('domiciledMortgage');
    }


}
