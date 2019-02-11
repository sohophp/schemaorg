<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A reservation to dine at a food-related business.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
* @see http://schema.org/FoodEstablishmentReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class FoodEstablishmentReservation extends Reservation
{

    /**
    * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December.<br/><br/>

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @param  $value
    * @return $this
    */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>.<br/><br/>

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @param  $value
    * @return $this
    */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * Number of people the reservation should accommodate.
    * @param int|QuantitativeValue $value
    * @return $this
    */
    public function partySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }


}

