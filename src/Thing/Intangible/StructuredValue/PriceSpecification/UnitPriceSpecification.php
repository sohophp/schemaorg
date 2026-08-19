<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PriceTypeEnumeration;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PriceComponentTypeEnumeration;

/**
 * The price asked for a given offer by the respective organization or person.
 * @see https://schema.org/UnitPriceSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
 */
class UnitPriceSpecification extends PriceSpecification
{
    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     * @see https://schema.org/unitCode
     * @param string|array $value
     * @return $this
     */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setUnitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addUnitCode($value)
    {
        $current = $this->getProperty('unitCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('unitCode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getUnitCode()
    {
        return $this->getProperty('unitCode');
    }
    /**
     * Specifies after how much time this price (or price component) becomes valid and billing starts. Can be used, for example, to model a price increase after the first year of a subscription. The unit of measurement is specified by the unitCode property.
     * @see https://schema.org/billingStart
     * @param mixed $value
     * @return $this
     */
    public function billingStart($value)
    {
        $this->setProperty('billingStart', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setBillingStart($value)
    {
        $this->setProperty('billingStart', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addBillingStart($value)
    {
        $current = $this->getProperty('billingStart');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('billingStart', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingStart()
    {
        return $this->getProperty('billingStart');
    }
    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     * @see https://schema.org/referenceQuantity
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function referenceQuantity($value)
    {
        $this->setProperty('referenceQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setReferenceQuantity($value)
    {
        $this->setProperty('referenceQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addReferenceQuantity($value)
    {
        $current = $this->getProperty('referenceQuantity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('referenceQuantity', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getReferenceQuantity()
    {
        return $this->getProperty('referenceQuantity');
    }
    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for <a href='unitCode'>unitCode</a>.
     * @see https://schema.org/unitText
     * @param string|array $value
     * @return $this
     */
    public function unitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setUnitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addUnitText($value)
    {
        $current = $this->getProperty('unitText');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('unitText', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getUnitText()
    {
        return $this->getProperty('unitText');
    }
    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
     * @see https://schema.org/billingIncrement
     * @param mixed $value
     * @return $this
     */
    public function billingIncrement($value)
    {
        $this->setProperty('billingIncrement', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setBillingIncrement($value)
    {
        $this->setProperty('billingIncrement', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addBillingIncrement($value)
    {
        $current = $this->getProperty('billingIncrement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('billingIncrement', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingIncrement()
    {
        return $this->getProperty('billingIncrement');
    }
    /**
     * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or, a UN/EDIFACT 5387 code, or as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
     * @see https://schema.org/priceType
     * @param string|PriceTypeEnumeration|array $value
     * @return $this
     */
    public function priceType($value)
    {
        $this->setProperty('priceType', $value);
        return $this;
    }

    /**
     * @param string|PriceTypeEnumeration|array $value
     * @return $this
     */
    public function setPriceType($value)
    {
        $this->setProperty('priceType', $value);
        return $this;
    }

    /**
     * @param string|PriceTypeEnumeration $value
     * @return $this
     */
    public function addPriceType($value)
    {
        $current = $this->getProperty('priceType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceType', $current);
        return $this;
    }

    /**
     * @return string|PriceTypeEnumeration|array
     */
    public function getPriceType()
    {
        return $this->getProperty('priceType');
    }
    /**
     * Specifies for how long this price (or price component) will be billed. Can be used, for example, to model the contractual duration of a subscription or payment plan. Type can be either a Duration or a Number (in which case the unit of measurement, for example month, is specified by the unitCode property).
     * @see https://schema.org/billingDuration
     * @param QuantitativeValue|Duration|array $value
     * @return $this
     */
    public function billingDuration($value)
    {
        $this->setProperty('billingDuration', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Duration|array $value
     * @return $this
     */
    public function setBillingDuration($value)
    {
        $this->setProperty('billingDuration', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Duration $value
     * @return $this
     */
    public function addBillingDuration($value)
    {
        $current = $this->getProperty('billingDuration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('billingDuration', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Duration|array
     */
    public function getBillingDuration()
    {
        return $this->getProperty('billingDuration');
    }
    /**
     * Identifies a price component (for example, a line item on an invoice), part of the total price for an offer.
     * @see https://schema.org/priceComponentType
     * @param PriceComponentTypeEnumeration|array $value
     * @return $this
     */
    public function priceComponentType($value)
    {
        $this->setProperty('priceComponentType', $value);
        return $this;
    }

    /**
     * @param PriceComponentTypeEnumeration|array $value
     * @return $this
     */
    public function setPriceComponentType($value)
    {
        $this->setProperty('priceComponentType', $value);
        return $this;
    }

    /**
     * @param PriceComponentTypeEnumeration $value
     * @return $this
     */
    public function addPriceComponentType($value)
    {
        $current = $this->getProperty('priceComponentType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceComponentType', $current);
        return $this;
    }

    /**
     * @return PriceComponentTypeEnumeration|array
     */
    public function getPriceComponentType()
    {
        return $this->getProperty('priceComponentType');
    }
}
