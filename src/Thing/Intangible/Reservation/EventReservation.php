<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A reservation for an event like a concert, sporting event, or lecture.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/EventReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class EventReservation extends Reservation
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Reservation\\EventReservation','Thing\\EventReservation');

