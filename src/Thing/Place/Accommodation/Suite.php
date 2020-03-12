<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation;

use Sohophp\SchemaOrg\Thing\Place\Accommodation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\BedDetails;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\BedType;

/**
* A suite in a hotel or other public accommodation, denotes a class of luxury accommodations, the key feature of which is multiple rooms (Source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/Suite_(hotel)">http://en.wikipedia.org/wiki/Suite_(hotel)</a>).
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.
* @see http://schema.org/Suite
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation

*
*/
class Suite extends Accommodation
{

    /**
    * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
Typical unit code(s): C62 for person
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function occupancy(?QuantitativeValue $value)
    {
        $this->setProperty('occupancy', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setOccupancy(?QuantitativeValue $value)
    {
        $this->setProperty('occupancy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOccupancy()
    {
       return $this->getProperty('occupancy');
    }

    /**
    * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
      If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
    * @param BedDetails|string|BedType|array $value
    * @return $this
    */
    public function bed($value)
    {
        $this->setProperty('bed', $value);
        return $this;
    }
   /**
    * @param BedDetails|string|BedType|array $value
    * @return $this
    */
    public function setBed($value)
    {
        $this->setProperty('bed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBed()
    {
       return $this->getProperty('bed');
    }

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


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\Accommodation\\Suite','Thing\\Suite');

