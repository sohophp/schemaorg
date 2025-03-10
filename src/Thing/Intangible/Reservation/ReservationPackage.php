<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A group of multiple reservations with common values for all sub-reservations.
* @see schema:ReservationPackage
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class ReservationPackage extends Reservation
{


    /**
        * The individual reservations included in the package. Typically a repeated
 * property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function subReservation($value)
    {
        $this->setProperty('subReservation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSubReservation($value)
    {
        $this->setProperty('subReservation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubReservation()
    {
       return $this->getProperty('subReservation');
    }


}
