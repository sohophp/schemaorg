<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\DataCatalog;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\DataDownload;

/**
* A body of structured information describing some topic(s) of interest.
* @see http://schema.org/Dataset
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Dataset extends CreativeWork
{

    /**
    * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue.
    * @param string|PropertyValue $value
    * @return $this
    */
    public function variableMeasured($value)
    {
        $this->setProperty('variableMeasured', $value);
        return $this;
    }

    /**
    * A data catalog which contains this dataset.
    * @param DataCatalog $value
    * @return $this
    */
    public function includedInDataCatalog(?DataCatalog $value)
    {
        $this->setProperty('includedInDataCatalog', $value);
        return $this;
    }

    /**
    * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
    * @param  $value
    * @return $this
    */
    public function datasetTimeInterval($value)
    {
        $this->setProperty('datasetTimeInterval', $value);
        return $this;
    }

    /**
    * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
    * @param string $value
    * @return $this
    */
    public function issn(?string $value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
    * Originally named <a class="localLink" href="http://schema.org/variablesMeasured">variablesMeasured</a>, The <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue.
    * @param PropertyValue|string $value
    * @return $this
    */
    public function variablesMeasured($value)
    {
        $this->setProperty('variablesMeasured', $value);
        return $this;
    }

    /**
    * A technique or technology used in a <a class="localLink" href="http://schema.org/Dataset">Dataset</a> (or <a class="localLink" href="http://schema.org/DataDownload">DataDownload</a>, <a class="localLink" href="http://schema.org/DataCatalog">DataCatalog</a>),
corresponding to the method used for measuring the corresponding variable(s) (described using <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a>). This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but rather as a high level summary for dataset discovery.<br/><br/>

For example, if <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> is: molecule concentration, <a class="localLink" href="http://schema.org/measurementTechnique">measurementTechnique</a> could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence".<br/><br/>

If the <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> is "depression rating", the <a class="localLink" href="http://schema.org/measurementTechnique">measurementTechnique</a> could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory".<br/><br/>

If there are several <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> properties recorded for some given data object, use a <a class="localLink" href="http://schema.org/PropertyValue">PropertyValue</a> for each <a class="localLink" href="http://schema.org/variableMeasured">variableMeasured</a> and attach the corresponding <a class="localLink" href="http://schema.org/measurementTechnique">measurementTechnique</a>.
    * @param string|string $value
    * @return $this
    */
    public function measurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
    * A data catalog which contains this dataset.
    * @param DataCatalog $value
    * @return $this
    */
    public function catalog(?DataCatalog $value)
    {
        $this->setProperty('catalog', $value);
        return $this;
    }

    /**
    * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
    * @param DataCatalog $value
    * @return $this
    */
    public function includedDataCatalog(?DataCatalog $value)
    {
        $this->setProperty('includedDataCatalog', $value);
        return $this;
    }

    /**
    * A downloadable form of this dataset, at a specific location, in a specific format.
    * @param DataDownload $value
    * @return $this
    */
    public function distribution(?DataDownload $value)
    {
        $this->setProperty('distribution', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Dataset','Thing\\Dataset');

