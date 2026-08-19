<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
  use Sohophp\SchemaOrg\Thing\Intangible\Offer;
  use Sohophp\SchemaOrg\Thing\Intangible\Demand;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;

/**
  * A trip or journey. An itinerary of visits to one or more places.
  * @see schema:Trip
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Trip extends Intangible
{


  /**
      * Identifies a [[Trip]] that is a subTrip of this Trip.  For example Day 1, Day
 * 2, etc. of a multi-day trip.
    * @param Trip|array $value
  * @return $this
  */
  public function subTrip($value)
  {
  $this->setProperty('subTrip', $value);
  return $this;
  }

  /**
  * @param Trip|array $value
  * @return $this
  */
  public function setSubTrip($value)
  {
  $this->setProperty('subTrip', $value);
  return $this;
  }

  /**
  * @param Trip $value
  * @return $this
  */
  public function addSubTrip($value)
  {
  $current = $this->getProperty('subTrip');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('subTrip', $current);
  return $this;
  }

  /**
  * @return Trip|array
  */
  public function getSubTrip()
  {
  return $this->getProperty('subTrip');
  }


  /**
      * Destination(s) ( [[Place]] ) that make up a trip. For a trip where
 * destination order is important use [[ItemList]] to specify that order (see
 * examples).
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
  * @param Place|ItemList $value
  * @return $this
  */
  public function addItinerary($value)
  {
  $current = $this->getProperty('itinerary');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('itinerary', $current);
  return $this;
  }

  /**
  * @return Place|ItemList|array
  */
  public function getItinerary()
  {
  return $this->getProperty('itinerary');
  }


  /**
      * The expected arrival time.
    * @param mixed $value
  * @return $this
  */
  public function arrivalTime($value)
  {
  $this->setProperty('arrivalTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setArrivalTime($value)
  {
  $this->setProperty('arrivalTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addArrivalTime($value)
  {
  $current = $this->getProperty('arrivalTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('arrivalTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getArrivalTime()
  {
  return $this->getProperty('arrivalTime');
  }


  /**
      * The location of origin of the trip, prior to any destination(s).
    * @param Place|array $value
  * @return $this
  */
  public function tripOrigin($value)
  {
  $this->setProperty('tripOrigin', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setTripOrigin($value)
  {
  $this->setProperty('tripOrigin', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addTripOrigin($value)
  {
  $current = $this->getProperty('tripOrigin');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('tripOrigin', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getTripOrigin()
  {
  return $this->getProperty('tripOrigin');
  }


  /**
      * The expected departure time.
    * @param mixed $value
  * @return $this
  */
  public function departureTime($value)
  {
  $this->setProperty('departureTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setDepartureTime($value)
  {
  $this->setProperty('departureTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addDepartureTime($value)
  {
  $current = $this->getProperty('departureTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('departureTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getDepartureTime()
  {
  return $this->getProperty('departureTime');
  }


  /**
      * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
 * Use [[businessFunction]] to indicate the kind of transaction offered, i.e.
 * sell, lease, etc. This property can also be used to describe a [[Demand]].
 * While this property is listed as expected on a number of common types, it can
 * be used in others. In that case, using a second type, such as Product or a
 * subtype of Product, can clarify the nature of the offer.
    * @param Offer|Demand|array $value
  * @return $this
  */
  public function offers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand|array $value
  * @return $this
  */
  public function setOffers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand $value
  * @return $this
  */
  public function addOffers($value)
  {
  $current = $this->getProperty('offers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('offers', $current);
  return $this;
  }

  /**
  * @return Offer|Demand|array
  */
  public function getOffers()
  {
  return $this->getProperty('offers');
  }


  /**
      * The service provider, service operator, or service performer; the goods
 * producer. Another party (a seller) may offer those services or goods on
 * behalf of the provider. A provider may also serve as the seller.
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
  * @param Organization|Person $value
  * @return $this
  */
  public function addProvider($value)
  {
  $current = $this->getProperty('provider');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('provider', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getProvider()
  {
  return $this->getProperty('provider');
  }


  /**
      * Identifies that this [[Trip]] is a subTrip of another Trip.  For example Day
 * 1, Day 2, etc. of a multi-day trip.
    * @param Trip|array $value
  * @return $this
  */
  public function partOfTrip($value)
  {
  $this->setProperty('partOfTrip', $value);
  return $this;
  }

  /**
  * @param Trip|array $value
  * @return $this
  */
  public function setPartOfTrip($value)
  {
  $this->setProperty('partOfTrip', $value);
  return $this;
  }

  /**
  * @param Trip $value
  * @return $this
  */
  public function addPartOfTrip($value)
  {
  $current = $this->getProperty('partOfTrip');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('partOfTrip', $current);
  return $this;
  }

  /**
  * @return Trip|array
  */
  public function getPartOfTrip()
  {
  return $this->getProperty('partOfTrip');
  }


}
