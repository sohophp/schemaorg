<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReservationStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Ticket;

/**
* Describes a reservation for travel, dining or an event. Some reservations require tickets. <br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/Reservation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Reservation extends Intangible
{

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
    * @param ProgramMembership $value
    * @return $this
    */
    public function programMembershipUsed(?ProgramMembership $value)
    {
        $this->setProperty('programMembershipUsed', $value);
        return $this;
    }

    /**
    * The current status of the reservation.
    * @param ReservationStatusType $value
    * @return $this
    */
    public function reservationStatus(?ReservationStatusType $value)
    {
        $this->setProperty('reservationStatus', $value);
        return $this;
    }

    /**
    * The person or organization the reservation or ticket is for.
    * @param Person|Organization $value
    * @return $this
    */
    public function underName($value)
    {
        $this->setProperty('underName', $value);
        return $this;
    }

    /**
    * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
    * @param Person|Organization $value
    * @return $this
    */
    public function bookingAgent($value)
    {
        $this->setProperty('bookingAgent', $value);
        return $this;
    }

    /**
    * The total price for the reservation or ticket, including applicable taxes, shipping, etc.
    * @param PriceSpecification|string $value
    * @return $this
    */
    public function totalPrice($value)
    {
        $this->setProperty('totalPrice', $value);
        return $this;
    }

    /**
    * The thing -- flight, event, restaurant,etc. being reserved.
    * @param Thing $value
    * @return $this
    */
    public function reservationFor(?Thing $value)
    {
        $this->setProperty('reservationFor', $value);
        return $this;
    }

    /**
    * The currency of the price, or a price component when attached to <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string $value
    * @return $this
    */
    public function priceCurrency(?string $value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
    * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
    * @param Organization|Person $value
    * @return $this
    */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
    * The date and time the reservation was modified.
    * @param  $value
    * @return $this
    */
    public function modifiedTime($value)
    {
        $this->setProperty('modifiedTime', $value);
        return $this;
    }

    /**
    * The date and time the reservation was booked.
    * @param  $value
    * @return $this
    */
    public function bookingTime($value)
    {
        $this->setProperty('bookingTime', $value);
        return $this;
    }

    /**
    * A unique identifier for the reservation.
    * @param string $value
    * @return $this
    */
    public function reservationId(?string $value)
    {
        $this->setProperty('reservationId', $value);
        return $this;
    }

    /**
    * A ticket associated with the reservation.
    * @param Ticket $value
    * @return $this
    */
    public function reservedTicket(?Ticket $value)
    {
        $this->setProperty('reservedTicket', $value);
        return $this;
    }


}

