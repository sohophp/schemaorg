<?php
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation;

use Sohophp\SchemaOrg\Thing\Place\Accommodation;

/**
* A house is a building or structure that has the ability to be occupied for habitation by humans or other creatures (source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/House">http://en.wikipedia.org/wiki/House</a>).
* @see schema:House
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation
*/
class House extends Accommodation
{
   /**
        * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
        */
    protected $numberOfRooms = null;


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
