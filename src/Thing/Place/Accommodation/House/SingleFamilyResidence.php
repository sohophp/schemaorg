<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation\House;

use Sohophp\SchemaOrg\Thing\Place\Accommodation\House;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* Residence type: Single-family home.
* @see http://schema.org/SingleFamilyResidence
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation\House
*/
class SingleFamilyResidence extends House
{

    /**
    * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
Typical unit code(s): C62 for person
    * @param QuantitativeValue $value
    * @return $this
    */
    public function occupancy(?QuantitativeValue $value)
    {
        $this->setProperty('occupancy', $value);
        return $this;
    }

    /**
    * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfRooms(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }


}

