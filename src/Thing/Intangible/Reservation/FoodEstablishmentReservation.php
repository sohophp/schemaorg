<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A reservation to dine at a food-related business.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
* @see http://schema.org/FoodEstablishmentReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation

*
*/
class FoodEstablishmentReservation extends Reservation
{

    /**
    * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br/><br/>

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @param array|string $value
    * @return $this
    * @deprecated use setStartTime
    */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setStartTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStartTime()
    {
       return $this->getProperty('startTime');
    }

    /**
    * Number of people the reservation should accommodate.
    * @param QuantitativeValue|int|array|string $value
    * @return $this
    * @deprecated use setPartySize
    */
    public function partySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|int|array|string $value
    * @return $this
    */
    public function setPartySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartySize()
    {
       return $this->getProperty('partySize');
    }

    /**
    * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br/><br/>

Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
    * @param array|string $value
    * @return $this
    * @deprecated use setEndTime
    */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setEndTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEndTime()
    {
       return $this->getProperty('endTime');
    }


}
