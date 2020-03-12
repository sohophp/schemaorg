<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\GeospatialGeometry;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Photograph;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\CreativeWork\Map;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates;

/**
* Entities that have a somewhat fixed, physical extension.
* @see http://schema.org/Place
* @package Sohophp\SchemaOrg\Thing

*
*/
class Place extends Thing
{

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param Place|GeospatialGeometry|array $value
    * @return $this
    */
    public function geoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }
   /**
    * @param Place|GeospatialGeometry|array $value
    * @return $this
    */
    public function setGeoWithin($value)
    {
        $this->setProperty('geoWithin', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoWithin()
    {
       return $this->getProperty('geoWithin');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param GeospatialGeometry|Place|array $value
    * @return $this
    */
    public function geoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array $value
    * @return $this
    */
    public function setGeoContains($value)
    {
        $this->setProperty('geoContains', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoContains()
    {
       return $this->getProperty('geoContains');
    }

    /**
    * The opening hours of a certain place.
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function openingHoursSpecification(?OpeningHoursSpecification $value)
    {
        $this->setProperty('openingHoursSpecification', $value);
        return $this;
    }
   /**
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function setOpeningHoursSpecification(?OpeningHoursSpecification $value)
    {
        $this->setProperty('openingHoursSpecification', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOpeningHoursSpecification()
    {
       return $this->getProperty('openingHoursSpecification');
    }

    /**
    * A URL to a map of the place.
    * @param string|array $value
    * @return $this
    */
    public function maps(?string $value)
    {
        $this->setProperty('maps', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMaps(?string $value)
    {
        $this->setProperty('maps', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMaps()
    {
       return $this->getProperty('maps');
    }

    /**
    * Upcoming or past events associated with this place or organization.
    * @param Event|array $value
    * @return $this
    */
    public function events(?Event $value)
    {
        $this->setProperty('events', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setEvents(?Event $value)
    {
        $this->setProperty('events', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEvents()
    {
       return $this->getProperty('events');
    }

    /**
    * A photograph of this place.
    * @param ImageObject|Photograph|array $value
    * @return $this
    */
    public function photo($value)
    {
        $this->setProperty('photo', $value);
        return $this;
    }
   /**
    * @param ImageObject|Photograph|array $value
    * @return $this
    */
    public function setPhoto($value)
    {
        $this->setProperty('photo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPhoto()
    {
       return $this->getProperty('photo');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
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
    * @return $this|string|array
    */
    public function getGeoOverlaps()
    {
       return $this->getProperty('geoOverlaps');
    }

    /**
    * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
    * @param bool|array $value
    * @return $this
    */
    public function smokingAllowed(?bool $value)
    {
        $this->setProperty('smokingAllowed', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setSmokingAllowed(?bool $value)
    {
        $this->setProperty('smokingAllowed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSmokingAllowed()
    {
       return $this->getProperty('smokingAllowed');
    }

    /**
    * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @param string|array $value
    * @return $this
    */
    public function globalLocationNumber(?string $value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setGlobalLocationNumber(?string $value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGlobalLocationNumber()
    {
       return $this->getProperty('globalLocationNumber');
    }

    /**
    * Review of the item.
    * @param Review|array $value
    * @return $this
    */
    public function reviews(?Review $value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }
   /**
    * @param Review|array $value
    * @return $this
    */
    public function setReviews(?Review $value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReviews()
    {
       return $this->getProperty('reviews');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
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
    * @return $this|string|array
    */
    public function getGeoCrosses()
    {
       return $this->getProperty('geoCrosses');
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating|array $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
   /**
    * @param AggregateRating|array $value
    * @return $this
    */
    public function setAggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
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
    * @return $this|string|array
    */
    public function getPhotos()
    {
       return $this->getProperty('photos');
    }

    /**
    * A URL to a map of the place.
    * @param string|array $value
    * @return $this
    */
    public function map(?string $value)
    {
        $this->setProperty('map', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMap(?string $value)
    {
        $this->setProperty('map', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMap()
    {
       return $this->getProperty('map');
    }

    /**
    * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.<br/><br/>

For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
    * @param string|array $value
    * @return $this
    */
    public function branchCode(?string $value)
    {
        $this->setProperty('branchCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBranchCode(?string $value)
    {
        $this->setProperty('branchCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBranchCode()
    {
       return $this->getProperty('branchCode');
    }

    /**
    * A URL to a map of the place.
    * @param Map|string|array $value
    * @return $this
    */
    public function hasMap($value)
    {
        $this->setProperty('hasMap', $value);
        return $this;
    }
   /**
    * @param Map|string|array $value
    * @return $this
    */
    public function setHasMap($value)
    {
        $this->setProperty('hasMap', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasMap()
    {
       return $this->getProperty('hasMap');
    }

    /**
    * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
    * @param PropertyValue|array $value
    * @return $this
    */
    public function additionalProperty(?PropertyValue $value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }
   /**
    * @param PropertyValue|array $value
    * @return $this
    */
    public function setAdditionalProperty(?PropertyValue $value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAdditionalProperty()
    {
       return $this->getProperty('additionalProperty');
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
    * @return $this|string|array
    */
    public function getAddress()
    {
       return $this->getProperty('address');
    }

    /**
    * The special opening hours of a certain place.<br/><br/>

Use this to explicitly override general opening hours brought in scope by <a class="localLink" href="http://schema.org/openingHoursSpecification">openingHoursSpecification</a> or <a class="localLink" href="http://schema.org/openingHours">openingHours</a>.
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function specialOpeningHoursSpecification(?OpeningHoursSpecification $value)
    {
        $this->setProperty('specialOpeningHoursSpecification', $value);
        return $this;
    }
   /**
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function setSpecialOpeningHoursSpecification(?OpeningHoursSpecification $value)
    {
        $this->setProperty('specialOpeningHoursSpecification', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSpecialOpeningHoursSpecification()
    {
       return $this->getProperty('specialOpeningHoursSpecification');
    }

    /**
    * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
    * @param LocationFeatureSpecification|array $value
    * @return $this
    */
    public function amenityFeature(?LocationFeatureSpecification $value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }
   /**
    * @param LocationFeatureSpecification|array $value
    * @return $this
    */
    public function setAmenityFeature(?LocationFeatureSpecification $value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAmenityFeature()
    {
       return $this->getProperty('amenityFeature');
    }

    /**
    * An associated logo.
    * @param ImageObject|string|array $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }
   /**
    * @param ImageObject|string|array $value
    * @return $this
    */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLogo()
    {
       return $this->getProperty('logo');
    }

    /**
    * The telephone number.
    * @param string|array $value
    * @return $this
    */
    public function telephone(?string $value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTelephone(?string $value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTelephone()
    {
       return $this->getProperty('telephone');
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
    * @return $this|string|array
    */
    public function getGeo()
    {
       return $this->getProperty('geo');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
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
    * @return $this|string|array
    */
    public function getGeoCovers()
    {
       return $this->getProperty('geoCovers');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>. "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship)
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
    * @return $this|string|array
    */
    public function getGeoEquals()
    {
       return $this->getProperty('geoEquals');
    }

    /**
    * The basic containment relation between a place and one that contains it.
    * @param Place|array $value
    * @return $this
    */
    public function containedInPlace(?Place $value)
    {
        $this->setProperty('containedInPlace', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setContainedInPlace(?Place $value)
    {
        $this->setProperty('containedInPlace', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContainedInPlace()
    {
       return $this->getProperty('containedInPlace');
    }

    /**
    * A review of the item.
    * @param Review|array $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
   /**
    * @param Review|array $value
    * @return $this
    */
    public function setReview(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }

    /**
    * Upcoming or past event associated with this place, organization, or action.
    * @param Event|array $value
    * @return $this
    */
    public function event(?Event $value)
    {
        $this->setProperty('event', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setEvent(?Event $value)
    {
        $this->setProperty('event', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) touch: they have at least one boundary point in common, but no interior points." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a> )
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
    * @return $this|string|array
    */
    public function getGeoTouches()
    {
       return $this->getProperty('geoTouches');
    }

    /**
    * The basic containment relation between a place and another that it contains.
    * @param Place|array $value
    * @return $this
    */
    public function containsPlace(?Place $value)
    {
        $this->setProperty('containsPlace', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setContainsPlace(?Place $value)
    {
        $this->setProperty('containsPlace', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContainsPlace()
    {
       return $this->getProperty('containsPlace');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param GeospatialGeometry|Place|array $value
    * @return $this
    */
    public function geoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array $value
    * @return $this
    */
    public function setGeoIntersects($value)
    {
        $this->setProperty('geoIntersects', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoIntersects()
    {
       return $this->getProperty('geoIntersects');
    }

    /**
    * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: they have no point in common. They form a set of disconnected geometries." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>)
    * @param GeospatialGeometry|Place|array $value
    * @return $this
    */
    public function geoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }
   /**
    * @param GeospatialGeometry|Place|array $value
    * @return $this
    */
    public function setGeoDisjoint($value)
    {
        $this->setProperty('geoDisjoint', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoDisjoint()
    {
       return $this->getProperty('geoDisjoint');
    }

    /**
    * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
    * @param string|array $value
    * @return $this
    */
    public function isicV4(?string $value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIsicV4(?string $value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsicV4()
    {
       return $this->getProperty('isicV4');
    }

    /**
    * A slogan or motto associated with the item.
    * @param string|array $value
    * @return $this
    */
    public function slogan(?string $value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setSlogan(?string $value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSlogan()
    {
       return $this->getProperty('slogan');
    }

    /**
    * The basic containment relation between a place and one that contains it.
    * @param Place|array $value
    * @return $this
    */
    public function containedIn(?Place $value)
    {
        $this->setProperty('containedIn', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setContainedIn(?Place $value)
    {
        $this->setProperty('containedIn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContainedIn()
    {
       return $this->getProperty('containedIn');
    }

    /**
    * The fax number.
    * @param string|array $value
    * @return $this
    */
    public function faxNumber(?string $value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFaxNumber(?string $value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
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
    public function isAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setIsAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }

    /**
    * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
    * @param Place|GeospatialGeometry|array $value
    * @return $this
    */
    public function geoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }
   /**
    * @param Place|GeospatialGeometry|array $value
    * @return $this
    */
    public function setGeoCoveredBy($value)
    {
        $this->setProperty('geoCoveredBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoCoveredBy()
    {
       return $this->getProperty('geoCoveredBy');
    }

    /**
    * A flag to signal that the <a class="localLink" href="http://schema.org/Place">Place</a> is open to public visitors.  If this property is omitted there is no assumed default boolean value
    * @param bool|array $value
    * @return $this
    */
    public function publicAccess(?bool $value)
    {
        $this->setProperty('publicAccess', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setPublicAccess(?bool $value)
    {
        $this->setProperty('publicAccess', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublicAccess()
    {
       return $this->getProperty('publicAccess');
    }

    /**
    * The total number of individuals that may attend an event or venue.
    * @param int|array $value
    * @return $this
    */
    public function maximumAttendeeCapacity(?int $value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setMaximumAttendeeCapacity(?int $value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMaximumAttendeeCapacity()
    {
       return $this->getProperty('maximumAttendeeCapacity');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Place','Thing\\Place');

