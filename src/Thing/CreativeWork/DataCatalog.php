<?php declare(strict_types=1);
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
    * @param Dataset $value
    * @return $this
    */
    public function dataset(?Dataset $value)
    {
        $this->setProperty('dataset', $value);
        return $this;
    }


}

