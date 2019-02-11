<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
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
    * The amount of money.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function amount(?MonetaryAmount $value)
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


}

