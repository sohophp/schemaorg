<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* Instances of the class [[Observation]] are used to specify observations about an entity at a particular time. The principal properties of an [[Observation]] are [[observationAbout]], [[measuredProperty]], [[statType]], [[value] and [[observationDate]]  and [[measuredProperty]]. Some but not all Observations represent a [[QuantitativeValue]]. Quantitative observations can be about a [[StatisticalVariable]], which is an abstract specification about which we can make observations that are grounded at a particular location and time.

Observations can also encode a subset of simple RDF-like statements (its observationAbout, a StatisticalVariable, defining the measuredPoperty; its observationAbout property indicating the entity the statement is about, and [[value]] )

In the context of a quantitative knowledge graph, typical properties could include [[measuredProperty]], [[observationAbout]], [[observationDate]], [[value]], [[unitCode]], [[unitText]], [[measurementMethod]].
    
* @see schema:Observation
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
*/
class Observation extends QuantitativeValue
{
   /**
        * The [[observationAbout]] property identifies an entity, often a [[Place]], associated with an [[Observation]].
        */
    protected $observationAbout = null;

   /**
        * Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
        */
    protected $measurementQualifier = null;

   /**
        * The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
        */
    protected $measuredProperty = null;

   /**
        * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
        */
    protected $measurementMethod = null;

   /**
        * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
        */
    protected $variableMeasured = null;

   /**
        * The length of time an Observation took place over. The format follows `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M is Period 3 Months, P3h is Period 3 hours.
        */
    protected $observationPeriod = null;

   /**
        * A [[marginOfError]] for an [[Observation]].
        */
    protected $marginOfError = null;

   /**
        * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
    
The [[measurementTechnique]] property helps when extra clarification is needed about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery. 

For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". 

If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
        */
    protected $measurementTechnique = null;

   /**
        * The observationDate of an [[Observation]].
        */
    protected $observationDate = null;

   /**
        * Identifies the denominator variable when an observation represents a ratio or percentage.
        */
    protected $measurementDenominator = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setObservationAbout($value)
    {
        $this->setProperty('observationAbout', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getObservationAbout()
    {
       return $this->getProperty('observationAbout');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMeasurementQualifier($value)
    {
        $this->setProperty('measurementQualifier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasurementQualifier()
    {
       return $this->getProperty('measurementQualifier');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMeasuredProperty($value)
    {
        $this->setProperty('measuredProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasuredProperty()
    {
       return $this->getProperty('measuredProperty');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMeasurementMethod($value)
    {
        $this->setProperty('measurementMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasurementMethod()
    {
       return $this->getProperty('measurementMethod');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVariableMeasured($value)
    {
        $this->setProperty('variableMeasured', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVariableMeasured()
    {
       return $this->getProperty('variableMeasured');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setObservationPeriod($value)
    {
        $this->setProperty('observationPeriod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getObservationPeriod()
    {
       return $this->getProperty('observationPeriod');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMarginOfError($value)
    {
        $this->setProperty('marginOfError', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMarginOfError()
    {
       return $this->getProperty('marginOfError');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMeasurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasurementTechnique()
    {
       return $this->getProperty('measurementTechnique');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setObservationDate($value)
    {
        $this->setProperty('observationDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getObservationDate()
    {
       return $this->getProperty('observationDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMeasurementDenominator($value)
    {
        $this->setProperty('measurementDenominator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasurementDenominator()
    {
       return $this->getProperty('measurementDenominator');
    }


}
