<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Ticket;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\ReservationStatusType;
use Sohophp\SchemaOrg\Thing;

/**
 * Describes a reservation for travel, dining or an event. Some reservations require tickets. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use [[Offer]].
 * @see https://schema.org/Reservation
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class Reservation extends Intangible
{
    /**
     * A ticket associated with the reservation.
     * @see https://schema.org/reservedTicket
     * @param Ticket|array $value
     * @return $this
     */
    public function reservedTicket($value)
    {
        $this->setProperty('reservedTicket', $value);
        return $this;
    }

    /**
     * @param Ticket|array $value
     * @return $this
     */
    public function setReservedTicket($value)
    {
        $this->setProperty('reservedTicket', $value);
        return $this;
    }

    /**
     * @param Ticket $value
     * @return $this
     */
    public function addReservedTicket($value)
    {
        $current = $this->getProperty('reservedTicket');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('reservedTicket', $current);
        return $this;
    }

    /**
     * @return Ticket|array
     */
    public function getReservedTicket()
    {
        return $this->getProperty('reservedTicket');
    }
    /**
     * The total price for the reservation or ticket, including applicable taxes, shipping, etc. Usage guidelines: * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols. * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     * @see https://schema.org/totalPrice
     * @param PriceSpecification|string|array $value
     * @return $this
     */
    public function totalPrice($value)
    {
        $this->setProperty('totalPrice', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|string|array $value
     * @return $this
     */
    public function setTotalPrice($value)
    {
        $this->setProperty('totalPrice', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|string $value
     * @return $this
     */
    public function addTotalPrice($value)
    {
        $current = $this->getProperty('totalPrice');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('totalPrice', $current);
        return $this;
    }

    /**
     * @return PriceSpecification|string|array
     */
    public function getTotalPrice()
    {
        return $this->getProperty('totalPrice');
    }
    /**
     * The date and time the reservation was booked.
     * @see https://schema.org/bookingTime
     * @param mixed $value
     * @return $this
     */
    public function bookingTime($value)
    {
        $this->setProperty('bookingTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setBookingTime($value)
    {
        $this->setProperty('bookingTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addBookingTime($value)
    {
        $current = $this->getProperty('bookingTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bookingTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookingTime()
    {
        return $this->getProperty('bookingTime');
    }
    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes. Use standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @see https://schema.org/priceCurrency
     * @param string|array $value
     * @return $this
     */
    public function priceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPriceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPriceCurrency($value)
    {
        $current = $this->getProperty('priceCurrency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceCurrency', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPriceCurrency()
    {
        return $this->getProperty('priceCurrency');
    }
    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
     * @see https://schema.org/programMembershipUsed
     * @param ProgramMembership|array $value
     * @return $this
     */
    public function programMembershipUsed($value)
    {
        $this->setProperty('programMembershipUsed', $value);
        return $this;
    }

    /**
     * @param ProgramMembership|array $value
     * @return $this
     */
    public function setProgramMembershipUsed($value)
    {
        $this->setProperty('programMembershipUsed', $value);
        return $this;
    }

    /**
     * @param ProgramMembership $value
     * @return $this
     */
    public function addProgramMembershipUsed($value)
    {
        $current = $this->getProperty('programMembershipUsed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('programMembershipUsed', $current);
        return $this;
    }

    /**
     * @return ProgramMembership|array
     */
    public function getProgramMembershipUsed()
    {
        return $this->getProperty('programMembershipUsed');
    }
    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @see https://schema.org/provider
     * @param Organization|Person|array $value
     * @return $this
     */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addProvider($value)
    {
        $current = $this->getProperty('provider');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('provider', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }
    /**
     * A unique identifier for the reservation.
     * @see https://schema.org/reservationId
     * @param string|array $value
     * @return $this
     */
    public function reservationId($value)
    {
        $this->setProperty('reservationId', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setReservationId($value)
    {
        $this->setProperty('reservationId', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addReservationId($value)
    {
        $current = $this->getProperty('reservationId');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('reservationId', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getReservationId()
    {
        return $this->getProperty('reservationId');
    }
    /**
     * The person or organization the reservation or ticket is for.
     * @see https://schema.org/underName
     * @param Organization|Person|array $value
     * @return $this
     */
    public function underName($value)
    {
        $this->setProperty('underName', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setUnderName($value)
    {
        $this->setProperty('underName', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addUnderName($value)
    {
        $current = $this->getProperty('underName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('underName', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getUnderName()
    {
        return $this->getProperty('underName');
    }
    /**
     * An entity that arranges for an exchange between a buyer and a seller. In most cases a broker never acquires or releases ownership of a product or service involved in an exchange. If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     * @see https://schema.org/broker
     * @param Organization|Person|array $value
     * @return $this
     */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setBroker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addBroker($value)
    {
        $current = $this->getProperty('broker');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('broker', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getBroker()
    {
        return $this->getProperty('broker');
    }
    /**
     * The current status of the reservation.
     * @see https://schema.org/reservationStatus
     * @param ReservationStatusType|array $value
     * @return $this
     */
    public function reservationStatus($value)
    {
        $this->setProperty('reservationStatus', $value);
        return $this;
    }

    /**
     * @param ReservationStatusType|array $value
     * @return $this
     */
    public function setReservationStatus($value)
    {
        $this->setProperty('reservationStatus', $value);
        return $this;
    }

    /**
     * @param ReservationStatusType $value
     * @return $this
     */
    public function addReservationStatus($value)
    {
        $current = $this->getProperty('reservationStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('reservationStatus', $current);
        return $this;
    }

    /**
     * @return ReservationStatusType|array
     */
    public function getReservationStatus()
    {
        return $this->getProperty('reservationStatus');
    }
    /**
     * The thing -- flight, event, restaurant, etc. being reserved.
     * @see https://schema.org/reservationFor
     * @param Thing|array $value
     * @return $this
     */
    public function reservationFor($value)
    {
        $this->setProperty('reservationFor', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setReservationFor($value)
    {
        $this->setProperty('reservationFor', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addReservationFor($value)
    {
        $current = $this->getProperty('reservationFor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('reservationFor', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getReservationFor()
    {
        return $this->getProperty('reservationFor');
    }
    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
     * @see https://schema.org/bookingAgent
     * @param Organization|Person|array $value
     * @return $this
     */
    public function bookingAgent($value)
    {
        $this->setProperty('bookingAgent', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setBookingAgent($value)
    {
        $this->setProperty('bookingAgent', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addBookingAgent($value)
    {
        $current = $this->getProperty('bookingAgent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bookingAgent', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getBookingAgent()
    {
        return $this->getProperty('bookingAgent');
    }
    /**
     * The date and time the reservation was modified.
     * @see https://schema.org/modifiedTime
     * @param mixed $value
     * @return $this
     */
    public function modifiedTime($value)
    {
        $this->setProperty('modifiedTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setModifiedTime($value)
    {
        $this->setProperty('modifiedTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addModifiedTime($value)
    {
        $current = $this->getProperty('modifiedTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('modifiedTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifiedTime()
    {
        return $this->getProperty('modifiedTime');
    }
}
