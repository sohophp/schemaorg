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
        * @param array|string|mixed $value
    * @return $this
    */
    public function containedIn($value)
    {
        $this->setProperty('containedIn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The opening hours of a certain place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function openingHoursSpecification($value)
    {
        $this->setProperty('openingHoursSpecification', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The basic containment relation between a place and another that it contains.
        * @param array|string|mixed $value
    * @return $this
    */
    public function containsPlace($value)
    {
        $this->setProperty('containsPlace', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether some facility (e.g. [[FoodEstablishment]],
 * [[CovidTestingFacility]]) offers a service that can be used by driving
 * through in a car. In the case of [[CovidTestingFacility]] such facilities
 * could potentially help with social distancing from other potentially-infected
 * users.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasDriveThroughService($value)
    {
        $this->setProperty('hasDriveThroughService', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Keywords or tags used to describe some item. Multiple textual entries in a
 * keywords list are typically delimited by commas, or by repeating the
 * property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function keywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A photograph of this place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function photo($value)
    {
        $this->setProperty('photo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A page providing information on how to book a tour of some [[Place]], such as
 * an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as
 * well as other kinds of tours as appropriate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function tourBookingPage($value)
    {
        $this->setProperty('tourBookingPage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The latitude of a location. For example ```37.42242``` ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function latitude($value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Physical address of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The total number of individuals that may attend an event or venue.
        * @param array|string|mixed $value
    * @return $this
    */
    public function maximumAttendeeCapacity($value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The International Standard of Industrial Classification of All Economic
 * Activities (ISIC), Revision 4 code for a particular organization, business
 * person, or place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isicV4($value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents spatial relations in which two geometries (or the places they
 * represent) are topologically equal, as defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
 * topologically equal if their interiors intersect and no part of the interior
 * or boundary of one geometry intersects the exterior of the other" (a
 * symmetric relationship).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoEquals($value)
    {
        $this->setProperty('geoEquals', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A short textual code (also called "store code") that uniquely identifies a
 * place of business. The code is typically assigned by the parentOrganization
 * and used in structured URLs.
 * 
 * For example, in the URL
 * http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a
 * branchCode for a particular branch.
        * @param array|string|mixed $value
    * @return $this
    */
    public function branchCode($value)
    {
        $this->setProperty('branchCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents spatial relations in which two geometries (or the places they
 * represent) touch: "they have at least one boundary point in common, but no
 * interior points." (A symmetric relationship, as defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoTouches($value)
    {
        $this->setProperty('geoTouches', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The telephone number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function telephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a containing geometry to a contained geometry. "a
 * contains b iff no points of b lie in the exterior of a, and at least one
 * point of the interior of b lies in the interior of a". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents spatial relations in which two geometries (or the places they
 * represent) are topologically disjoint: "they have no point in common. They
 * form a set of disconnected geometries." (A symmetric relationship, as defined
 * in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that covers it. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A slogan or motto associated with the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function slogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
 * referred to as International Location Number or ILN) of the respective
 * organization, person, or place. The GLN is a 13-digit number used to identify
 * parties and physical locations.
        * @param array|string|mixed $value
    * @return $this
    */
    public function globalLocationNumber($value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A property-value pair representing an additional characteristic of the
 * entity, e.g. a product feature or another characteristic for which there is
 * no matching property in schema.org.
 * 
 * Note: Publishers should be aware that applications designed to use specific
 * schema.org properties (e.g. https://schema.org/width,
 * https://schema.org/color, https://schema.org/gtin13, ...) will typically
 * expect such data to be provided using those properties, rather than using the
 * generic property/value mechanism.
        * @param array|string|mixed $value
    * @return $this
    */
    public function additionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The fax number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function faxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that geospatially overlaps it,
 * i.e. they have some but not all points in common. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoOverlaps($value)
    {
        $this->setProperty('geoOverlaps', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A URL to a map of the place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasMap($value)
    {
        $this->setProperty('hasMap', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A review of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function review($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The special opening hours of a certain place.
 * 
 * Use this to explicitly override general opening hours brought in scope by
 * [[openingHoursSpecification]] or [[openingHours]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function specialOpeningHoursSpecification($value)
    {
        $this->setProperty('specialOpeningHoursSpecification', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Photographs of this place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function photos($value)
    {
        $this->setProperty('photos', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Review of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function reviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An associated logo.
        * @param array|string|mixed $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The longitude of a location. For example ```-122.08585``` ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function longitude($value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The basic containment relation between a place and one that contains it.
        * @param array|string|mixed $value
    * @return $this
    */
    public function containedInPlace($value)
    {
        $this->setProperty('containedInPlace', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to one that contains it, i.e. it is inside
 * (i.e. within) its interior. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A flag to signal that the [[Place]] is open to public visitors.  If this
 * property is omitted there is no assumed default boolean value.
        * @param array|string|mixed $value
    * @return $this
    */
    public function publicAccess($value)
    {
        $this->setProperty('publicAccess', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A URL to a map of the place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function map($value)
    {
        $this->setProperty('map', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A flag to signal that the item, event, or place is accessible for free.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a geometry to another that crosses it: "a crosses b:
 * they have some but not all interior points in common, and the dimension of
 * the intersection is less than that of at least one of them". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoCrosses($value)
    {
        $this->setProperty('geoCrosses', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The geo coordinates of the place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function geo($value)
    {
        $this->setProperty('geo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A URL to a map of the place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function maps($value)
    {
        $this->setProperty('maps', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents a relationship between two geometries (or the places they
 * represent), relating a covering geometry to a covered geometry. "Every point
 * of b is a point of (the interior or boundary of) a". As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoCovers($value)
    {
        $this->setProperty('geoCovers', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The overall rating, based on a collection of reviews or ratings, of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function aggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The [GS1 digital link](https://www.gs1.org/standards/gs1-digital-link)
 * associated with the object. This URL should conform to the particular
 * requirements of digital links. The link should only contain the Application
 * Identifiers (AIs) that are relevant for the entity being annotated, for
 * instance a [[Product]] or an [[Organization]], and for the correct
 * granularity. In particular, for products:<ul>* A Digital Link that contains a
 * serial number (AI ```21```) should only be present on instances of
 * [[IndividualProduct]]* A Digital Link that contains a lot number (AI
 * ```10```) should be annotated as [[SomeProduct]] if only products from that
 * lot are sold, or [[IndividualProduct]] if there is only a specific product.*
 * A Digital Link that contains a global model number (AI ```8013```)  should be
 * attached to a [[Product]] or a [[ProductModel]]. Other item types should be
 * adapted similarly.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Upcoming or past events associated with this place or organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function events($value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Represents spatial relations in which two geometries (or the places they
 * represent) have at least one point in common. As defined in
 * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
        * @param array|string|mixed $value
    * @return $this
    */
    public function geoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Upcoming or past event associated with this place, organization, or action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Certification information about a product, organization, service, place, or
 * person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An amenity feature (e.g. a characteristic or service) of the Accommodation.
 * This generic property does not make a statement about whether the feature is
 * included in an offer for the main accommodation or available at extra costs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function amenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether it is allowed to smoke in the place, e.g. in the
 * restaurant, hotel or hotel room.
        * @param array|string|mixed $value
    * @return $this
    */
    public function smokingAllowed($value)
    {
        $this->setProperty('smokingAllowed', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
