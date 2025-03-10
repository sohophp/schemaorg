<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A collection of datasets.
* @see schema:DataCatalog
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class DataCatalog extends CreativeWork
{


    /**
        * A subproperty of [[measurementTechnique]] that can be used for specifying
 * specific methods, in particular via [[MeasurementMethodEnum]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function measurementMethod($value)
    {
        $this->setProperty('measurementMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A technique, method or technology used in an [[Observation]],
 * [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]],
 * [[DataCatalog]]), corresponding to the method used for measuring the
 * corresponding variable(s) (for datasets, described using
 * [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often
 * but not necessarily each [[variableMeasured]] will have an explicit
 * representation as (or mapping to) an property such as those defined in
 * Schema.org, or other RDF vocabularies and "knowledge graphs". In that case
 * the subproperty of [[variableMeasured]] called [[measuredProperty]] is
 * applicable.
 *     
 * The [[measurementTechnique]] property helps when extra clarification is
 * needed about how a [[measuredProperty]] was measured. This is oriented
 * towards scientific and scholarly dataset publication but may have broader
 * applicability; it is not intended as a full representation of measurement,
 * but can often serve as a high level summary for dataset discovery. 
 * 
 * For example, if [[variableMeasured]] is: molecule concentration,
 * [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy"
 * or "colorimetry" or "immunofluorescence". If the [[variableMeasured]] is
 * "depression rating", the [[measurementTechnique]] could be "Zung Scale" or
 * "HAM-D" or "Beck Depression Inventory". 
 * 
 * If there are several [[variableMeasured]] properties recorded for some given
 * data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach
 * the corresponding [[measurementTechnique]]. The value can also be from an
 * enumeration, organized as a [[MeasurementMetholdEnumeration]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function measurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A dataset contained in this catalog.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dataset($value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDataset($value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDataset()
    {
       return $this->getProperty('dataset');
    }


}
