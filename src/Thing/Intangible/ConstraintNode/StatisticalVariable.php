<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode;

use Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode;

/**
* [[StatisticalVariable]] represents any type of statistical metric that can be measured at a place and time. The usage pattern for [[StatisticalVariable]] is typically expressed using [[Observation]] with an explicit [[populationType]], which is a type, typically drawn from Schema.org. Each [[StatisticalVariable]] is marked as a [[ConstraintNode]], meaning that some properties (those listed using [[constraintProperty]]) serve in this setting solely to define the statistical variable rather than literally describe a specific person, place or thing. For example, a [[StatisticalVariable]] Median_Height_Person_Female representing the median height of women, could be written as follows: the population type is [[Person]]; the measuredProperty [[height]]; the [[statType]] [[median]]; the [[gender]] [[Female]]. It is important to note that there are many kinds of scientific quantitative observation which are not fully, perfectly or unambiguously described following this pattern, or with solely Schema.org terminology. The approach taken here is designed to allow partial, incremental or minimal description of [[StatisticalVariable]]s, and the use of detailed sets of entity and property IDs from external repositories. The [[measurementMethod]], [[unitCode]] and [[unitText]] properties can also be used to clarify the specific nature and notation of an observed measurement. 
* @see schema:StatisticalVariable
* @package Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode
*/
class StatisticalVariable extends ConstraintNode
{
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
        * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
    
The [[measurementTechnique]] property helps when extra clarification is needed about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery. 

For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". 

If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
        */
    protected $measurementTechnique = null;

   /**
        * Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
        */
    protected $populationType = null;

   /**
        * Identifies the denominator variable when an observation represents a ratio or percentage.
        */
    protected $measurementDenominator = null;

   /**
        * Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g. mean, count etc. The value of statType is a property, either from within Schema.org (e.g. [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
        */
    protected $statType = null;


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
    public function setPopulationType($value)
    {
        $this->setProperty('populationType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPopulationType()
    {
       return $this->getProperty('populationType');
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

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStatType($value)
    {
        $this->setProperty('statType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStatType()
    {
       return $this->getProperty('statType');
    }


}
