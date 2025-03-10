<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

/**
* A statistical distribution of monetary amounts.
* @see http://schema.org/MonetaryAmountDistribution
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution
*/
class MonetaryAmountDistribution extends QuantitativeValueDistribution
{


    /**
        * The currency in which the monetary amount is expressed.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types e.g. "Ithaca HOUR".
        * @param string|array|mixed $value
    * @return $this
    */
    public function currency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCurrency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCurrency()
    {
       return $this->getProperty('currency');
    }


}
