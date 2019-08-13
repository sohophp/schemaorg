<?php declare(strict_types=1);
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
    * @param QualitativeValue|string $value
    * @return $this
    */
    public function seatingType($value)
    {
        $this->setProperty('seatingType', $value);
        return $this;
    }

    /**
    * The section location of the reserved seat (e.g. Orchestra).
    * @param string $value
    * @return $this
    */
    public function seatSection(?string $value)
    {
        $this->setProperty('seatSection', $value);
        return $this;
    }

    /**
    * The row location of the reserved seat (e.g., B).
    * @param string $value
    * @return $this
    */
    public function seatRow(?string $value)
    {
        $this->setProperty('seatRow', $value);
        return $this;
    }

    /**
    * The location of the reserved seat (e.g., 27).
    * @param string $value
    * @return $this
    */
    public function seatNumber(?string $value)
    {
        $this->setProperty('seatNumber', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Seat','Thing\\Seat');

