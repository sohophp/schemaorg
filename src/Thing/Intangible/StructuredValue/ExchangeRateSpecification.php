<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A structured value representing exchange rate.
 * @see https://schema.org/ExchangeRateSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class ExchangeRateSpecification extends StructuredValue
{
    /**
     * The current price of a currency.
     * @see https://schema.org/currentExchangeRate
     * @param UnitPriceSpecification|array $value
     * @return $this
     */
    public function currentExchangeRate($value)
    {
        $this->setProperty('currentExchangeRate', $value);
        return $this;
    }

    /**
     * @param UnitPriceSpecification|array $value
     * @return $this
     */
    public function setCurrentExchangeRate($value)
    {
        $this->setProperty('currentExchangeRate', $value);
        return $this;
    }

    /**
     * @param UnitPriceSpecification $value
     * @return $this
     */
    public function addCurrentExchangeRate($value)
    {
        $current = $this->getProperty('currentExchangeRate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('currentExchangeRate', $current);
        return $this;
    }

    /**
     * @return UnitPriceSpecification|array
     */
    public function getCurrentExchangeRate()
    {
        return $this->getProperty('currentExchangeRate');
    }
    /**
     * The difference between the price at which a broker or other intermediary buys and sells foreign currency.
     * @see https://schema.org/exchangeRateSpread
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function exchangeRateSpread($value)
    {
        $this->setProperty('exchangeRateSpread', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setExchangeRateSpread($value)
    {
        $this->setProperty('exchangeRateSpread', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addExchangeRateSpread($value)
    {
        $current = $this->getProperty('exchangeRateSpread');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('exchangeRateSpread', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getExchangeRateSpread()
    {
        return $this->getProperty('exchangeRateSpread');
    }
    /**
     * The currency in which the monetary amount is expressed. Use standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @see https://schema.org/currency
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
