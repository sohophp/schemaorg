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
        */
    protected $mapType = null;


    /**
    * @param array|string $value
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
