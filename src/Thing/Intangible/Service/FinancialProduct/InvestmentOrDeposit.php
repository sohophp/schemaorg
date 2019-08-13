<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A type of financial product that typically requires the client to transfer funds to a financial service in return for potential beneficial financial return.
* @see http://schema.org/InvestmentOrDeposit
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class InvestmentOrDeposit extends FinancialProduct
{

    /**
    * The amount of money.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function amount(? $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\FinancialProduct\\InvestmentOrDeposit','Thing\\InvestmentOrDeposit');

