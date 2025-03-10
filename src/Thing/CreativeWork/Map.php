<?php
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
        * @param MapCategoryType|array|string|mixed $value
    * @return $this
    */
    public function mapType($value)
    {
        $this->setProperty('mapType', $value);
        return $this;
    }

    /**
    * @param MapCategoryType|array|string|mixed $value
    * @return $this
    */
    public function setMapType($value)
    {
        $this->setProperty('mapType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMapType()
    {
       return $this->getProperty('mapType');
    }


}
