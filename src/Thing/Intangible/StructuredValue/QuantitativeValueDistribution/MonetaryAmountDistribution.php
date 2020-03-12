<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution;

/**
* A statistical distribution of monetary amounts.
* @see http://schema.org/MonetaryAmountDistribution
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution

*
*/
class MonetaryAmountDistribution extends QuantitativeValueDistribution
{

    /**
    * The currency in which the monetary amount is expressed.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string|array $value
    * @return $this
    */
    public function currency(?string $value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCurrency(?string $value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCurrency()
    {
       return $this->getProperty('currency');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\QuantitativeValueDistribution\\MonetaryAmountDistribution','Thing\\MonetaryAmountDistribution');

