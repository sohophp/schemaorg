<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GenderType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\SizeSystemEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\SizeGroupEnumeration;

/**
 * Size related properties of a product, typically a size code ([[name]]) and optionally a [[sizeSystem]], [[sizeGroup]], and product measurements ([[hasMeasurement]]). In addition, the intended audience can be defined through [[suggestedAge]], [[suggestedGender]], and suggested body measurements ([[suggestedMeasurement]]).
 * @see https://schema.org/SizeSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
 */
class SizeSpecification extends QualitativeValue
{
    /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or height between 170 and 190 cm. Typically found on a size chart for wearable products.
     * @see https://schema.org/suggestedMeasurement
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function suggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setSuggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addSuggestedMeasurement($value)
    {
        $current = $this->getProperty('suggestedMeasurement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedMeasurement', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getSuggestedMeasurement()
    {
        return $this->getProperty('suggestedMeasurement');
    }
    /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     * @see https://schema.org/suggestedGender
     * @param string|GenderType|array $value
     * @return $this
     */
    public function suggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
     * @param string|GenderType|array $value
     * @return $this
     */
    public function setSuggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
     * @param string|GenderType $value
     * @return $this
     */
    public function addSuggestedGender($value)
    {
        $current = $this->getProperty('suggestedGender');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedGender', $current);
        return $this;
    }

    /**
     * @return string|GenderType|array
     */
    public function getSuggestedGender()
    {
        return $this->getProperty('suggestedGender');
    }
    /**
     * The size system used to identify a product's size. Typically either a standard (for example, "GS1" or "ISO-EN13402"), country code (for example "US" or "JP"), or a measuring system (for example "Metric" or "Imperial").
     * @see https://schema.org/sizeSystem
     * @param string|SizeSystemEnumeration|array $value
     * @return $this
     */
    public function sizeSystem($value)
    {
        $this->setProperty('sizeSystem', $value);
        return $this;
    }

    /**
     * @param string|SizeSystemEnumeration|array $value
     * @return $this
     */
    public function setSizeSystem($value)
    {
        $this->setProperty('sizeSystem', $value);
        return $this;
    }

    /**
     * @param string|SizeSystemEnumeration $value
     * @return $this
     */
    public function addSizeSystem($value)
    {
        $current = $this->getProperty('sizeSystem');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sizeSystem', $current);
        return $this;
    }

    /**
     * @return string|SizeSystemEnumeration|array
     */
    public function getSizeSystem()
    {
        return $this->getProperty('sizeSystem');
    }
    /**
     * The size group (also known as "size type") for a product's size. Size groups are common in the fashion industry to define size segments and suggested audiences for wearable products. Multiple values can be combined, for example "men's big and tall", "petite maternity" or "regular".
     * @see https://schema.org/sizeGroup
     * @param SizeGroupEnumeration|string|array $value
     * @return $this
     */
    public function sizeGroup($value)
    {
        $this->setProperty('sizeGroup', $value);
        return $this;
    }

    /**
     * @param SizeGroupEnumeration|string|array $value
     * @return $this
     */
    public function setSizeGroup($value)
    {
        $this->setProperty('sizeGroup', $value);
        return $this;
    }

    /**
     * @param SizeGroupEnumeration|string $value
     * @return $this
     */
    public function addSizeGroup($value)
    {
        $current = $this->getProperty('sizeGroup');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sizeGroup', $current);
        return $this;
    }

    /**
     * @return SizeGroupEnumeration|string|array
     */
    public function getSizeGroup()
    {
        return $this->getProperty('sizeGroup');
    }
    /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
     * @see https://schema.org/suggestedAge
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function suggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setSuggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addSuggestedAge($value)
    {
        $current = $this->getProperty('suggestedAge');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedAge', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getSuggestedAge()
    {
        return $this->getProperty('suggestedAge');
    }
    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @see https://schema.org/hasMeasurement
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function hasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setHasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addHasMeasurement($value)
    {
        $current = $this->getProperty('hasMeasurement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasMeasurement', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getHasMeasurement()
    {
        return $this->getProperty('hasMeasurement');
    }
}
