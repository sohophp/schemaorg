<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\DataDownload;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MeasurementMethodEnum;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\DataCatalog;
use Sohophp\SchemaOrg\Thing\Intangible\Property;
use Sohophp\SchemaOrg\Thing\Intangible\ConstraintNode\StatisticalVariable;

/**
 * A body of structured information describing some topic(s) of interest.
 * @see https://schema.org/Dataset
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Dataset extends CreativeWork
{
    /**
     * A downloadable form of this dataset, at a specific location, in a specific format. This property can be repeated if different variations are available. There is no expectation that different downloadable distributions must contain exactly equivalent information (see also [DCAT](https://www.w3.org/TR/vocab-dcat-3/#Class:Distribution) on this point). Different distributions might include or exclude different subsets of the entire dataset, for example.
     * @see https://schema.org/distribution
     * @param DataDownload|array $value
     * @return $this
     */
    public function distribution($value)
    {
        $this->setProperty('distribution', $value);
        return $this;
    }

    /**
     * @param DataDownload|array $value
     * @return $this
     */
    public function setDistribution($value)
    {
        $this->setProperty('distribution', $value);
        return $this;
    }

    /**
     * @param DataDownload $value
     * @return $this
     */
    public function addDistribution($value)
    {
        $current = $this->getProperty('distribution');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('distribution', $current);
        return $this;
    }

    /**
     * @return DataDownload|array
     */
    public function getDistribution()
    {
        return $this->getProperty('distribution');
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
     * Originally named [[variablesMeasured]], the [[variableMeasured]] property can indicate (repeated as necessary) the variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue.
     * @see https://schema.org/variablesMeasured
     * @param PropertyValue|string|array $value
     * @return $this
     */
    public function variablesMeasured($value)
    {
        $this->setProperty('variablesMeasured', $value);
        return $this;
    }

    /**
     * @param PropertyValue|string|array $value
     * @return $this
     */
    public function setVariablesMeasured($value)
    {
        $this->setProperty('variablesMeasured', $value);
        return $this;
    }

    /**
     * @param PropertyValue|string $value
     * @return $this
     */
    public function addVariablesMeasured($value)
    {
        $current = $this->getProperty('variablesMeasured');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('variablesMeasured', $current);
        return $this;
    }

    /**
     * @return PropertyValue|string|array
     */
    public function getVariablesMeasured()
    {
        return $this->getProperty('variablesMeasured');
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
     * A data catalog which contains this dataset.
     * @see https://schema.org/includedInDataCatalog
     * @param DataCatalog|array $value
     * @return $this
     */
    public function includedInDataCatalog($value)
    {
        $this->setProperty('includedInDataCatalog', $value);
        return $this;
    }

    /**
     * @param DataCatalog|array $value
     * @return $this
     */
    public function setIncludedInDataCatalog($value)
    {
        $this->setProperty('includedInDataCatalog', $value);
        return $this;
    }

    /**
     * @param DataCatalog $value
     * @return $this
     */
    public function addIncludedInDataCatalog($value)
    {
        $current = $this->getProperty('includedInDataCatalog');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('includedInDataCatalog', $current);
        return $this;
    }

    /**
     * @return DataCatalog|array
     */
    public function getIncludedInDataCatalog()
    {
        return $this->getProperty('includedInDataCatalog');
    }
    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     * @see https://schema.org/issn
     * @param string|array $value
     * @return $this
     */
    public function issn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setIssn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addIssn($value)
    {
        $current = $this->getProperty('issn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issn', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIssn()
    {
        return $this->getProperty('issn');
    }
    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     * @see https://schema.org/datasetTimeInterval
     * @param mixed $value
     * @return $this
     */
    public function datasetTimeInterval($value)
    {
        $this->setProperty('datasetTimeInterval', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDatasetTimeInterval($value)
    {
        $this->setProperty('datasetTimeInterval', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDatasetTimeInterval($value)
    {
        $current = $this->getProperty('datasetTimeInterval');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('datasetTimeInterval', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatasetTimeInterval()
    {
        return $this->getProperty('datasetTimeInterval');
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
     * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
     * @see https://schema.org/includedDataCatalog
     * @param DataCatalog|array $value
     * @return $this
     */
    public function includedDataCatalog($value)
    {
        $this->setProperty('includedDataCatalog', $value);
        return $this;
    }

    /**
     * @param DataCatalog|array $value
     * @return $this
     */
    public function setIncludedDataCatalog($value)
    {
        $this->setProperty('includedDataCatalog', $value);
        return $this;
    }

    /**
     * @param DataCatalog $value
     * @return $this
     */
    public function addIncludedDataCatalog($value)
    {
        $current = $this->getProperty('includedDataCatalog');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('includedDataCatalog', $current);
        return $this;
    }

    /**
     * @return DataCatalog|array
     */
    public function getIncludedDataCatalog()
    {
        return $this->getProperty('includedDataCatalog');
    }
    /**
     * A data catalog which contains this dataset.
     * @see https://schema.org/catalog
     * @param DataCatalog|array $value
     * @return $this
     */
    public function catalog($value)
    {
        $this->setProperty('catalog', $value);
        return $this;
    }

    /**
     * @param DataCatalog|array $value
     * @return $this
     */
    public function setCatalog($value)
    {
        $this->setProperty('catalog', $value);
        return $this;
    }

    /**
     * @param DataCatalog $value
     * @return $this
     */
    public function addCatalog($value)
    {
        $current = $this->getProperty('catalog');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('catalog', $current);
        return $this;
    }

    /**
     * @return DataCatalog|array
     */
    public function getCatalog()
    {
        return $this->getProperty('catalog');
    }
}
