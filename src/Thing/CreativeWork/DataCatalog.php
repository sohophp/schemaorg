<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A collection of datasets.
 *
 * @see http://schema.org/DataCatalog
 */
class DataCatalog extends CreativeWork
{
    /**
     * A dataset contained in this catalog.
     *
     * @param Dataset $value
     *
     * @return $this
     */
    public function dataset(?Dataset $value): self
    {
        $this->setProperty('dataset', $value);

        return $this;
    }
}
