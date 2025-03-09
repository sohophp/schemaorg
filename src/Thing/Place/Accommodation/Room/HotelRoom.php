<?php
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation\Room;

use Sohophp\SchemaOrg\Thing\Place\Accommodation\Room;

/**
* A hotel room is a single room in a hotel.
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.

* @see schema:HotelRoom
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation\Room
*/
class HotelRoom extends Room
{
   /**
        * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
      If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
        */
    protected $bed = null;

   /**
        * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
Typical unit code(s): C62 for person.
        */
    protected $occupancy = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBed($value)
    {
        $this->setProperty('bed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBed()
    {
       return $this->getProperty('bed');
    }

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


}
