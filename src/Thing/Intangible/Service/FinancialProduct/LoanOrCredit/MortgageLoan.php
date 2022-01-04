<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A loan in which property or real estate is used as collateral. (A loan securitized against some real estate.)
* @see http://schema.org/MortgageLoan
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit

*
*/
class MortgageLoan extends LoanOrCredit
{

    /**
    * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
    * @param MonetaryAmount|array|string $value
    * @return $this
    * @deprecated use setLoanMortgageMandateAmount
    */
    public function loanMortgageMandateAmount($value)
    {
        $this->setProperty('loanMortgageMandateAmount', $value);
        return $this;
    }
   /**
    * @param MonetaryAmount|array|string $value
    * @return $this
    */
    public function setLoanMortgageMandateAmount($value)
    {
        $this->setProperty('loanMortgageMandateAmount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLoanMortgageMandateAmount()
    {
       return $this->getProperty('loanMortgageMandateAmount');
    }

    /**
    * Whether borrower is a resident of the jurisdiction where the property is located.
    * @param bool|array|string $value
    * @return $this
    * @deprecated use setDomiciledMortgage
    */
    public function domiciledMortgage($value)
    {
        $this->setProperty('domiciledMortgage', $value);
        return $this;
    }
   /**
    * @param bool|array|string $value
    * @return $this
    */
    public function setDomiciledMortgage($value)
    {
        $this->setProperty('domiciledMortgage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDomiciledMortgage()
    {
       return $this->getProperty('domiciledMortgage');
    }


}
