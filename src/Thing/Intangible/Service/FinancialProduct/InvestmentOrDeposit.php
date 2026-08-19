<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

  use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
  * A type of financial product that typically requires the client to transfer
 * funds to a financial service in return for potential beneficial financial
 * return.
  * @see schema:InvestmentOrDeposit
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class InvestmentOrDeposit extends FinancialProduct
{


  /**
      * The amount of money.
    * @param MonetaryAmount|array $value
  * @return $this
  */
  public function amount($value)
  {
  $this->setProperty('amount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|array $value
  * @return $this
  */
  public function setAmount($value)
  {
  $this->setProperty('amount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount $value
  * @return $this
  */
  public function addAmount($value)
  {
  $current = $this->getProperty('amount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('amount', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|array
  */
  public function getAmount()
  {
  return $this->getProperty('amount');
  }


}
