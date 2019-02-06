<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\ServiceChannel;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;
/**
* A service provided by an organization, e.g. delivery service, print services, etc.
* @see http://schema.org/Service
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Service extends Intangible
{

     
     /**
     * The geographic area where the service is provided.
     * @param AdministrativeArea|GeoShape|Place $value
     * @return $this
     */

     public function serviceArea( $value):self
     {
        $this->setProperty("serviceArea",$value);
        return $this;
     }

     
     /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @param Organization|Person $value
     * @return $this
     */

     public function provider( $value):self
     {
        $this->setProperty("provider",$value);
        return $this;
     }

     
     /**
     * The audience eligible for this service.
     * @param Audience $value
     * @return $this
     */

     public function serviceAudience(?Audience $value):self
     {
        $this->setProperty("serviceAudience",$value);
        return $this;
     }

     
     /**
     * The geographic area where a service or offered item is provided.
     * @param AdministrativeArea|string|Place|GeoShape $value
     * @return $this
     */

     public function areaServed( $value):self
     {
        $this->setProperty("areaServed",$value);
        return $this;
     }

     
     /**
     * An intended audience, i.e. a group for whom something was created.
     * @param Audience $value
     * @return $this
     */

     public function audience(?Audience $value):self
     {
        $this->setProperty("audience",$value);
        return $this;
     }

     
     /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     * @param OfferCatalog $value
     * @return $this
     */

     public function hasOfferCatalog(?OfferCatalog $value):self
     {
        $this->setProperty("hasOfferCatalog",$value);
        return $this;
     }

     
     /**
     * The hours during which this service or contact is available.
     * @param OpeningHoursSpecification $value
     * @return $this
     */

     public function hoursAvailable(?OpeningHoursSpecification $value):self
     {
        $this->setProperty("hoursAvailable",$value);
        return $this;
     }

     
     /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     * @param string $value
     * @return $this
     */

     public function providerMobility(?string $value):self
     {
        $this->setProperty("providerMobility",$value);
        return $this;
     }

     
     /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @param AggregateRating $value
     * @return $this
     */

     public function aggregateRating(?AggregateRating $value):self
     {
        $this->setProperty("aggregateRating",$value);
        return $this;
     }

     
     /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     * @param Offer $value
     * @return $this
     */

     public function offers(?Offer $value):self
     {
        $this->setProperty("offers",$value);
        return $this;
     }

     
     /**
     * An award won by or for this item.
     * @param string $value
     * @return $this
     */

     public function award(?string $value):self
     {
        $this->setProperty("award",$value);
        return $this;
     }

     
     /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @param string|Thing $value
     * @return $this
     */

     public function category( $value):self
     {
        $this->setProperty("category",$value);
        return $this;
     }

     
     /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     * @param Organization|Person $value
     * @return $this
     */

     public function broker( $value):self
     {
        $this->setProperty("broker",$value);
        return $this;
     }

     
     /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * @param Thing $value
     * @return $this
     */

     public function serviceOutput(?Thing $value):self
     {
        $this->setProperty("serviceOutput",$value);
        return $this;
     }

     
     /**
     * An associated logo.
     * @param string|ImageObject $value
     * @return $this
     */

     public function logo( $value):self
     {
        $this->setProperty("logo",$value);
        return $this;
     }

     
     /**
     * A pointer to another, functionally similar product (or multiple products).
     * @param Service|Product $value
     * @return $this
     */

     public function isSimilarTo( $value):self
     {
        $this->setProperty("isSimilarTo",$value);
        return $this;
     }

     
     /**
     * A pointer to another, somehow related product (or multiple products).
     * @param Product|Service $value
     * @return $this
     */

     public function isRelatedTo( $value):self
     {
        $this->setProperty("isRelatedTo",$value);
        return $this;
     }

     
     /**
     * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
     * @param ServiceChannel $value
     * @return $this
     */

     public function availableChannel(?ServiceChannel $value):self
     {
        $this->setProperty("availableChannel",$value);
        return $this;
     }

     
     /**
     * A review of the item.
     * @param Review $value
     * @return $this
     */

     public function review(?Review $value):self
     {
        $this->setProperty("review",$value);
        return $this;
     }

     
     /**
     * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
     * @param string $value
     * @return $this
     */

     public function serviceType(?string $value):self
     {
        $this->setProperty("serviceType",$value);
        return $this;
     }

     
     /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * @param Thing $value
     * @return $this
     */

     public function produces(?Thing $value):self
     {
        $this->setProperty("produces",$value);
        return $this;
     }

     
     /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @param Organization|Brand $value
     * @return $this
     */

     public function brand( $value):self
     {
        $this->setProperty("brand",$value);
        return $this;
     }

     
}

