<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

/**
* A loan in which property or real estate is used as collateral. (A loan securitized against some real estate.)
* @see schema:MortgageLoan
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
*/
class MortgageLoan extends LoanOrCredit
{
   /**
        * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
        */
    protected $loanMortgageMandateAmount = null;

   /**
        * Whether borrower is a resident of the jurisdiction where the property is located.
        */
    protected $domiciledMortgage = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
