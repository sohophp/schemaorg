<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode;

use Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode;
use Sohophp\SchemaOrg\Thing\Intangible\Class;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Property;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MeasurementMethodEnum;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
 * [[StatisticalVariable]] represents any type of statistical metric that can be measured at a place and time. The usage pattern for [[StatisticalVariable]] is typically expressed using [[Observation]] with an explicit [[populationType]], which is a type, typically drawn from Schema.org. Each [[StatisticalVariable]] is marked as a [[ConstraintNode]], meaning that some properties (those listed using [[constraintProperty]]) serve in this setting solely to define the statistical variable rather than literally describe a specific person, place or thing. For example, a [[StatisticalVariable]] Median_Height_Person_Female representing the median height of women, could be written as follows: the population type is [[Person]]; the measuredProperty [[height]]; the [[statType]] [[median]]; the [[gender]] [[Female]]. It is important to note that there are many kinds of scientific quantitative observation which are not fully, perfectly or unambiguously described following this pattern, or with solely Schema.org terminology. The approach taken here is designed to allow partial, incremental or minimal description of [[StatisticalVariable]]s, and the use of detailed sets of entity and property IDs from external repositories. The [[measurementMethod]], [[unitCode]] and [[unitText]] properties can also be used to clarify the specific nature and notation of an observed measurement.
 * @see https://schema.org/StatisticalVariable
 * @package Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode
 */
class StatisticalVariable extends ConstraintNode
{
    /**
     * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
     * @see https://schema.org/populationType
     * @param Class|array $value
     * @return $this
     */
    public function populationType($value)
    {
        $this->setProperty('populationType', $value);
        return $this;
    }

    /**
     * @param Class|array $value
     * @return $this
     */
    public function setPopulationType($value)
    {
        $this->setProperty('populationType', $value);
        return $this;
    }

    /**
     * @param Class $value
     * @return $this
     */
    public function addPopulationType($value)
    {
        $current = $this->getProperty('populationType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('populationType', $current);
        return $this;
    }

    /**
     * @return Class|array
     */
    public function getPopulationType()
    {
        return $this->getProperty('populationType');
    }
    /**
     * Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
     * @see https://schema.org/measurementQualifier
     * @param Enumeration|array $value
     * @return $this
     */
    public function measurementQualifier($value)
    {
        $this->setProperty('measurementQualifier', $value);
        return $this;
    }

    /**
     * @param Enumeration|array $value
     * @return $this
     */
    public function setMeasurementQualifier($value)
    {
        $this->setProperty('measurementQualifier', $value);
        return $this;
    }

    /**
     * @param Enumeration $value
     * @return $this
     */
    public function addMeasurementQualifier($value)
    {
        $current = $this->getProperty('measurementQualifier');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('measurementQualifier', $current);
        return $this;
    }

    /**
     * @return Enumeration|array
     */
    public function getMeasurementQualifier()
    {
        return $this->getProperty('measurementQualifier');
    }
    /**
     * The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
     * @see https://schema.org/measuredProperty
     * @param Property|array $value
     * @return $this
     */
    public function measuredProperty($value)
    {
        $this->setProperty('measuredProperty', $value);
        return $this;
    }

    /**
     * @param Property|array $value
     * @return $this
     */
    public function setMeasuredProperty($value)
    {
        $this->setProperty('measuredProperty', $value);
        return $this;
    }

    /**
     * @param Property $value
     * @return $this
     */
    public function addMeasuredProperty($value)
    {
        $current = $this->getProperty('measuredProperty');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('measuredProperty', $current);
        return $this;
    }

    /**
     * @return Property|array
     */
    public function getMeasuredProperty()
    {
        return $this->getProperty('measuredProperty');
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
     * Identifies the denominator variable when an observation represents a ratio or percentage.
     * @see https://schema.org/measurementDenominator
     * @param StatisticalVariable|array $value
     * @return $this
     */
    public function measurementDenominator($value)
    {
        $this->setProperty('measurementDenominator', $value);
        return $this;
    }

    /**
     * @param StatisticalVariable|array $value
     * @return $this
     */
    public function setMeasurementDenominator($value)
    {
        $this->setProperty('measurementDenominator', $value);
        return $this;
    }

    /**
     * @param StatisticalVariable $value
     * @return $this
     */
    public function addMeasurementDenominator($value)
    {
        $current = $this->getProperty('measurementDenominator');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('measurementDenominator', $current);
        return $this;
    }

    /**
     * @return StatisticalVariable|array
     */
    public function getMeasurementDenominator()
    {
        return $this->getProperty('measurementDenominator');
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
     * Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g. mean, count etc. The value of statType is a property, either from within Schema.org (e.g. [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org.
     * @see https://schema.org/statType
     * @param Property|string|array $value
     * @return $this
     */
    public function statType($value)
    {
        $this->setProperty('statType', $value);
        return $this;
    }

    /**
     * @param Property|string|array $value
     * @return $this
     */
    public function setStatType($value)
    {
        $this->setProperty('statType', $value);
        return $this;
    }

    /**
     * @param Property|string $value
     * @return $this
     */
    public function addStatType($value)
    {
        $current = $this->getProperty('statType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('statType', $current);
        return $this;
    }

    /**
     * @return Property|string|array
     */
    public function getStatType()
    {
        return $this->getProperty('statType');
    }
}
