<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Place;

/**
* A reservation for a rental car.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
* @see http://schema.org/RentalCarReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class RentalCarReservation extends Reservation
{

    /**
    * When a taxi will pickup a passenger or a rental car can be picked up.
    * @param  $value
    * @return $this
    */
    public function pickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
    }

    /**
    * Where a rental car can be dropped off.
    * @param Place $value
    * @return $this
    */
    public function dropoffLocation(?Place $value)
    {
        $this->setProperty('dropoffLocation', $value);
        return $this;
    }

    /**
    * When a rental car can be dropped off.
    * @param  $value
    * @return $this
    */
    public function dropoffTime($value)
    {
        $this->setProperty('dropoffTime', $value);
        return $this;
    }

    /**
    * Where a taxi will pick up a passenger or a rental car can be picked up.
    * @param Place $value
    * @return $this
    */
    public function pickupLocation(?Place $value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Reservation\\RentalCarReservation','Thing\\RentalCarReservation');

