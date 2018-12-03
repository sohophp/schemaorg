<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\DataDownload;

/**
 * A body of structured information describing some topic(s) of interest.
 *
 * @see http://schema.org/Dataset
 */
class Dataset extends CreativeWork
{
    /**
     * A data catalog which contains this dataset.
     *
     * @param DataCatalog $value
     *
     * @return $this
     */
    public function includedInDataCatalog(?DataCatalog $value): self
    {
        $this->setProperty('includedInDataCatalog', $value);

        return $this;
    }

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function datasetTimeInterval(?\DateTimeInterface $value): self
    {
        $this->setProperty('datasetTimeInterval', $value);

        return $this;
    }

    /**
     * The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
     *
     * @param Place $value
     *
     * @return $this
     */
    public function spatial(?Place $value): self
    {
        $this->setProperty('spatial', $value);

        return $this;
    }

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function temporal(?\DateTimeInterface $value): self
    {
        $this->setProperty('temporal', $value);

        return $this;
    }

    /**
     * A data catalog which contains this dataset.
     *
     * @param DataCatalog $value
     *
     * @return $this
     */
    public function catalog(?DataCatalog $value): self
    {
        $this->setProperty('catalog', $value);

        return $this;
    }

    /**
     * A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
     *
     * @param DataCatalog $value
     *
     * @return $this
     */
    public function includedDataCatalog(?DataCatalog $value): self
    {
        $this->setProperty('includedDataCatalog', $value);

        return $this;
    }

    /**
     * A downloadable form of this dataset, at a specific location, in a specific format.
     *
     * @param DataDownload $value
     *
     * @return $this
     */
    public function distribution(?DataDownload $value): self
    {
        $this->setProperty('distribution', $value);

        return $this;
    }
}
