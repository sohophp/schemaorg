<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;

/**
* A trip or journey. An itinerary of visits to one or more places.
* @see http://schema.org/Trip
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Trip extends Intangible
{

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * Identifies a <a class="localLink" href="http://schema.org/Trip">Trip</a> that is a subTrip of this Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
    * @param Trip|array $value
    * @return $this
    */
    public function subTrip(?Trip $value)
    {
        $this->setProperty('subTrip', $value);
        return $this;
    }
   /**
    * @param Trip|array $value
    * @return $this
    */
    public function setSubTrip(?Trip $value)
    {
        $this->setProperty('subTrip', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubTrip()
    {
       return $this->getProperty('subTrip');
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer|array $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
   /**
    * @param Offer|array $value
    * @return $this
    */
    public function setOffers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * The expected arrival time.
    * @param |array $value
    * @return $this
    */
    public function arrivalTime($value)
    {
        $this->setProperty('arrivalTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setArrivalTime($value)
    {
        $this->setProperty('arrivalTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArrivalTime()
    {
       return $this->getProperty('arrivalTime');
    }

    /**
    * Identifies that this <a class="localLink" href="http://schema.org/Trip">Trip</a> is a subTrip of another Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
    * @param Trip|array $value
    * @return $this
    */
    public function partOfTrip(?Trip $value)
    {
        $this->setProperty('partOfTrip', $value);
        return $this;
    }
   /**
    * @param Trip|array $value
    * @return $this
    */
    public function setPartOfTrip(?Trip $value)
    {
        $this->setProperty('partOfTrip', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartOfTrip()
    {
       return $this->getProperty('partOfTrip');
    }

    /**
    * The expected departure time.
    * @param |array $value
    * @return $this
    */
    public function departureTime($value)
    {
        $this->setProperty('departureTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDepartureTime($value)
    {
        $this->setProperty('departureTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDepartureTime()
    {
       return $this->getProperty('departureTime');
    }

    /**
    * Destination(s) ( <a class="localLink" href="http://schema.org/Place">Place</a> ) that make up a trip. For a trip where destination order is important use <a class="localLink" href="http://schema.org/ItemList">ItemList</a> to specify that order (see examples).
    * @param Place|ItemList|array $value
    * @return $this
    */
    public function itinerary($value)
    {
        $this->setProperty('itinerary', $value);
        return $this;
    }
   /**
    * @param Place|ItemList|array $value
    * @return $this
    */
    public function setItinerary($value)
    {
        $this->setProperty('itinerary', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getItinerary()
    {
       return $this->getProperty('itinerary');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Trip','Thing\\Trip');

