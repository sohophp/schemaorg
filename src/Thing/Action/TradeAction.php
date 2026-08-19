<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * The act of participating in an exchange of goods and services for monetary compensation. An agent trades an object, product or service with a participant in exchange for a one time or periodic payment.
 * @see https://schema.org/TradeAction
 * @package Sohophp\SchemaOrg\Thing\Action
 */
class TradeAction extends Action
{
    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     * @see https://schema.org/priceSpecification
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function priceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function setPriceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }

    /**
     * @param PriceSpecification $value
     * @return $this
     */
    public function addPriceSpecification($value)
    {
        $current = $this->getProperty('priceSpecification');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceSpecification', $current);
        return $this;
    }

    /**
     * @return PriceSpecification|array
     */
    public function getPriceSpecification()
    {
        return $this->getProperty('priceSpecification');
    }
    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes. Use standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @see https://schema.org/priceCurrency
     * @param string|array $value
     * @return $this
     */
    public function priceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPriceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPriceCurrency($value)
    {
        $current = $this->getProperty('priceCurrency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceCurrency', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPriceCurrency()
    {
        return $this->getProperty('priceCurrency');
    }
    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes. Usage guidelines: * Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in the value. * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator. * Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting. * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.
     * @see https://schema.org/price
     * @param string|array $value
     * @return $this
     */
    public function price($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPrice($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPrice($value)
    {
        $current = $this->getProperty('price');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('price', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPrice()
    {
        return $this->getProperty('price');
    }
}
