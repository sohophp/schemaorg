<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A body of structured information describing some topic(s) of interest.
* @see schema:Dataset
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Dataset extends CreativeWork
{
   /**
        * A data catalog which contains this dataset.
        */
    protected $includedInDataCatalog = null;

   /**
        * A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
        */
    protected $measurementMethod = null;

   /**
        * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
        */
    protected $datasetTimeInterval = null;

   /**
        * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
        */
    protected $variableMeasured = null;

   /**
        * A downloadable form of this dataset, at a specific location, in a specific format. This property can be repeated if different variations are available. There is no expectation that different downloadable distributions must contain exactly equivalent information (see also [DCAT](https://www.w3.org/TR/vocab-dcat-3/#Class:Distribution) on this point). Different distributions might include or exclude different subsets of the entire dataset, for example.
        */
    protected $distribution = null;

   /**
        * Originally named [[variablesMeasured]], the [[variableMeasured]] property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue.
        */
    protected $variablesMeasured = null;

   /**
        * A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
    
The [[measurementTechnique]] property helps when extra clarification is needed about how a [[measuredProperty]] was measured. This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but can often serve as a high level summary for dataset discovery. 

For example, if [[variableMeasured]] is: molecule concentration, [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is "depression rating", the [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". 

If there are several [[variableMeasured]] properties recorded for some given data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach the corresponding [[measurementTechnique]]. The value can also be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
        */
    protected $measurementTechnique = null;

   /**
        * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
        */
    protected $includedDataCatalog = null;

   /**
        * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
        */
    protected $issn = null;

   /**
        * A data catalog which contains this dataset.
        */
    protected $catalog = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setIncludedInDataCatalog($value)
    {
        $this->setProperty('includedInDataCatalog', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludedInDataCatalog()
    {
       return $this->getProperty('includedInDataCatalog');
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
    public function setDatasetTimeInterval($value)
    {
        $this->setProperty('datasetTimeInterval', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDatasetTimeInterval()
    {
       return $this->getProperty('datasetTimeInterval');
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
    public function setDistribution($value)
    {
        $this->setProperty('distribution', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDistribution()
    {
       return $this->getProperty('distribution');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVariablesMeasured($value)
    {
        $this->setProperty('variablesMeasured', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVariablesMeasured()
    {
       return $this->getProperty('variablesMeasured');
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
    public function setIncludedDataCatalog($value)
    {
        $this->setProperty('includedDataCatalog', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludedDataCatalog()
    {
       return $this->getProperty('includedDataCatalog');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIssn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssn()
    {
       return $this->getProperty('issn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCatalog($value)
    {
        $this->setProperty('catalog', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCatalog()
    {
       return $this->getProperty('catalog');
    }


}
