<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A loan in which property or real estate is used as collateral. (A loan securitized against some real estate.)
* @see http://schema.org/MortgageLoan
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
*/
class MortgageLoan extends LoanOrCredit
{

    /**
    * Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function loanMortgageMandateAmount(?MonetaryAmount $value)
    {
        $this->setProperty('loanMortgageMandateAmount', $value);
        return $this;
    }

    /**
    * Whether borrower is a resident of the jurisdiction where the property is located.
    * @param bool $value
    * @return $this
    */
    public function domiciledMortgage(?bool $value)
    {
        $this->setProperty('domiciledMortgage', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\FinancialProduct\\LoanOrCredit\\MortgageLoan','Thing\\MortgageLoan');

