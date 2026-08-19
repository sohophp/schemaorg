<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MeasurementMethodEnum;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

/**
 * A collection of datasets.
 * @see https://schema.org/DataCatalog
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class DataCatalog extends CreativeWork
{
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
     * A dataset contained in this catalog.
     * @see https://schema.org/dataset
     * @param Dataset|array $value
     * @return $this
     */
    public function dataset($value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }

    /**
     * @param Dataset|array $value
     * @return $this
     */
    public function setDataset($value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }

    /**
     * @param Dataset $value
     * @return $this
     */
    public function addDataset($value)
    {
        $current = $this->getProperty('dataset');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dataset', $current);
        return $this;
    }

    /**
     * @return Dataset|array
     */
    public function getDataset()
    {
        return $this->getProperty('dataset');
    }
}
