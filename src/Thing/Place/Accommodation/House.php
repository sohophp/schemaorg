<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation;

use Sohophp\SchemaOrg\Thing\Place\Accommodation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A house is a building or structure that has the ability to be occupied for habitation by humans or other creatures (Source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/House">http://en.wikipedia.org/wiki/House</a>).
* @see http://schema.org/House
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation

*
*/
class House extends Accommodation
{

    /**
    * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function numberOfRooms(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setNumberOfRooms(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfRooms()
    {
       return $this->getProperty('numberOfRooms');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\Accommodation\\House','Thing\\House');

