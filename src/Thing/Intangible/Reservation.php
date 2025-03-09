<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Describes a reservation for travel, dining or an event. Some reservations require tickets. \n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use [[Offer]].
* @see schema:Reservation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Reservation extends Intangible
{
   /**
        * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
        */
    protected $bookingAgent = null;

   /**
        * The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
        */
    protected $totalPrice = null;

   /**
        * The person or organization the reservation or ticket is for.
        */
    protected $underName = null;

   /**
        * The date and time the reservation was modified.
        */
    protected $modifiedTime = null;

   /**
        * The date and time the reservation was booked.
        */
    protected $bookingTime = null;

   /**
        * The current status of the reservation.
        */
    protected $reservationStatus = null;

   /**
        * A unique identifier for the reservation.
        */
    protected $reservationId = null;

   /**
        * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
        */
    protected $provider = null;

   /**
        * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
        */
    protected $priceCurrency = null;

   /**
        * A ticket associated with the reservation.
        */
    protected $reservedTicket = null;

   /**
        * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
        */
    protected $broker = null;

   /**
        * The thing -- flight, event, restaurant, etc. being reserved.
        */
    protected $reservationFor = null;

   /**
        * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
        */
    protected $programMembershipUsed = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBookingAgent($value)
    {
        $this->setProperty('bookingAgent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBookingAgent()
    {
       return $this->getProperty('bookingAgent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTotalPrice($value)
    {
        $this->setProperty('totalPrice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTotalPrice()
    {
       return $this->getProperty('totalPrice');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setUnderName($value)
    {
        $this->setProperty('underName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnderName()
    {
       return $this->getProperty('underName');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setModifiedTime($value)
    {
        $this->setProperty('modifiedTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getModifiedTime()
    {
       return $this->getProperty('modifiedTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBookingTime($value)
    {
        $this->setProperty('bookingTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBookingTime()
    {
       return $this->getProperty('bookingTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReservationStatus($value)
    {
        $this->setProperty('reservationStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReservationStatus()
    {
       return $this->getProperty('reservationStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReservationId($value)
    {
        $this->setProperty('reservationId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReservationId()
    {
       return $this->getProperty('reservationId');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPriceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceCurrency()
    {
       return $this->getProperty('priceCurrency');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReservedTicket($value)
    {
        $this->setProperty('reservedTicket', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReservedTicket()
    {
       return $this->getProperty('reservedTicket');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroker()
    {
       return $this->getProperty('broker');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReservationFor($value)
    {
        $this->setProperty('reservationFor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReservationFor()
    {
       return $this->getProperty('reservationFor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProgramMembershipUsed($value)
    {
        $this->setProperty('programMembershipUsed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProgramMembershipUsed()
    {
       return $this->getProperty('programMembershipUsed');
    }


}
