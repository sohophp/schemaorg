<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A structured value representing exchange rate.
* @see http://schema.org/ExchangeRateSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ExchangeRateSpecification extends StructuredValue
{

    /**
    * The current price of a currency.
    * @param UnitPriceSpecification $value
    * @return $this
    */
    public function currentExchangeRate(?UnitPriceSpecification $value)
    {
        $this->setProperty('currentExchangeRate', $value);
        return $this;
    }

    /**
    * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function exchangeRateSpread(?MonetaryAmount $value)
    {
        $this->setProperty('exchangeRateSpread', $value);
        return $this;
    }

    /**
    * The currency in which the monetary amount is expressed.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string $value
    * @return $this
    */
    public function currency(?string $value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\ExchangeRateSpecification','Thing\\ExchangeRateSpecification');

