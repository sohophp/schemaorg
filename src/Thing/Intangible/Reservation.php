<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReservationStatusType;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing;

/**
 * Describes a reservation for travel, dining or an event. Some reservations require tickets. <br/><br/>.
Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
 * @see http://schema.org/Reservation
 */
class Reservation extends Intangible
{
    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     *
     * @param ProgramMembership $value
     *
     * @return $this
     */
    public function programMembershipUsed(?ProgramMembership $value): self
    {
        $this->setProperty('programMembershipUsed', $value);

        return $this;
    }

    /**
     * The current status of the reservation.
     *
     * @param ReservationStatusType $value
     *
     * @return $this
     */
    public function reservationStatus(?ReservationStatusType $value): self
    {
        $this->setProperty('reservationStatus', $value);

        return $this;
    }

    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
     *
     * @param Person|Organization $value
     *
     * @return $this
     */
    public function bookingAgent($value): self
    {
        $this->setProperty('bookingAgent', $value);

        return $this;
    }

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     *
     * @param Thing $value
     *
     * @return $this
     */
    public function reservationFor(?Thing $value): self
    {
        $this->setProperty('reservationFor', $value);

        return $this;
    }

    /**
     * The date and time the reservation was modified.
     *
     * @param  $value
     *
     * @return $this
     */
    public function modifiedTime($value): self
    {
        $this->setProperty('modifiedTime', $value);

        return $this;
    }

    /**
     * The date and time the reservation was booked.
     *
     * @param  $value
     *
     * @return $this
     */
    public function bookingTime($value): self
    {
        $this->setProperty('bookingTime', $value);

        return $this;
    }

    /**
     * A unique identifier for the reservation.
     *
     * @param string $value
     *
     * @return $this
     */
    public function reservationId(?string $value): self
    {
        $this->setProperty('reservationId', $value);

        return $this;
    }

    /**
     * A ticket associated with the reservation.
     *
     * @param Ticket $value
     *
     * @return $this
     */
    public function reservedTicket(?Ticket $value): self
    {
        $this->setProperty('reservedTicket', $value);

        return $this;
    }
}
