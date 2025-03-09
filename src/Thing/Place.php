<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* Entities that have a somewhat fixed, physical extension.
* @see schema:Place
* @package Sohophp\SchemaOrg\Thing
*/
class Place extends Thing
{
   /**
        * The basic containment relation between a place and one that contains it.
        */
    protected $containedIn = null;

   /**
        * The opening hours of a certain place.
        */
    protected $openingHoursSpecification = null;

   /**
        * The basic containment relation between a place and another that it contains.
        */
    protected $containsPlace = null;

   /**
        * Indicates whether some facility (e.g. [[FoodEstablishment]], [[CovidTestingFacility]]) offers a service that can be used by driving through in a car. In the case of [[CovidTestingFacility]] such facilities could potentially help with social distancing from other potentially-infected users.
        */
    protected $hasDriveThroughService = null;

   /**
        * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
        */
    protected $keywords = null;

   /**
        * A photograph of this place.
        */
    protected $photo = null;

   /**
        * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
        */
    protected $tourBookingPage = null;

   /**
        * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        */
    protected $latitude = null;

   /**
        * Physical address of the item.
        */
    protected $address = null;

   /**
        * The total number of individuals that may attend an event or venue.
        */
    protected $maximumAttendeeCapacity = null;

   /**
        * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
        */
    protected $isicV4 = null;

   /**
        * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship).
        */
    protected $geoEquals = null;

   /**
        * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.\n\nFor example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
      
        */
    protected $branchCode = null;

   /**
        * Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        */
    protected $geoTouches = null;

   /**
        * The telephone number.
        */
    protected $telephone = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoContains = null;

   /**
        * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common. They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        */
    protected $geoDisjoint = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoCoveredBy = null;

   /**
        * A slogan or motto associated with the item.
        */
    protected $slogan = null;

   /**
        * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
        */
    protected $globalLocationNumber = null;

   /**
        * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

        */
    protected $additionalProperty = null;

   /**
        * The fax number.
        */
    protected $faxNumber = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoOverlaps = null;

   /**
        * A URL to a map of the place.
        */
    protected $hasMap = null;

   /**
        * A review of the item.
        */
    protected $review = null;

   /**
        * The special opening hours of a certain place.\n\nUse this to explicitly override general opening hours brought in scope by [[openingHoursSpecification]] or [[openingHours]].
      
        */
    protected $specialOpeningHoursSpecification = null;

   /**
        * Photographs of this place.
        */
    protected $photos = null;

   /**
        * Review of the item.
        */
    protected $reviews = null;

   /**
        * An associated logo.
        */
    protected $logo = null;

   /**
        * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        */
    protected $longitude = null;

   /**
        * The basic containment relation between a place and one that contains it.
        */
    protected $containedInPlace = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoWithin = null;

   /**
        * A flag to signal that the [[Place]] is open to public visitors.  If this property is omitted there is no assumed default boolean value.
        */
    protected $publicAccess = null;

   /**
        * A URL to a map of the place.
        */
    protected $map = null;

   /**
        * A flag to signal that the item, event, or place is accessible for free.
        */
    protected $isAccessibleForFree = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoCrosses = null;

   /**
        * The geo coordinates of the place.
        */
    protected $geo = null;

   /**
        * A URL to a map of the place.
        */
    protected $maps = null;

   /**
        * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoCovers = null;

   /**
        * The overall rating, based on a collection of reviews or ratings, of the item.
        */
    protected $aggregateRating = null;

   /**
        * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital link</a> associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul><li>A Digital Link that contains a serial number (AI <code>21</code>) should only be present on instances of [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI <code>10</code>) should be annotated as [[SomeProduct]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.</li><li>A Digital Link that contains a global model number (AI <code>8013</code>)  should be attached to a [[Product]] or a [[ProductModel]].</li></ul> Other item types should be adapted similarly.
        */
    protected $hasGS1DigitalLink = null;

   /**
        * Upcoming or past events associated with this place or organization.
        */
    protected $events = null;

   /**
        * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        */
    protected $geoIntersects = null;

   /**
        * Upcoming or past event associated with this place, organization, or action.
        */
    protected $event = null;

   /**
        * Certification information about a product, organization, service, place, or person.
        */
    protected $hasCertification = null;

   /**
        * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
        */
    protected $amenityFeature = null;

