<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A reservation for bus travel. <br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/BusReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation

*
*/
class BusReservation extends Reservation
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Reservation\\BusReservation','Thing\\BusReservation');

