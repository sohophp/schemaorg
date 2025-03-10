<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A map.
* @see schema:Map
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Map extends CreativeWork
{


    /**
        * Indicates the kind of Map, from the MapCategoryType Enumeration.
        * @param array|string|mixed $value
    * @return $this
    */
    public function mapType($value)
    {
        $this->setProperty('mapType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
