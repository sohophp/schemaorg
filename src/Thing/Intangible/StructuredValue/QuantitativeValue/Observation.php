<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Property;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MeasurementMethodEnum;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode\StatisticalVariable;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing;

/**
 * Instances of the class [[Observation]] are used to specify observations about an entity at a particular time. The principal properties of an [[Observation]] are [[observationAbout]], [[measuredProperty]], [[statType]], [[value] and [[observationDate]] and [[measuredProperty]]. Some but not all Observations represent a [[QuantitativeValue]]. Quantitative observations can be about a [[StatisticalVariable]], which is an abstract specification about which we can make observations that are grounded at a particular location and time. Observations can also encode a subset of simple RDF-like statements (its observationAbout, a StatisticalVariable, defining the measuredPoperty; its observationAbout property indicating the entity the statement is about, and [[value]] ) In the context of a quantitative knowledge graph, typical properties could include [[measuredProperty]], [[observationAbout]], [[observationDate]], [[value]], [[unitCode]], [[unitText]], [[measurementMethod]].
 * @see https://schema.org/Observation
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
 */
class Observation extends QuantitativeValue
{
    /**
     * The length of time an Observation took place over. The format follows `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M is Period 3 Months, P3h is Period 3 hours.
     * @see https://schema.org/observationPeriod
     * @param string|array $value
     * @return $this
     */
    public function observationPeriod($value)
    {
        $this->setProperty('observationPeriod', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setObservationPeriod($value)
    {
        $this->setProperty('observationPeriod', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addObservationPeriod($value)
    {
        $current = $this->getProperty('observationPeriod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('observationPeriod', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getObservationPeriod()
    {
        return $this->getProperty('observationPeriod');
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
     * The observationDate of an [[Observation]].
     * @see https://schema.org/observationDate
     * @param mixed $value
     * @return $this
     */
    public function observationDate($value)
    {
        $this->setProperty('observationDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setObservationDate($value)
    {
        $this->setProperty('observationDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addObservationDate($value)
    {
        $current = $this->getProperty('observationDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('observationDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObservationDate()
    {
        return $this->getProperty('observationDate');
    }
    /**
     * The variableMeasured property can indicate (repeated as necessary) the variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
     * @see https://schema.org/variableMeasured
     * @param PropertyValue|Property|string|StatisticalVariable|array $value
     * @return $this
     */
    public function variableMeasured($value)
    {
        $this->setProperty('variableMeasured', $value);
        return $this;
    }

    /**
     * @param PropertyValue|Property|string|StatisticalVariable|array $value
     * @return $this
     */
    public function setVariableMeasured($value)
    {
        $this->setProperty('variableMeasured', $value);
        return $this;
    }

    /**
     * @param PropertyValue|Property|string|StatisticalVariable $value
     * @return $this
     */
    public function addVariableMeasured($value)
    {
        $current = $this->getProperty('variableMeasured');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('variableMeasured', $current);
        return $this;
    }

    /**
     * @return PropertyValue|Property|string|StatisticalVariable|array
     */
    public function getVariableMeasured()
    {
        return $this->getProperty('variableMeasured');
    }
    /**
     * The [[observationAbout]] property identifies an entity, often a [[Place]], associated with an [[Observation]].
     * @see https://schema.org/observationAbout
     * @param Place|Thing|array $value
     * @return $this
     */
    public function observationAbout($value)
    {
        $this->setProperty('observationAbout', $value);
        return $this;
    }

    /**
     * @param Place|Thing|array $value
     * @return $this
     */
    public function setObservationAbout($value)
    {
        $this->setProperty('observationAbout', $value);
        return $this;
    }

    /**
     * @param Place|Thing $value
     * @return $this
     */
    public function addObservationAbout($value)
    {
        $current = $this->getProperty('observationAbout');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('observationAbout', $current);
        return $this;
    }

    /**
     * @return Place|Thing|array
     */
    public function getObservationAbout()
    {
        return $this->getProperty('observationAbout');
    }
    /**
     * A [[marginOfError]] for an [[Observation]].
     * @see https://schema.org/marginOfError
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function marginOfError($value)
    {
        $this->setProperty('marginOfError', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setMarginOfError($value)
    {
        $this->setProperty('marginOfError', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addMarginOfError($value)
    {
        $current = $this->getProperty('marginOfError');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('marginOfError', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getMarginOfError()
    {
        return $this->getProperty('marginOfError');
    }
}
