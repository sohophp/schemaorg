<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MeasurementTypeEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MeasurementMethodEnum;

/**
 * A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property for the name of the property. If there is an additional human-readable version of the value, put that into the 'description' property. Always use specific schema.org properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the same effect as using the original, specific property.
 * @see https://schema.org/PropertyValue
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class PropertyValue extends StructuredValue
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
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
     * @see https://schema.org/valueReference
     * @param StructuredValue|string|QualitativeValue|PropertyValue|MeasurementTypeEnumeration|QuantitativeValue|DefinedTerm|Enumeration|array $value
     * @return $this
     */
    public function valueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }

    /**
     * @param StructuredValue|string|QualitativeValue|PropertyValue|MeasurementTypeEnumeration|QuantitativeValue|DefinedTerm|Enumeration|array $value
     * @return $this
     */
    public function setValueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }

    /**
     * @param StructuredValue|string|QualitativeValue|PropertyValue|MeasurementTypeEnumeration|QuantitativeValue|DefinedTerm|Enumeration $value
     * @return $this
     */
    public function addValueReference($value)
    {
        $current = $this->getProperty('valueReference');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('valueReference', $current);
        return $this;
    }

    /**
     * @return StructuredValue|string|QualitativeValue|PropertyValue|MeasurementTypeEnumeration|QuantitativeValue|DefinedTerm|Enumeration|array
     */
    public function getValueReference()
    {
        return $this->getProperty('valueReference');
    }
    /**
     * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable. The [[measurementTechnique]] property helps when extra clarification is needed about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery. For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can also be from an enumeration, organized as a [[MeasurementMethodEnum]].
     * @see https://schema.org/measurementTechnique
     * @param string|MeasurementMethodEnum|DefinedTerm|array $value
     * @return $this
     */
    public function measurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
     * @param string|MeasurementMethodEnum|DefinedTerm|array $value
     * @return $this
     */
    public function setMeasurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
     * @param string|MeasurementMethodEnum|DefinedTerm $value
     * @return $this
     */
    public function addMeasurementTechnique($value)
    {
        $current = $this->getProperty('measurementTechnique');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('measurementTechnique', $current);
        return $this;
    }

    /**
     * @return string|MeasurementMethodEnum|DefinedTerm|array
     */
    public function getMeasurementTechnique()
    {
        return $this->getProperty('measurementTechnique');
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
     * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
     * @see https://schema.org/measurementMethod
     * @param string|MeasurementMethodEnum|DefinedTerm|array $value
     * @return $this
     */
    public function measurementMethod($value)
    {
        $this->setProperty('measurementMethod', $value);
        return $this;
    }

    /**
     * @param string|MeasurementMethodEnum|DefinedTerm|array $value
     * @return $this
     */
    public function setMeasurementMethod($value)
    {
        $this->setProperty('measurementMethod', $value);
        return $this;
    }

    /**
     * @param string|MeasurementMethodEnum|DefinedTerm $value
     * @return $this
     */
    public function addMeasurementMethod($value)
    {
        $current = $this->getProperty('measurementMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('measurementMethod', $current);
        return $this;
    }

    /**
     * @return string|MeasurementMethodEnum|DefinedTerm|array
     */
    public function getMeasurementMethod()
    {
        return $this->getProperty('measurementMethod');
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
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific ID of the property), or (3) a URL indicating the type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary entry). Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
     * @see https://schema.org/propertyID
     * @param string|array $value
     * @return $this
     */
    public function propertyID($value)
    {
        $this->setProperty('propertyID', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPropertyID($value)
    {
        $this->setProperty('propertyID', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPropertyID($value)
    {
        $current = $this->getProperty('propertyID');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('propertyID', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPropertyID()
    {
        return $this->getProperty('propertyID');
    }
}
