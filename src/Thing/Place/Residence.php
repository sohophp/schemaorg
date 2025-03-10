<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;

/**
* The place where a person lives.
* @see schema:Residence
* @package Sohophp\SchemaOrg\Thing\Place
*/
class Residence extends Place
{


    /**
        * A floorplan of some [[Accommodation]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function accommodationFloorPlan($value)
    {
        $this->setProperty('accommodationFloorPlan', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccommodationFloorPlan($value)
    {
        $this->setProperty('accommodationFloorPlan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccommodationFloorPlan()
    {
       return $this->getProperty('accommodationFloorPlan');
    }


}
