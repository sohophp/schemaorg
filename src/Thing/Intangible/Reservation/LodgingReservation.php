<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A reservation for lodging at a hotel, motel, inn, etc.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
* @see http://schema.org/LodgingReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class LodgingReservation extends Reservation
{


    /**
        * A full description of the lodging unit.
        * @param string|array|mixed $value
    * @return $this
    */
    public function lodgingUnitDescription($value)
    {
        $this->setProperty('lodgingUnitDescription', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The earliest someone may check into a lodging establishment.
        * @param array|string|mixed $value
    * @return $this
    */
    public function checkinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * The number of children staying in the unit.
        * @param QuantitativeValue|int|array|string|mixed $value
    * @return $this
    */
    public function numChildren($value)
    {
        $this->setProperty('numChildren', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|int|array|string|mixed $value
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
        * The latest someone may check out of a lodging establishment.
        * @param array|string|mixed $value
    * @return $this
    */
    public function checkoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Textual description of the unit type (including suite vs. room, size of bed,
 * etc.).
        * @param QualitativeValue|string|array|mixed $value
    * @return $this
    */
    public function lodgingUnitType($value)
    {
        $this->setProperty('lodgingUnitType', $value);
        return $this;
    }

    /**
    * @param QualitativeValue|string|array|mixed $value
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
        * The number of adults staying in the unit.
        * @param QuantitativeValue|int|array|string|mixed $value
    * @return $this
    */
    public function numAdults($value)
    {
        $this->setProperty('numAdults', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|int|array|string|mixed $value
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


}
