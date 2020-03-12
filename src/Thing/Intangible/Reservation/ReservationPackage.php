<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A group of multiple reservations with common values for all sub-reservations.
* @see http://schema.org/ReservationPackage
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation

*
*/
class ReservationPackage extends Reservation
{

    /**
    * The individual reservations included in the package. Typically a repeated property.
    * @param Reservation|array $value
    * @return $this
    */
    public function subReservation(?Reservation $value)
    {
        $this->setProperty('subReservation', $value);
        return $this;
    }
   /**
    * @param Reservation|array $value
    * @return $this
    */
    public function setSubReservation(?Reservation $value)
    {
        $this->setProperty('subReservation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubReservation()
    {
       return $this->getProperty('subReservation');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Reservation\\ReservationPackage','Thing\\ReservationPackage');

