<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

/**
* A collection of datasets.
* @see http://schema.org/DataCatalog
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class DataCatalog extends CreativeWork
{


    /**
        * A dataset contained in this catalog.
        * @param Dataset|array|string|mixed $value
    * @return $this
    */
    public function dataset($value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }

    /**
    * @param Dataset|array|string|mixed $value
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


    /**
        * A technique or technology used in a [[Dataset]] (or [[DataDownload]],
 * [[DataCatalog]]),
 * corresponding to the method used for measuring the corresponding variable(s)
 * (described using [[variableMeasured]]). This is oriented towards scientific
 * and scholarly dataset publication but may have broader applicability; it is
 * not intended as a full representation of measurement, but rather as a high
 * level summary for dataset discovery.
 * 
 * For example, if [[variableMeasured]] is: molecule concentration,
 * [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy"
 * or "colorimetry" or "immunofluorescence".
 * 
 * If the [[variableMeasured]] is "depression rating", the
 * [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression
 * Inventory".
 * 
 * If there are several [[variableMeasured]] properties recorded for some given
 * data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach
 * the corresponding [[measurementTechnique]].
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function measurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
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


}
