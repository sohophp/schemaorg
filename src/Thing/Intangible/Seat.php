<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Used to describe a seat, such as a reserved seat in an event reservation.
* @see schema:Seat
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Seat extends Intangible
{
   /**
        * The section location of the reserved seat (e.g. Orchestra).
        */
    protected $seatSection = null;

   /**
        * The type/class of the seat.
        */
    protected $seatingType = null;

   /**
        * The row location of the reserved seat (e.g., B).
        */
    protected $seatRow = null;

   /**
        * The location of the reserved seat (e.g., 27).
        */
    protected $seatNumber = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
