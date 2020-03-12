<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

/**
* A collection of datasets.
* @see http://schema.org/DataCatalog
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class DataCatalog extends CreativeWork
{

    /**
    * A dataset contained in this catalog.
    * @param Dataset|array $value
    * @return $this
    */
    public function dataset(?Dataset $value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }
   /**
    * @param Dataset|array $value
    * @return $this
    */
    public function setDataset(?Dataset $value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDataset()
    {
       return $this->getProperty('dataset');
    }

    /**
    * A technique or technology used in a <a class="localLink" href="http://schema.org/Dataset">Dataset</a> (or <a class="localLink" href="http://schema.org/DataDownload">DataDownload</a>, <a class="localLink" href="http://schema.org/DataCatalog">DataCatalog</a>),
corresponding to the method used for measuring the corresponding variable(s) (described using <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a>). This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but rather as a high level summary for dataset discovery.<br/><br/>

For example, if <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> is: molecule concentration, <a class="localLink" href="http://schema.org/measurementTechnique">measurementTechnique</a> could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence".<br/><br/>

If the <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> is "depression rating", the <a class="localLink" href="http://schema.org/measurementTechnique">measurementTechnique</a> could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory".<br/><br/>

If there are several <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> properties recorded for some given data object, use a <a class="localLink" href="http://schema.org/PropertyValue">PropertyValue</a> for each <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> and attach the corresponding <a class="localLink" href="http://schema.org/measurementTechnique">measurementTechnique</a>.
    * @param string|string|array $value
    * @return $this
    */
    public function measurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setMeasurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMeasurementTechnique()
    {
       return $this->getProperty('measurementTechnique');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\DataCatalog','Thing\\DataCatalog');

