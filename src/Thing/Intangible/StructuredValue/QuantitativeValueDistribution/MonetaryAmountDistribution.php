<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

/**
  * A statistical distribution of monetary amounts.
  * @see schema:MonetaryAmountDistribution
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution
*/
class MonetaryAmountDistribution extends QuantitativeValueDistribution
{


  /**
      * The currency in which the monetary amount is expressed.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types, e.g. "Ithaca HOUR".
    * @param string|array $value
  * @return $this
  */
  public function currency($value)
  {
  $this->setProperty('currency', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCurrency($value)
  {
  $this->setProperty('currency', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCurrency($value)
  {
  $current = $this->getProperty('currency');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('currency', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCurrency()
  {
  return $this->getProperty('currency');
  }


}
