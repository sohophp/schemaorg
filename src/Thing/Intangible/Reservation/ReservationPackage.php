<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
 * A group of multiple reservations with common values for all sub-reservations.
 * @see https://schema.org/ReservationPackage
 * @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
 */
class ReservationPackage extends Reservation
{
    /**
     * The individual reservations included in the package. Typically a repeated property.
     * @see https://schema.org/subReservation
     * @param Reservation|array $value
     * @return $this
     */
    public function subReservation($value)
    {
        $this->setProperty('subReservation', $value);
        return $this;
    }

    /**
     * @param Reservation|array $value
     * @return $this
     */
    public function setSubReservation($value)
    {
        $this->setProperty('subReservation', $value);
        return $this;
    }

    /**
     * @param Reservation $value
     * @return $this
     */
    public function addSubReservation($value)
    {
        $current = $this->getProperty('subReservation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('subReservation', $current);
        return $this;
    }

    /**
     * @return Reservation|array
     */
    public function getSubReservation()
    {
        return $this->getProperty('subReservation');
    }
}
