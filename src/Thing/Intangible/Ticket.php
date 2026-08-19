<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Seat;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 * @see https://schema.org/Ticket
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class Ticket extends Intangible
{
    /**
     * The seat associated with the ticket.
     * @see https://schema.org/ticketedSeat
     * @param Seat|array $value
     * @return $this
     */
    public function ticketedSeat($value)
    {
        $this->setProperty('ticketedSeat', $value);
        return $this;
    }

    /**
     * @param Seat|array $value
     * @return $this
     */
    public function setTicketedSeat($value)
    {
        $this->setProperty('ticketedSeat', $value);
        return $this;
    }

    /**
     * @param Seat $value
     * @return $this
     */
    public function addTicketedSeat($value)
    {
        $current = $this->getProperty('ticketedSeat');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ticketedSeat', $current);
        return $this;
    }

    /**
     * @return Seat|array
     */
    public function getTicketedSeat()
    {
        return $this->getProperty('ticketedSeat');
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
     * The unique identifier for the ticket.
     * @see https://schema.org/ticketNumber
     * @param string|array $value
     * @return $this
     */
    public function ticketNumber($value)
    {
        $this->setProperty('ticketNumber', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTicketNumber($value)
    {
        $this->setProperty('ticketNumber', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTicketNumber($value)
    {
        $current = $this->getProperty('ticketNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ticketNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTicketNumber()
    {
        return $this->getProperty('ticketNumber');
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
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     * @see https://schema.org/ticketToken
     * @param string|array $value
     * @return $this
     */
    public function ticketToken($value)
    {
        $this->setProperty('ticketToken', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTicketToken($value)
    {
        $this->setProperty('ticketToken', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTicketToken($value)
    {
        $current = $this->getProperty('ticketToken');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ticketToken', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTicketToken()
    {
        return $this->getProperty('ticketToken');
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
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
     * @see https://schema.org/issuedBy
     * @param Organization|array $value
     * @return $this
     */
    public function issuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setIssuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addIssuedBy($value)
    {
        $current = $this->getProperty('issuedBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issuedBy', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getIssuedBy()
    {
        return $this->getProperty('issuedBy');
    }
    /**
     * The date the ticket was issued.
     * @see https://schema.org/dateIssued
     * @param mixed $value
     * @return $this
     */
    public function dateIssued($value)
    {
        $this->setProperty('dateIssued', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateIssued($value)
    {
        $this->setProperty('dateIssued', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateIssued($value)
    {
        $current = $this->getProperty('dateIssued');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateIssued', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateIssued()
    {
        return $this->getProperty('dateIssued');
    }
}
