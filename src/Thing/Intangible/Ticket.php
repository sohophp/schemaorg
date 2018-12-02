<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Seat;
/**
* Used to describe a ticket to an event, a flight, a bus ride, etc.
* @see http://schema.org/Ticket
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Ticket extends Intangible
{

     
     /**
     * The unique identifier for the ticket.
     * @param string $value
     * @return $this
     */

     public function ticketNumber(?string $value):self
     {
        $this->setProperty("ticketNumber",$value);
        return $this;
     }

     
     /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
     * @param string|string $value
     * @return $this
     */

     public function ticketToken( $value):self
     {
        $this->setProperty("ticketToken",$value);
        return $this;
     }

     
     /**
     * The seat associated with the ticket.
     * @param Seat $value
     * @return $this
     */

     public function ticketedSeat(?Seat $value):self
     {
        $this->setProperty("ticketedSeat",$value);
        return $this;
     }

     
     /**
     * The date the ticket was issued.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function dateIssued(?\DateTimeInterface $value):self
     {
        $this->setProperty("dateIssued",$value);
        return $this;
     }

     
}

