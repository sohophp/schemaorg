<?php
namespace Sohophp\SchemaOrg\Thing;

  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Event;
  use Sohophp\SchemaOrg\Thing\Intangible\GeospatialGeometry;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Photograph;
  use Sohophp\SchemaOrg\Certification;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Map;
  use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;

/**
  * Entities that have a somewhat fixed, physical extension.
  * @see schema:Place
* @package Sohophp\SchemaOrg\Thing
*/
class Place extends Thing
{


  /**
      * Upcoming or past events associated with this place or organization.
    * @param Event|array $value
  * @return $this
  */
  public function events($value)
  {
  $this->setProperty('events', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setEvents($value)
  {
  $this->setProperty('events', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addEvents($value)
  {
  $current = $this->getProperty('events');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('events', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getEvents()
  {
  return $this->getProperty('events');
  }


  /**
      * The basic containment relation between a place and another that it contains.
    * @param Place|array $value
  * @return $this
  */
  public function containsPlace($value)
  {
  $this->setProperty('containsPlace', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setContainsPlace($value)
  {
  $this->setProperty('containsPlace', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addContainsPlace($value)
  {
  $current = $this->getProperty('containsPlace');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('containsPlace', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getContainsPlace()
  {
  return $this->getProperty('containsPlace');
  }


  /**
      * The telephone number.
    * @param string|array $value
  * @return $this
  */
  public function telephone($value)
  {
  $this->setProperty('telephone', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTelephone($value)
  {
  $this->setProperty('telephone', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTelephone($value)
  {
  $current = $this->getProperty('telephone');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('telephone', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTelephone()
  {
  return $this->getProperty('telephone');
  }


  /**
      * Represents spatial relations in which two geometries (or the places they
 * represent) have at least one point in common. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function geoIntersects($value)
  {
  $this->setProperty('geoIntersects', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function setGeoIntersects($value)
  {
  $this->setProperty('geoIntersects', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry $value
  * @return $this
  */
  public function addGeoIntersects($value)
  {
  $current = $this->getProperty('geoIntersects');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoIntersects', $current);
  return $this;
  }

  /**
  * @return Place|GeospatialGeometry|array
  */
  public function getGeoIntersects()
  {
  return $this->getProperty('geoIntersects');
  }


  /**
      * A flag to signal that the [[Place]] is open to public visitors.  If this
 * property is omitted there is no assumed default boolean value.
    * @param bool|array $value
  * @return $this
  */
  public function publicAccess($value)
  {
  $this->setProperty('publicAccess', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setPublicAccess($value)
  {
  $this->setProperty('publicAccess', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addPublicAccess($value)
  {
  $current = $this->getProperty('publicAccess');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('publicAccess', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getPublicAccess()
  {
  return $this->getProperty('publicAccess');
  }


  /**
      * A short textual code (also called "store code") that uniquely identifies a
 * place of business. The code is typically assigned by the parentOrganization
 * and used in structured URLs.
 * 
 * For example, in the URL
 * http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a
 * branchCode for a particular branch.
    * @param string|array $value
  * @return $this
  */
  public function branchCode($value)
  {
  $this->setProperty('branchCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBranchCode($value)
  {
  $this->setProperty('branchCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBranchCode($value)
  {
  $current = $this->getProperty('branchCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('branchCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBranchCode()
  {
  return $this->getProperty('branchCode');
  }


  /**
      * Physical address of the item.
    * @param string|PostalAddress|array $value
  * @return $this
  */
  public function address($value)
  {
  $this->setProperty('address', $value);
  return $this;
  }

  /**
  * @param string|PostalAddress|array $value
  * @return $this
  */
  public function setAddress($value)
  {
  $this->setProperty('address', $value);
  return $this;
  }

  /**
  * @param string|PostalAddress $value
  * @return $this
  */
  public function addAddress($value)
  {
  $current = $this->getProperty('address');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('address', $current);
  return $this;
  }

  /**
  * @return string|PostalAddress|array
  */
  public function getAddress()
  {
  return $this->getProperty('address');
  }


  /**
      * An associated logo.
    * @param string|ImageObject|array $value
  * @return $this
  */
  public function logo($value)
  {
  $this->setProperty('logo', $value);
  return $this;
  }

  /**
  * @param string|ImageObject|array $value
  * @return $this
  */
  public function setLogo($value)
  {
  $this->setProperty('logo', $value);
  return $this;
  }

  /**
  * @param string|ImageObject $value
  * @return $this
  */
  public function addLogo($value)
  {
  $current = $this->getProperty('logo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('logo', $current);
  return $this;
  }

  /**
  * @return string|ImageObject|array
  */
  public function getLogo()
  {
  return $this->getProperty('logo');
  }


  /**
      * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
 * referred to as International Location Number or ILN) of the respective
 * organization, person, or place. The GLN is a 13-digit number used to identify
 * parties and physical locations.
    * @param string|array $value
  * @return $this
  */
  public function globalLocationNumber($value)
  {
  $this->setProperty('globalLocationNumber', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setGlobalLocationNumber($value)
  {
  $this->setProperty('globalLocationNumber', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addGlobalLocationNumber($value)
  {
  $current = $this->getProperty('globalLocationNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('globalLocationNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getGlobalLocationNumber()
  {
  return $this->getProperty('globalLocationNumber');
  }


  /**
      * The total number of individuals that may attend an event or venue.
    * @param int|array $value
  * @return $this
  */
  public function maximumAttendeeCapacity($value)
  {
  $this->setProperty('maximumAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setMaximumAttendeeCapacity($value)
  {
  $this->setProperty('maximumAttendeeCapacity', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addMaximumAttendeeCapacity($value)
  {
  $current = $this->getProperty('maximumAttendeeCapacity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('maximumAttendeeCapacity', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getMaximumAttendeeCapacity()
  {
  return $this->getProperty('maximumAttendeeCapacity');
  }


  /**
      * Review of the item.
    * @param Review|array $value
  * @return $this
  */
  public function reviews($value)
  {
  $this->setProperty('reviews', $value);
  return $this;
  }

  /**
  * @param Review|array $value
  * @return $this
  */
  public function setReviews($value)
  {
  $this->setProperty('reviews', $value);
  return $this;
  }

  /**
  * @param Review $value
  * @return $this
  */
  public function addReviews($value)
  {
  $current = $this->getProperty('reviews');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('reviews', $current);
  return $this;
  }

  /**
  * @return Review|array
  */
  public function getReviews()
  {
  return $this->getProperty('reviews');
  }


  /**
      * A property-value pair representing an additional characteristic of the
 * entity, e.g. a product feature or another characteristic for which there is
 * no matching property in schema.org.
 * 
 * Note: Publishers should be aware that applications designed to use specific
 * schema.org properties (e.g. https://schema.org/width,
 * https://schema.org/color, https://schema.org/gtin13, ...) will typically
 * expect such data to be provided using those properties, rather than using the
 * generic property/value mechanism.
    * @param PropertyValue|array $value
  * @return $this
  */
  public function additionalProperty($value)
  {
  $this->setProperty('additionalProperty', $value);
  return $this;
  }

  /**
  * @param PropertyValue|array $value
  * @return $this
  */
  public function setAdditionalProperty($value)
  {
  $this->setProperty('additionalProperty', $value);
  return $this;
  }

  /**
  * @param PropertyValue $value
  * @return $this
  */
  public function addAdditionalProperty($value)
  {
  $current = $this->getProperty('additionalProperty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('additionalProperty', $current);
  return $this;
  }

  /**
  * @return PropertyValue|array
  */
  public function getAdditionalProperty()
  {
  return $this->getProperty('additionalProperty');
  }


  /**
      * The special opening hours of a certain place.
 * 
 * Use this to explicitly override general opening hours brought in scope by
 * [[openingHoursSpecification]] or [[openingHours]].
    * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function specialOpeningHoursSpecification($value)
  {
  $this->setProperty('specialOpeningHoursSpecification', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function setSpecialOpeningHoursSpecification($value)
  {
  $this->setProperty('specialOpeningHoursSpecification', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification $value
  * @return $this
  */
  public function addSpecialOpeningHoursSpecification($value)
  {
  $current = $this->getProperty('specialOpeningHoursSpecification');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('specialOpeningHoursSpecification', $current);
  return $this;
  }

  /**
  * @return OpeningHoursSpecification|array
  */
  public function getSpecialOpeningHoursSpecification()
  {
  return $this->getProperty('specialOpeningHoursSpecification');
  }


  /**
      * Keywords or tags used to describe some item. Multiple textual entries in a
 * keywords list are typically delimited by commas, or by repeating the
 * property.
    * @param DefinedTerm|string|array $value
  * @return $this
  */
  public function keywords($value)
  {
  $this->setProperty('keywords', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|string|array $value
  * @return $this
  */
  public function setKeywords($value)
  {
  $this->setProperty('keywords', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|string $value
  * @return $this
  */
  public function addKeywords($value)
  {
  $current = $this->getProperty('keywords');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('keywords', $current);
  return $this;
  }

  /**
  * @return DefinedTerm|string|array
  */
  public function getKeywords()
  {
  return $this->getProperty('keywords');
  }


  /**
      * A URL to a map of the place.
    * @param string|array $value
  * @return $this
  */
  public function map($value)
  {
  $this->setProperty('map', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setMap($value)
  {
  $this->setProperty('map', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addMap($value)
  {
  $current = $this->getProperty('map');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('map', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getMap()
  {
  return $this->getProperty('map');
  }


  /**
      * A photograph of this place.
    * @param Photograph|ImageObject|array $value
  * @return $this
  */
  public function photo($value)
  {
  $this->setProperty('photo', $value);
  return $this;
  }

  /**
  * @param Photograph|ImageObject|array $value
  * @return $this
  */
  public function setPhoto($value)
  {
  $this->setProperty('photo', $value);
  return $this;
  }

  /**
  * @param Photograph|ImageObject $value
  * @return $this
  */
  public function addPhoto($value)
  {
  $current = $this->getProperty('photo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('photo', $current);
  return $this;
  }

  /**
  * @return Photograph|ImageObject|array
  */
  public function getPhoto()
  {
  return $this->getProperty('photo');
  }


  /**
      * Indicates whether it is allowed to smoke in the place, e.g. in the
 * restaurant, hotel or hotel room.
    * @param bool|array $value
  * @return $this
  */
  public function smokingAllowed($value)
  {
  $this->setProperty('smokingAllowed', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setSmokingAllowed($value)
  {
  $this->setProperty('smokingAllowed', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addSmokingAllowed($value)
  {
  $current = $this->getProperty('smokingAllowed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('smokingAllowed', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getSmokingAllowed()
  {
  return $this->getProperty('smokingAllowed');
  }


  /**
      * The longitude of a location. For example ```-122.08585``` ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @param string|array $value
  * @return $this
  */
  public function longitude($value)
  {
  $this->setProperty('longitude', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setLongitude($value)
  {
  $this->setProperty('longitude', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addLongitude($value)
  {
  $current = $this->getProperty('longitude');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('longitude', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getLongitude()
  {
  return $this->getProperty('longitude');
  }


  /**
      * A review of the item.
    * @param Review|array $value
  * @return $this
  */
  public function review($value)
  {
  $this->setProperty('review', $value);
  return $this;
  }

  /**
  * @param Review|array $value
  * @return $this
  */
  public function setReview($value)
  {
  $this->setProperty('review', $value);
  return $this;
  }

  /**
  * @param Review $value
  * @return $this
  */
  public function addReview($value)
  {
  $current = $this->getProperty('review');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('review', $current);
  return $this;
  }

  /**
  * @return Review|array
  */
  public function getReview()
  {
  return $this->getProperty('review');
  }


  /**
      * The basic containment relation between a place and one that contains it.
    * @param Place|array $value
  * @return $this
  */
  public function containedIn($value)
  {
  $this->setProperty('containedIn', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setContainedIn($value)
  {
  $this->setProperty('containedIn', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addContainedIn($value)
  {
  $current = $this->getProperty('containedIn');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('containedIn', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getContainedIn()
  {
  return $this->getProperty('containedIn');
  }


  /**
      * A page providing information on how to book a tour of some [[Place]], such as
 * an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as
 * well as other kinds of tours as appropriate.
    * @param string|array $value
  * @return $this
  */
  public function tourBookingPage($value)
  {
  $this->setProperty('tourBookingPage', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTourBookingPage($value)
  {
  $this->setProperty('tourBookingPage', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTourBookingPage($value)
  {
  $current = $this->getProperty('tourBookingPage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('tourBookingPage', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTourBookingPage()
  {
  return $this->getProperty('tourBookingPage');
  }


  /**
      * Certification information about a product, organization, service, place, or
 * person.
    * @param Certification|array $value
  * @return $this
  */
  public function hasCertification($value)
  {
  $this->setProperty('hasCertification', $value);
  return $this;
  }

  /**
  * @param Certification|array $value
  * @return $this
  */
  public function setHasCertification($value)
  {
  $this->setProperty('hasCertification', $value);
  return $this;
  }

  /**
  * @param Certification $value
  * @return $this
  */
  public function addHasCertification($value)
  {
  $current = $this->getProperty('hasCertification');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasCertification', $current);
  return $this;
  }

  /**
  * @return Certification|array
  */
  public function getHasCertification()
  {
  return $this->getProperty('hasCertification');
  }


  /**
      * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that covers it. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function geoCoveredBy($value)
  {
  $this->setProperty('geoCoveredBy', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function setGeoCoveredBy($value)
  {
  $this->setProperty('geoCoveredBy', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place $value
  * @return $this
  */
  public function addGeoCoveredBy($value)
  {
  $current = $this->getProperty('geoCoveredBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoCoveredBy', $current);
  return $this;
  }

  /**
  * @return GeospatialGeometry|Place|array
  */
  public function getGeoCoveredBy()
  {
  return $this->getProperty('geoCoveredBy');
  }


  /**
      * The geo coordinates of the place.
    * @param GeoShape|GeoCoordinates|array $value
  * @return $this
  */
  public function geo($value)
  {
  $this->setProperty('geo', $value);
  return $this;
  }

  /**
  * @param GeoShape|GeoCoordinates|array $value
  * @return $this
  */
  public function setGeo($value)
  {
  $this->setProperty('geo', $value);
  return $this;
  }

  /**
  * @param GeoShape|GeoCoordinates $value
  * @return $this
  */
  public function addGeo($value)
  {
  $current = $this->getProperty('geo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geo', $current);
  return $this;
  }

  /**
  * @return GeoShape|GeoCoordinates|array
  */
  public function getGeo()
  {
  return $this->getProperty('geo');
  }


  /**
      * Represents spatial relations in which two geometries (or the places they
 * represent) touch: "they have at least one boundary point in common, but no
 * interior points." (A symmetric relationship, as defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function geoTouches($value)
  {
  $this->setProperty('geoTouches', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function setGeoTouches($value)
  {
  $this->setProperty('geoTouches', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry $value
  * @return $this
  */
  public function addGeoTouches($value)
  {
  $current = $this->getProperty('geoTouches');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoTouches', $current);
  return $this;
  }

  /**
  * @return Place|GeospatialGeometry|array
  */
  public function getGeoTouches()
  {
  return $this->getProperty('geoTouches');
  }


  /**
      * An amenity feature (e.g. a characteristic or service) of the Accommodation.
 * This generic property does not make a statement about whether the feature is
 * included in an offer for the main accommodation or available at extra costs.
    * @param LocationFeatureSpecification|array $value
  * @return $this
  */
  public function amenityFeature($value)
  {
  $this->setProperty('amenityFeature', $value);
  return $this;
  }

  /**
  * @param LocationFeatureSpecification|array $value
  * @return $this
  */
  public function setAmenityFeature($value)
  {
  $this->setProperty('amenityFeature', $value);
  return $this;
  }

  /**
  * @param LocationFeatureSpecification $value
  * @return $this
  */
  public function addAmenityFeature($value)
  {
  $current = $this->getProperty('amenityFeature');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('amenityFeature', $current);
  return $this;
  }

  /**
  * @return LocationFeatureSpecification|array
  */
  public function getAmenityFeature()
  {
  return $this->getProperty('amenityFeature');
  }


  /**
      * A URL to a map of the place.
    * @param string|Map|array $value
  * @return $this
  */
  public function hasMap($value)
  {
  $this->setProperty('hasMap', $value);
  return $this;
  }

  /**
  * @param string|Map|array $value
  * @return $this
  */
  public function setHasMap($value)
  {
  $this->setProperty('hasMap', $value);
  return $this;
  }

  /**
  * @param string|Map $value
  * @return $this
  */
  public function addHasMap($value)
  {
  $current = $this->getProperty('hasMap');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasMap', $current);
  return $this;
  }

  /**
  * @return string|Map|array
  */
  public function getHasMap()
  {
  return $this->getProperty('hasMap');
  }


  /**
      * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to one that contains it, i.e. it is inside
 * (i.e. within) its interior. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function geoWithin($value)
  {
  $this->setProperty('geoWithin', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function setGeoWithin($value)
  {
  $this->setProperty('geoWithin', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place $value
  * @return $this
  */
  public function addGeoWithin($value)
  {
  $current = $this->getProperty('geoWithin');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoWithin', $current);
  return $this;
  }

  /**
  * @return GeospatialGeometry|Place|array
  */
  public function getGeoWithin()
  {
  return $this->getProperty('geoWithin');
  }


  /**
      * Represents a relationship between two geometries (or the places they
 * represent), relating a covering geometry to a covered geometry. "Every point
 * of b is a point of (the interior or boundary of) a". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function geoCovers($value)
  {
  $this->setProperty('geoCovers', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function setGeoCovers($value)
  {
  $this->setProperty('geoCovers', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place $value
  * @return $this
  */
  public function addGeoCovers($value)
  {
  $current = $this->getProperty('geoCovers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoCovers', $current);
  return $this;
  }

  /**
  * @return GeospatialGeometry|Place|array
  */
  public function getGeoCovers()
  {
  return $this->getProperty('geoCovers');
  }


  /**
      * The [GS1 digital link](https://www.gs1.org/standards/gs1-digital-link)
 * associated with the object. This URL should conform to the particular
 * requirements of digital links. The link should only contain the Application
 * Identifiers (AIs) that are relevant for the entity being annotated, for
 * instance a [[Product]] or an [[Organization]], and for the correct
 * granularity. In particular, for products:<ul>* A Digital Link that contains a
 * serial number (AI ```21```) should only be present on instances of
 * [[IndividualProduct]]* A Digital Link that contains a lot number (AI
 * ```10```) should be annotated as [[SomeProducts]] if only products from that
 * lot are sold, or [[IndividualProduct]] if there is only a specific product.*
 * A Digital Link that contains a global model number (AI ```8013```) should be
 * attached to a [[Product]] or a [[ProductModel]]. Other item types should be
 * adapted similarly.
    * @param string|array $value
  * @return $this
  */
  public function hasGS1DigitalLink($value)
  {
  $this->setProperty('hasGS1DigitalLink', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHasGS1DigitalLink($value)
  {
  $this->setProperty('hasGS1DigitalLink', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHasGS1DigitalLink($value)
  {
  $current = $this->getProperty('hasGS1DigitalLink');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasGS1DigitalLink', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHasGS1DigitalLink()
  {
  return $this->getProperty('hasGS1DigitalLink');
  }


  /**
      * Represents spatial relations in which two geometries (or the places they
 * represent) are topologically equal, as defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
 * topologically equal if their interiors intersect and no part of the interior
 * or boundary of one geometry intersects the exterior of the other" (a
 * symmetric relationship).
    * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function geoEquals($value)
  {
  $this->setProperty('geoEquals', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function setGeoEquals($value)
  {
  $this->setProperty('geoEquals', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry $value
  * @return $this
  */
  public function addGeoEquals($value)
  {
  $current = $this->getProperty('geoEquals');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoEquals', $current);
  return $this;
  }

  /**
  * @return Place|GeospatialGeometry|array
  */
  public function getGeoEquals()
  {
  return $this->getProperty('geoEquals');
  }


  /**
      * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating|array $value
  * @return $this
  */
  public function aggregateRating($value)
  {
  $this->setProperty('aggregateRating', $value);
  return $this;
  }

  /**
  * @param AggregateRating|array $value
  * @return $this
  */
  public function setAggregateRating($value)
  {
  $this->setProperty('aggregateRating', $value);
  return $this;
  }

  /**
  * @param AggregateRating $value
  * @return $this
  */
  public function addAggregateRating($value)
  {
  $current = $this->getProperty('aggregateRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('aggregateRating', $current);
  return $this;
  }

  /**
  * @return AggregateRating|array
  */
  public function getAggregateRating()
  {
  return $this->getProperty('aggregateRating');
  }


  /**
      * Photographs of this place.
    * @param Photograph|ImageObject|array $value
  * @return $this
  */
  public function photos($value)
  {
  $this->setProperty('photos', $value);
  return $this;
  }

  /**
  * @param Photograph|ImageObject|array $value
  * @return $this
  */
  public function setPhotos($value)
  {
  $this->setProperty('photos', $value);
  return $this;
  }

  /**
  * @param Photograph|ImageObject $value
  * @return $this
  */
  public function addPhotos($value)
  {
  $current = $this->getProperty('photos');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('photos', $current);
  return $this;
  }

  /**
  * @return Photograph|ImageObject|array
  */
  public function getPhotos()
  {
  return $this->getProperty('photos');
  }


  /**
      * The basic containment relation between a place and one that contains it.
    * @param Place|array $value
  * @return $this
  */
  public function containedInPlace($value)
  {
  $this->setProperty('containedInPlace', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setContainedInPlace($value)
  {
  $this->setProperty('containedInPlace', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addContainedInPlace($value)
  {
  $current = $this->getProperty('containedInPlace');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('containedInPlace', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getContainedInPlace()
  {
  return $this->getProperty('containedInPlace');
  }


  /**
      * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that geospatially overlaps it,
 * i.e. they have some but not all points in common. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function geoOverlaps($value)
  {
  $this->setProperty('geoOverlaps', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function setGeoOverlaps($value)
  {
  $this->setProperty('geoOverlaps', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place $value
  * @return $this
  */
  public function addGeoOverlaps($value)
  {
  $current = $this->getProperty('geoOverlaps');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoOverlaps', $current);
  return $this;
  }

  /**
  * @return GeospatialGeometry|Place|array
  */
  public function getGeoOverlaps()
  {
  return $this->getProperty('geoOverlaps');
  }


  /**
      * A slogan or motto associated with the item.
    * @param string|array $value
  * @return $this
  */
  public function slogan($value)
  {
  $this->setProperty('slogan', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSlogan($value)
  {
  $this->setProperty('slogan', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSlogan($value)
  {
  $current = $this->getProperty('slogan');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('slogan', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSlogan()
  {
  return $this->getProperty('slogan');
  }


  /**
      * Upcoming or past event associated with this place, organization, or action.
    * @param Event|array $value
  * @return $this
  */
  public function event($value)
  {
  $this->setProperty('event', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setEvent($value)
  {
  $this->setProperty('event', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addEvent($value)
  {
  $current = $this->getProperty('event');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('event', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getEvent()
  {
  return $this->getProperty('event');
  }


  /**
      * Represents spatial relations in which two geometries (or the places they
 * represent) are topologically disjoint: "they have no point in common. They
 * form a set of disconnected geometries." (A symmetric relationship, as defined
 * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
    * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function geoDisjoint($value)
  {
  $this->setProperty('geoDisjoint', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function setGeoDisjoint($value)
  {
  $this->setProperty('geoDisjoint', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry $value
  * @return $this
  */
  public function addGeoDisjoint($value)
  {
  $current = $this->getProperty('geoDisjoint');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoDisjoint', $current);
  return $this;
  }

  /**
  * @return Place|GeospatialGeometry|array
  */
  public function getGeoDisjoint()
  {
  return $this->getProperty('geoDisjoint');
  }


  /**
      * Indicates whether some facility (e.g. [[FoodEstablishment]],
 * [[CovidTestingFacility]]) offers a service that can be used by driving
 * through in a car. In the case of [[CovidTestingFacility]] such facilities
 * could potentially help with social distancing from other potentially-infected
 * users.
    * @param bool|array $value
  * @return $this
  */
  public function hasDriveThroughService($value)
  {
  $this->setProperty('hasDriveThroughService', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setHasDriveThroughService($value)
  {
  $this->setProperty('hasDriveThroughService', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addHasDriveThroughService($value)
  {
  $current = $this->getProperty('hasDriveThroughService');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasDriveThroughService', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getHasDriveThroughService()
  {
  return $this->getProperty('hasDriveThroughService');
  }


  /**
      * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that crosses it: "a crosses b:
 * they have some but not all interior points in common, and the dimension of
 * the intersection is less than that of at least one of them". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function geoCrosses($value)
  {
  $this->setProperty('geoCrosses', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place|array $value
  * @return $this
  */
  public function setGeoCrosses($value)
  {
  $this->setProperty('geoCrosses', $value);
  return $this;
  }

  /**
  * @param GeospatialGeometry|Place $value
  * @return $this
  */
  public function addGeoCrosses($value)
  {
  $current = $this->getProperty('geoCrosses');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoCrosses', $current);
  return $this;
  }

  /**
  * @return GeospatialGeometry|Place|array
  */
  public function getGeoCrosses()
  {
  return $this->getProperty('geoCrosses');
  }


  /**
      * The latitude of a location. For example ```37.42242``` ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
    * @param string|array $value
  * @return $this
  */
  public function latitude($value)
  {
  $this->setProperty('latitude', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setLatitude($value)
  {
  $this->setProperty('latitude', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addLatitude($value)
  {
  $current = $this->getProperty('latitude');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('latitude', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getLatitude()
  {
  return $this->getProperty('latitude');
  }


  /**
      * A URL to a map of the place.
    * @param string|array $value
  * @return $this
  */
  public function maps($value)
  {
  $this->setProperty('maps', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setMaps($value)
  {
  $this->setProperty('maps', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addMaps($value)
  {
  $current = $this->getProperty('maps');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('maps', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getMaps()
  {
  return $this->getProperty('maps');
  }


  /**
      * Represents a relationship between two geometries (or the places they
 * represent), relating a containing geometry to a contained geometry. "a
 * contains b iff no points of b lie in the exterior of a, and at least one
 * point of the interior of b lies in the interior of a". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
    * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function geoContains($value)
  {
  $this->setProperty('geoContains', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry|array $value
  * @return $this
  */
  public function setGeoContains($value)
  {
  $this->setProperty('geoContains', $value);
  return $this;
  }

  /**
  * @param Place|GeospatialGeometry $value
  * @return $this
  */
  public function addGeoContains($value)
  {
  $current = $this->getProperty('geoContains');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoContains', $current);
  return $this;
  }

  /**
  * @return Place|GeospatialGeometry|array
  */
  public function getGeoContains()
  {
  return $this->getProperty('geoContains');
  }


  /**
      * The fax number.
    * @param string|array $value
  * @return $this
  */
  public function faxNumber($value)
  {
  $this->setProperty('faxNumber', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setFaxNumber($value)
  {
  $this->setProperty('faxNumber', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addFaxNumber($value)
  {
  $current = $this->getProperty('faxNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('faxNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getFaxNumber()
  {
  return $this->getProperty('faxNumber');
  }


  /**
      * A flag to signal that the item, event, or place is accessible for free.
    * @param bool|array $value
  * @return $this
  */
  public function isAccessibleForFree($value)
  {
  $this->setProperty('isAccessibleForFree', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setIsAccessibleForFree($value)
  {
  $this->setProperty('isAccessibleForFree', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addIsAccessibleForFree($value)
  {
  $current = $this->getProperty('isAccessibleForFree');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isAccessibleForFree', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getIsAccessibleForFree()
  {
  return $this->getProperty('isAccessibleForFree');
  }


  /**
      * The International Standard of Industrial Classification of All Economic
 * Activities (ISIC), Revision 4 code for a particular organization, business
 * person, or place.
    * @param string|array $value
  * @return $this
  */
  public function isicV4($value)
  {
  $this->setProperty('isicV4', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setIsicV4($value)
  {
  $this->setProperty('isicV4', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addIsicV4($value)
  {
  $current = $this->getProperty('isicV4');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isicV4', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getIsicV4()
  {
  return $this->getProperty('isicV4');
  }


  /**
      * The opening hours of a certain place.
    * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function openingHoursSpecification($value)
  {
  $this->setProperty('openingHoursSpecification', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function setOpeningHoursSpecification($value)
  {
  $this->setProperty('openingHoursSpecification', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification $value
  * @return $this
  */
  public function addOpeningHoursSpecification($value)
  {
  $current = $this->getProperty('openingHoursSpecification');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('openingHoursSpecification', $current);
  return $this;
  }

  /**
  * @return OpeningHoursSpecification|array
  */
  public function getOpeningHoursSpecification()
  {
  return $this->getProperty('openingHoursSpecification');
  }


}
