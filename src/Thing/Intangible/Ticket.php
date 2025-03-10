<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Used to describe a ticket to an event, a flight, a bus ride, etc.
* @see schema:Ticket
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Ticket extends Intangible
{


    /**
        * The organization issuing the item, for example a [[Permit]], [[Ticket]], or
 * [[Certification]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function issuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIssuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssuedBy()
    {
       return $this->getProperty('issuedBy');
    }


    /**
        * The total price for the reservation or ticket, including applicable taxes,
 * shipping, etc.
 * 
 * Usage guidelines:
 * 
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
        * @param array|string|mixed $value
    * @return $this
    */
    public function totalPrice($value)
    {
        $this->setProperty('totalPrice', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The person or organization the reservation or ticket is for.
        * @param array|string|mixed $value
    * @return $this
    */
    public function underName($value)
    {
        $this->setProperty('underName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The seat associated with the ticket.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ticketedSeat($value)
    {
        $this->setProperty('ticketedSeat', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTicketedSeat($value)
    {
        $this->setProperty('ticketedSeat', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTicketedSeat()
    {
       return $this->getProperty('ticketedSeat');
    }


    /**
        * The date the ticket was issued.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dateIssued($value)
    {
        $this->setProperty('dateIssued', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDateIssued($value)
    {
        $this->setProperty('dateIssued', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateIssued()
    {
       return $this->getProperty('dateIssued');
    }


    /**
        * The unique identifier for the ticket.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ticketNumber($value)
    {
        $this->setProperty('ticketNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTicketNumber($value)
    {
        $this->setProperty('ticketNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTicketNumber()
    {
       return $this->getProperty('ticketNumber');
    }


    /**
        * The currency of the price, or a price component when attached to
 * [[PriceSpecification]] and its subtypes.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types, e.g. "Ithaca HOUR".
        * @param array|string|mixed $value
    * @return $this
    */
    public function priceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for
 * entrance.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ticketToken($value)
    {
        $this->setProperty('ticketToken', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTicketToken($value)
    {
        $this->setProperty('ticketToken', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTicketToken()
    {
       return $this->getProperty('ticketToken');
    }


}
