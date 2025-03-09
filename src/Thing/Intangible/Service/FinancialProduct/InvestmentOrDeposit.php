<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

/**
* A type of financial product that typically requires the client to transfer funds to a financial service in return for potential beneficial financial return.
* @see schema:InvestmentOrDeposit
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class InvestmentOrDeposit extends FinancialProduct
{
   /**
        * The amount of money.
        */
    protected $amount = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAmount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmount()
    {
       return $this->getProperty('amount');
    }


}
