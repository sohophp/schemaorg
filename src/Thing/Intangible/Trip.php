<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A trip or journey. An itinerary of visits to one or more places.
* @see schema:Trip
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Trip extends Intangible
{


    /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
 * Use [[businessFunction]] to indicate the kind of transaction offered, i.e.
 * sell, lease, etc. This property can also be used to describe a [[Demand]].
 * While this property is listed as expected on a number of common types, it can
 * be used in others. In that case, using a second type, such as Product or a
 * subtype of Product, can clarify the nature of the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }


    /**
        * Destination(s) ( [[Place]] ) that make up a trip. For a trip where
 * destination order is important use [[ItemList]] to specify that order (see
 * examples).
        * @param array|string|mixed $value
    * @return $this
    */
    public function itinerary($value)
    {
        $this->setProperty('itinerary', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setItinerary($value)
    {
        $this->setProperty('itinerary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItinerary()
    {
       return $this->getProperty('itinerary');
    }


    /**
        * The expected arrival time.
        * @param array|string|mixed $value
    * @return $this
    */
    public function arrivalTime($value)
    {
        $this->setProperty('arrivalTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setArrivalTime($value)
    {
        $this->setProperty('arrivalTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalTime()
    {
       return $this->getProperty('arrivalTime');
    }


    /**
        * The expected departure time.
        * @param array|string|mixed $value
    * @return $this
    */
    public function departureTime($value)
    {
        $this->setProperty('departureTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDepartureTime($value)
    {
        $this->setProperty('departureTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartureTime()
    {
       return $this->getProperty('departureTime');
    }


    /**
        * Identifies a [[Trip]] that is a subTrip of this Trip.  For example Day 1, Day
 * 2, etc. of a multi-day trip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function subTrip($value)
    {
        $this->setProperty('subTrip', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSubTrip($value)
    {
        $this->setProperty('subTrip', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubTrip()
    {
       return $this->getProperty('subTrip');
    }


    /**
        * The service provider, service operator, or service performer; the goods
 * producer. Another party (a seller) may offer those services or goods on
 * behalf of the provider. A provider may also serve as the seller.
        * @param array|string|mixed $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The location of origin of the trip, prior to any destination(s).
        * @param array|string|mixed $value
    * @return $this
    */
    public function tripOrigin($value)
    {
        $this->setProperty('tripOrigin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTripOrigin($value)
    {
        $this->setProperty('tripOrigin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTripOrigin()
    {
       return $this->getProperty('tripOrigin');
    }


    /**
        * Identifies that this [[Trip]] is a subTrip of another Trip.  For example Day
 * 1, Day 2, etc. of a multi-day trip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function partOfTrip($value)
    {
        $this->setProperty('partOfTrip', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPartOfTrip($value)
    {
        $this->setProperty('partOfTrip', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfTrip()
    {
       return $this->getProperty('partOfTrip');
    }


}
