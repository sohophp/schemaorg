<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Seat;

/**
* Used to describe a ticket to an event, a flight, a bus ride, etc.
* @see http://schema.org/Ticket
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Ticket extends Intangible
{

    /**
    * The person or organization the reservation or ticket is for.
    * @param Organization|Person $value
    * @return $this
    */
    public function underName($value)
    {
        $this->setProperty('underName', $value);
        return $this;
    }

    /**
    * The total price for the reservation or ticket, including applicable taxes, shipping, etc.<br/><br/>

Usage guidelines:<br/><br/>

<ul>
<li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
<li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
</ul>

    * @param PriceSpecification|string $value
    * @return $this
    */
    public function totalPrice($value)
    {
        $this->setProperty('totalPrice', $value);
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
    * The unique identifier for the ticket.
    * @param string $value
    * @return $this
    */
    public function ticketNumber(?string $value)
    {
        $this->setProperty('ticketNumber', $value);
        return $this;
    }

    /**
    * The organization issuing the ticket or permit.
    * @param Organization $value
    * @return $this
    */
    public function issuedBy(?Organization $value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
    * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
    * @param string|string $value
    * @return $this
    */
    public function ticketToken($value)
    {
        $this->setProperty('ticketToken', $value);
        return $this;
    }

    /**
    * The seat associated with the ticket.
    * @param Seat $value
    * @return $this
    */
    public function ticketedSeat(?Seat $value)
    {
        $this->setProperty('ticketedSeat', $value);
        return $this;
    }

    /**
    * The date the ticket was issued.
    * @param  $value
    * @return $this
    */
    public function dateIssued($value)
    {
        $this->setProperty('dateIssued', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Ticket','Thing\\Ticket');

