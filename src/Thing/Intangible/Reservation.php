<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReservationStatusType;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Ticket;

/**
* Describes a reservation for travel, dining or an event. Some reservations require tickets. <br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/Reservation
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Reservation extends Intangible
{

    /**
    * The current status of the reservation.
    * @param ReservationStatusType|array $value
    * @return $this
    */
    public function reservationStatus(?ReservationStatusType $value)
    {
        $this->setProperty('reservationStatus', $value);
        return $this;
    }
   /**
    * @param ReservationStatusType|array $value
    * @return $this
    */
    public function setReservationStatus(?ReservationStatusType $value)
    {
        $this->setProperty('reservationStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReservationStatus()
    {
       return $this->getProperty('reservationStatus');
    }

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
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
    * @return $this|string|array
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
    * @param ProgramMembership|array $value
    * @return $this
    */
    public function programMembershipUsed(?ProgramMembership $value)
    {
        $this->setProperty('programMembershipUsed', $value);
        return $this;
    }
   /**
    * @param ProgramMembership|array $value
    * @return $this
    */
    public function setProgramMembershipUsed(?ProgramMembership $value)
    {
        $this->setProperty('programMembershipUsed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProgramMembershipUsed()
    {
       return $this->getProperty('programMembershipUsed');
    }

    /**
    * The person or organization the reservation or ticket is for.
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
    * @return $this|string|array
    */
    public function getUnderName()
    {
       return $this->getProperty('underName');
    }

    /**
    * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
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
    * @return $this|string|array
    */
    public function getBookingAgent()
    {
       return $this->getProperty('bookingAgent');
    }

    /**
    * The total price for the reservation or ticket, including applicable taxes, shipping, etc.<br/><br/>

Usage guidelines:<br/><br/>

<ul>
<li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
<li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
</ul>

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
    * @return $this|string|array
    */
    public function getTotalPrice()
    {
       return $this->getProperty('totalPrice');
    }

    /**
    * The thing -- flight, event, restaurant,etc. being reserved.
    * @param Thing|array $value
    * @return $this
    */
    public function reservationFor(?Thing $value)
    {
        $this->setProperty('reservationFor', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setReservationFor(?Thing $value)
    {
        $this->setProperty('reservationFor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReservationFor()
    {
       return $this->getProperty('reservationFor');
    }

    /**
    * The currency of the price, or a price component when attached to <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string|array $value
    * @return $this
    */
    public function priceCurrency(?string $value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPriceCurrency(?string $value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPriceCurrency()
    {
       return $this->getProperty('priceCurrency');
    }

    /**
    * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setBroker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroker()
    {
       return $this->getProperty('broker');
    }

    /**
    * The date and time the reservation was modified.
    * @param |array $value
    * @return $this
    */
    public function modifiedTime($value)
    {
        $this->setProperty('modifiedTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setModifiedTime($value)
    {
        $this->setProperty('modifiedTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getModifiedTime()
    {
       return $this->getProperty('modifiedTime');
    }

    /**
    * The date and time the reservation was booked.
    * @param |array $value
    * @return $this
    */
    public function bookingTime($value)
    {
        $this->setProperty('bookingTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setBookingTime($value)
    {
        $this->setProperty('bookingTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBookingTime()
    {
       return $this->getProperty('bookingTime');
    }

    /**
    * A unique identifier for the reservation.
    * @param string|array $value
    * @return $this
    */
    public function reservationId(?string $value)
    {
        $this->setProperty('reservationId', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setReservationId(?string $value)
    {
        $this->setProperty('reservationId', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReservationId()
    {
       return $this->getProperty('reservationId');
    }

    /**
    * A ticket associated with the reservation.
    * @param Ticket|array $value
    * @return $this
    */
    public function reservedTicket(?Ticket $value)
    {
        $this->setProperty('reservedTicket', $value);
        return $this;
    }
   /**
    * @param Ticket|array $value
    * @return $this
    */
    public function setReservedTicket(?Ticket $value)
    {
        $this->setProperty('reservedTicket', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReservedTicket()
    {
       return $this->getProperty('reservedTicket');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Reservation','Thing\\Reservation');

