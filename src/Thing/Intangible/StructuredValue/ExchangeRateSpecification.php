<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value representing exchange rate.
* @see schema:ExchangeRateSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ExchangeRateSpecification extends StructuredValue
{
   /**
        * The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
        */
    protected $currency = null;

   /**
        * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
        */
    protected $exchangeRateSpread = null;

   /**
        * The current price of a currency.
        */
    protected $currentExchangeRate = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
    * @return $this
    */
    public function setExchangeRateSpread($value)
    {
        $this->setProperty('exchangeRateSpread', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExchangeRateSpread()
    {
       return $this->getProperty('exchangeRateSpread');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCurrentExchangeRate($value)
    {
        $this->setProperty('currentExchangeRate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCurrentExchangeRate()
    {
       return $this->getProperty('currentExchangeRate');
    }


}
