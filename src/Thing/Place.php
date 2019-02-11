<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Photograph;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\CreativeWork\Map;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;

/**
* Entities that have a somewhat fixed, physical extension.
* @see http://schema.org/Place
* @package Sohophp\SchemaOrg\Thing
*/
class Place extends Thing
{

    /**
    * A photograph of this place.
    * @param ImageObject|Photograph $value
    * @return $this
    */
    public function photo($value)
    {
        $this->setProperty('photo', $value);
        return $this;
    }

    /**
    * Physical address of the item.
    * @param PostalAddress|string $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * The opening hours of a certain place.
    * @param OpeningHoursSpecification $value
    * @return $this
    */
    public function openingHoursSpecification(?OpeningHoursSpecification $value)
    {
        $this->setProperty('openingHoursSpecification', $value);
        return $this;
    }

    /**
    * A URL to a map of the place.
    * @param string $value
    * @return $this
    */
    public function maps(?string $value)
    {
        $this->setProperty('maps', $value);
        return $this;
    }

    /**
    * The fax number.
    * @param string $value
    * @return $this
    */
    public function faxNumber(?string $value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
    * @param bool $value
    * @return $this
    */
    public function smokingAllowed(?bool $value)
    {
        $this->setProperty('smokingAllowed', $value);
        return $this;
    }

    /**
    * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @param string $value
    * @return $this
    */
    public function globalLocationNumber(?string $value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }

    /**
    * The total number of individuals that may attend an event or venue.
    * @param int $value
    * @return $this
    */
    public function maximumAttendeeCapacity(?int $value)
    {
        $this->setProperty('maximumAttendeeCapacity', $value);
        return $this;
    }

    /**
    * Review of the item.
    * @param Review $value
    * @return $this
    */
    public function reviews(?Review $value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * Photographs of this place.
    * @param ImageObject|Photograph $value
    * @return $this
    */
    public function photos($value)
    {
        $this->setProperty('photos', $value);
        return $this;
    }

    /**
    * A URL to a map of the place.
    * @param string $value
    * @return $this
    */
    public function map(?string $value)
    {
        $this->setProperty('map', $value);
        return $this;
    }

    /**
    * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.<br/><br/>

For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
    * @param string $value
    * @return $this
    */
    public function branchCode(?string $value)
    {
        $this->setProperty('branchCode', $value);
        return $this;
    }

    /**
    * A URL to a map of the place.
    * @param string|Map $value
    * @return $this
    */
    public function hasMap($value)
    {
        $this->setProperty('hasMap', $value);
        return $this;
    }

    /**
    * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
    * @param PropertyValue $value
    * @return $this
    */
    public function additionalProperty(?PropertyValue $value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * Upcoming or past events associated with this place or organization.
    * @param Event $value
    * @return $this
    */
    public function events(?Event $value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
    * The special opening hours of a certain place.<br/><br/>

Use this to explicitly override general opening hours brought in scope by <a class="localLink" href="http://schema.org/openingHoursSpecification">openingHoursSpecification</a> or <a class="localLink" href="http://schema.org/openingHours">openingHours</a>.
    * @param OpeningHoursSpecification $value
    * @return $this
    */
    public function specialOpeningHoursSpecification(?OpeningHoursSpecification $value)
    {
        $this->setProperty('specialOpeningHoursSpecification', $value);
        return $this;
    }

    /**
    * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
    * @param LocationFeatureSpecification $value
    * @return $this
    */
    public function amenityFeature(?LocationFeatureSpecification $value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * An associated logo.
    * @param string|ImageObject $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * The telephone number.
    * @param string $value
    * @return $this
    */
    public function telephone(?string $value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * The geo coordinates of the place.
    * @param GeoCoordinates|GeoShape $value
    * @return $this
    */
    public function geo($value)
    {
        $this->setProperty('geo', $value);
        return $this;
    }

    /**
    * The basic containment relation between a place and one that contains it.
    * @param Place $value
    * @return $this
    */
    public function containedInPlace(?Place $value)
    {
        $this->setProperty('containedInPlace', $value);
        return $this;
    }

    /**
    * A review of the item.
    * @param Review $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * The basic containment relation between a place and one that contains it.
    * @param Place $value
    * @return $this
    */
    public function containedIn(?Place $value)
    {
        $this->setProperty('containedIn', $value);
        return $this;
    }

    /**
    * Upcoming or past event associated with this place, organization, or action.
    * @param Event $value
    * @return $this
    */
    public function event(?Event $value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * The basic containment relation between a place and another that it contains.
    * @param Place $value
    * @return $this
    */
    public function containsPlace(?Place $value)
    {
        $this->setProperty('containsPlace', $value);
        return $this;
    }

    /**
    * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
    * @param string $value
    * @return $this
    */
    public function isicV4(?string $value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool $value
    * @return $this
    */
    public function isAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * A flag to signal that the <a class="localLink" href="http://schema.org/Place">Place</a> is open to public visitors.  If this property is omitted there is no assumed default boolean value
    * @param bool $value
    * @return $this
    */
    public function publicAccess(?bool $value)
    {
        $this->setProperty('publicAccess', $value);
        return $this;
    }


}