   /**
        * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
        */
    protected $smokingAllowed = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setContainedIn($value)
    {
        $this->setProperty('containedIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContainedIn()
    {
       return $this->getProperty('containedIn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOpeningHoursSpecification($value)
    {
        $this->setProperty('openingHoursSpecification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOpeningHoursSpecification()
    {
       return $this->getProperty('openingHoursSpecification');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setContainsPlace($value)
    {
        $this->setProperty('containsPlace', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContainsPlace()
    {
       return $this->getProperty('containsPlace');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasDriveThroughService($value)
    {
        $this->setProperty('hasDriveThroughService', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasDriveThroughService()
    {
       return $this->getProperty('hasDriveThroughService');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setKeywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKeywords()
    {
       return $this->getProperty('keywords');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPhoto($value)
    {
        $this->setProperty('photo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPhoto()
    {
       return $this->getProperty('photo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTourBookingPage($value)
    {
        $this->setProperty('tourBookingPage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTourBookingPage()
    {
       return $this->getProperty('tourBookingPage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLatitude($value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLatitude()
    {
       return $this->getProperty('latitude');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAddress($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAddress()
    {
       return $this->getProperty('address');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaximumAttendeeCapacity($value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumAttendeeCapacity()
    {
       return $this->getProperty('maximumAttendeeCapacity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsicV4($value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsicV4()
    {
       return $this->getProperty('isicV4');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoEquals($value)
    {
        $this->setProperty('geoEquals', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoEquals()
    {
       return $this->getProperty('geoEquals');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBranchCode($value)
    {
        $this->setProperty('branchCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBranchCode()
    {
       return $this->getProperty('branchCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoTouches($value)
    {
        $this->setProperty('geoTouches', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoTouches()
    {
       return $this->getProperty('geoTouches');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTelephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTelephone()
    {
       return $this->getProperty('telephone');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoContains()
    {
       return $this->getProperty('geoContains');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoDisjoint()
    {
       return $this->getProperty('geoDisjoint');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoCoveredBy()
    {
       return $this->getProperty('geoCoveredBy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSlogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSlogan()
    {
       return $this->getProperty('slogan');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGlobalLocationNumber($value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGlobalLocationNumber()
    {
       return $this->getProperty('globalLocationNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAdditionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalProperty()
    {
       return $this->getProperty('additionalProperty');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFaxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFaxNumber()
    {
       return $this->getProperty('faxNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoOverlaps($value)
    {
        $this->setProperty('geoOverlaps', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoOverlaps()
    {
       return $this->getProperty('geoOverlaps');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasMap($value)
    {
        $this->setProperty('hasMap', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMap()
    {
       return $this->getProperty('hasMap');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReview($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSpecialOpeningHoursSpecification($value)
    {
        $this->setProperty('specialOpeningHoursSpecification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpecialOpeningHoursSpecification()
    {
       return $this->getProperty('specialOpeningHoursSpecification');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPhotos($value)
    {
        $this->setProperty('photos', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPhotos()
    {
       return $this->getProperty('photos');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviews()
    {
       return $this->getProperty('reviews');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLogo()
    {
       return $this->getProperty('logo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLongitude($value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLongitude()
    {
       return $this->getProperty('longitude');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setContainedInPlace($value)
    {
        $this->setProperty('containedInPlace', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContainedInPlace()
    {
       return $this->getProperty('containedInPlace');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoWithin()
    {
       return $this->getProperty('geoWithin');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPublicAccess($value)
    {
        $this->setProperty('publicAccess', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublicAccess()
    {
       return $this->getProperty('publicAccess');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMap($value)
    {
        $this->setProperty('map', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMap()
    {
       return $this->getProperty('map');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoCrosses($value)
    {
        $this->setProperty('geoCrosses', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoCrosses()
    {
       return $this->getProperty('geoCrosses');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeo($value)
    {
        $this->setProperty('geo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeo()
    {
       return $this->getProperty('geo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaps($value)
    {
        $this->setProperty('maps', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaps()
    {
       return $this->getProperty('maps');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoCovers($value)
    {
        $this->setProperty('geoCovers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoCovers()
    {
       return $this->getProperty('geoCovers');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAggregateRating()
    {
       return $this->getProperty('aggregateRating');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasGS1DigitalLink()
    {
       return $this->getProperty('hasGS1DigitalLink');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEvents($value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvents()
    {
       return $this->getProperty('events');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGeoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGeoIntersects()
    {
       return $this->getProperty('geoIntersects');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasCertification()
    {
       return $this->getProperty('hasCertification');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAmenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmenityFeature()
    {
       return $this->getProperty('amenityFeature');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSmokingAllowed($value)
    {
        $this->setProperty('smokingAllowed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSmokingAllowed()
    {
       return $this->getProperty('smokingAllowed');
    }


}
