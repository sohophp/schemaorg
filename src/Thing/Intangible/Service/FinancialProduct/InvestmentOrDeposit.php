<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A type of financial product that typically requires the client to transfer funds to a financial service in return for potential beneficial financial return.
* @see http://schema.org/InvestmentOrDeposit
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct

*
*/
class InvestmentOrDeposit extends FinancialProduct
{

    /**
    * The amount of money.
    * @param MonetaryAmount|array $value
    * @return $this
    */
    public function amount(?MonetaryAmount $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }
   /**
    * @param MonetaryAmount|array $value
    * @return $this
    */
    public function setAmount(?MonetaryAmount $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAmount()
    {
       return $this->getProperty('amount');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\FinancialProduct\\InvestmentOrDeposit','Thing\\InvestmentOrDeposit');

