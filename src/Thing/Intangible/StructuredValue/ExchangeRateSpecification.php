<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A structured value representing exchange rate.
* @see http://schema.org/ExchangeRateSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class ExchangeRateSpecification extends StructuredValue
{

    /**
    * The current price of a currency.
    * @param UnitPriceSpecification|array|string $value
    * @return $this
    * @deprecated use setCurrentExchangeRate
    */
    public function currentExchangeRate($value)
    {
        $this->setProperty('currentExchangeRate', $value);
        return $this;
    }
   /**
    * @param UnitPriceSpecification|array|string $value
    * @return $this
    */
    public function setCurrentExchangeRate($value)
    {
        $this->setProperty('currentExchangeRate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCurrentExchangeRate()
    {
       return $this->getProperty('currentExchangeRate');
    }

    /**
    * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
    * @param MonetaryAmount|array|string $value
    * @return $this
    * @deprecated use setExchangeRateSpread
    */
    public function exchangeRateSpread($value)
    {
        $this->setProperty('exchangeRateSpread', $value);
        return $this;
    }
   /**
    * @param MonetaryAmount|array|string $value
    * @return $this
    */
    public function setExchangeRateSpread($value)
    {
        $this->setProperty('exchangeRateSpread', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExchangeRateSpread()
    {
       return $this->getProperty('exchangeRateSpread');
    }

    /**
    * The currency in which the monetary amount is expressed.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string|array $value
    * @return $this
    * @deprecated use setCurrency
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
    * @return $this|string|array
    */
    public function getCurrency()
    {
       return $this->getProperty('currency');
    }


}
