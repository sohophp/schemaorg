<?php
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation\House;

use Sohophp\SchemaOrg\Thing\Place\Accommodation\House;

/**
* Residence type: Single-family home.
* @see schema:SingleFamilyResidence
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation\House
*/
class SingleFamilyResidence extends House
{
   /**
        * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
Typical unit code(s): C62 for person.
        */
    protected $occupancy = null;

   /**
        * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
        */
    protected $numberOfRooms = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setOccupancy($value)
    {
        $this->setProperty('occupancy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOccupancy()
    {
       return $this->getProperty('occupancy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfRooms()
    {
       return $this->getProperty('numberOfRooms');
    }


}
