<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MapCategoryType;

/**
* A map.
* @see http://schema.org/Map
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Map extends CreativeWork
{

    /**
    * Indicates the kind of Map, from the MapCategoryType Enumeration.
    * @param MapCategoryType $value
    * @return $this
    */
    public function mapType(?MapCategoryType $value)
    {
        $this->setProperty('mapType', $value);
        return $this;
    }


}

