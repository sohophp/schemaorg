<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * A monetary value or range. This type can be used to describe an amount of money such as $50 USD, or a range as in describing a bank account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It is recommended to use [[PriceSpecification]] Types to describe the price of an Offer, Invoice, etc.
 * @see https://schema.org/MonetaryAmount
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class MonetaryAmount extends StructuredValue
{
    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @see https://schema.org/validThrough
     * @param mixed $value
     * @return $this
     */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidThrough($value)
    {
        $current = $this->getProperty('validThrough');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validThrough', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidThrough()
    {
        return $this->getProperty('validThrough');
    }
    /**
     * The date when the item becomes valid.
     * @see https://schema.org/validFrom
     * @param mixed $value
     * @return $this
     */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidFrom($value)
    {
        $current = $this->getProperty('validFrom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validFrom', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidFrom()
    {
        return $this->getProperty('validFrom');
    }
    /**
     * The upper value of some characteristic or property.
     * @see https://schema.org/maxValue
     * @param mixed $value
     * @return $this
     */
    public function maxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setMaxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addMaxValue($value)
    {
        $current = $this->getProperty('maxValue');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('maxValue', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxValue()
    {
        return $this->getProperty('maxValue');
    }
    /**
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node. * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'. * For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'. * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols. * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     * @see https://schema.org/value
     * @param StructuredValue|string|bool|array $value
     * @return $this
     */
    public function value($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }

    /**
     * @param StructuredValue|string|bool|array $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }

    /**
     * @param StructuredValue|string|bool $value
     * @return $this
     */
    public function addValue($value)
    {
        $current = $this->getProperty('value');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('value', $current);
        return $this;
    }

    /**
     * @return StructuredValue|string|bool|array
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }
    /**
     * The lower value of some characteristic or property.
     * @see https://schema.org/minValue
     * @param mixed $value
     * @return $this
     */
    public function minValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setMinValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addMinValue($value)
    {
        $current = $this->getProperty('minValue');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('minValue', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinValue()
    {
        return $this->getProperty('minValue');
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
