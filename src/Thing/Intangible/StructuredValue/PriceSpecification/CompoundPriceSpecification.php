<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PriceTypeEnumeration;

/**
 * A compound price specification is one that bundles multiple prices that all apply in combination for different dimensions of consumption. Use the name property of the attached unit price specification for indicating the dimension of a price component (e.g. "electricity" or "final cleaning").
 * @see https://schema.org/CompoundPriceSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
 */
class CompoundPriceSpecification extends PriceSpecification
{
    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in parallel for the [[CompoundPriceSpecification]] node.
     * @see https://schema.org/priceComponent
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function priceComponent($value)
    {
        $this->setProperty('priceComponent', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function setPriceComponent($value)
    {
        $this->setProperty('priceComponent', $value);
        return $this;
    }

    /**
     * @param PriceSpecification $value
     * @return $this
     */
    public function addPriceComponent($value)
    {
        $current = $this->getProperty('priceComponent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceComponent', $current);
        return $this;
    }

    /**
     * @return PriceSpecification|array
     */
    public function getPriceComponent()
    {
        return $this->getProperty('priceComponent');
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
}
