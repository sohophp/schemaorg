<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* Used to describe a seat, such as a reserved seat in an event reservation.
* @see http://schema.org/Seat
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Seat extends Intangible
{


    /**
        * The type/class of the seat.
        * @param QualitativeValue|string|array|mixed $value
    * @return $this
    */
    public function seatingType($value)
    {
        $this->setProperty('seatingType', $value);
        return $this;
    }

    /**
    * @param QualitativeValue|string|array|mixed $value
    * @return $this
    */
    public function setSeatingType($value)
    {
        $this->setProperty('seatingType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeatingType()
    {
       return $this->getProperty('seatingType');
    }


    /**
        * The section location of the reserved seat (e.g. Orchestra).
        * @param string|array|mixed $value
    * @return $this
    */
    public function seatSection($value)
    {
        $this->setProperty('seatSection', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSeatSection($value)
    {
        $this->setProperty('seatSection', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeatSection()
    {
       return $this->getProperty('seatSection');
    }


    /**
        * The row location of the reserved seat (e.g., B).
        * @param string|array|mixed $value
    * @return $this
    */
    public function seatRow($value)
    {
        $this->setProperty('seatRow', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSeatRow($value)
    {
        $this->setProperty('seatRow', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeatRow()
    {
       return $this->getProperty('seatRow');
    }


    /**
        * The location of the reserved seat (e.g., 27).
        * @param string|array|mixed $value
    * @return $this
    */
    public function seatNumber($value)
    {
        $this->setProperty('seatNumber', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSeatNumber($value)
    {
        $this->setProperty('seatNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeatNumber()
    {
       return $this->getProperty('seatNumber');
    }


}
