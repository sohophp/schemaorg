<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A reservation for lodging at a hotel, motel, inn, etc.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
* @see schema:LodgingReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class LodgingReservation extends Reservation
{
   /**
        * The number of children staying in the unit.
        */
    protected $numChildren = null;

   /**
        * A full description of the lodging unit.
        */
    protected $lodgingUnitDescription = null;

   /**
        * The latest someone may check out of a lodging establishment.
        */
    protected $checkoutTime = null;

   /**
        * The number of adults staying in the unit.
        */
    protected $numAdults = null;

   /**
        * Textual description of the unit type (including suite vs. room, size of bed, etc.).
        */
    protected $lodgingUnitType = null;

   /**
        * The earliest someone may check into a lodging establishment.
        */
    protected $checkinTime = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumChildren($value)
    {
        $this->setProperty('numChildren', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumChildren()
    {
       return $this->getProperty('numChildren');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLodgingUnitDescription($value)
    {
        $this->setProperty('lodgingUnitDescription', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLodgingUnitDescription()
    {
       return $this->getProperty('lodgingUnitDescription');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCheckoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCheckoutTime()
    {
       return $this->getProperty('checkoutTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumAdults($value)
    {
        $this->setProperty('numAdults', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumAdults()
    {
       return $this->getProperty('numAdults');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLodgingUnitType($value)
    {
        $this->setProperty('lodgingUnitType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLodgingUnitType()
    {
       return $this->getProperty('lodgingUnitType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCheckinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCheckinTime()
    {
       return $this->getProperty('checkinTime');
    }


}
