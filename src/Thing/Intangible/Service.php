<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
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

*
*/
class Service extends Intangible
{

    /**
    * The audience eligible for this service.
    * @param Audience|array $value
    * @return $this
    */
    public function serviceAudience(?Audience $value)
    {
        $this->setProperty('serviceAudience', $value);
        return $this;
    }
   /**
    * @param Audience|array $value
    * @return $this
    */
    public function setServiceAudience(?Audience $value)
    {
        $this->setProperty('serviceAudience', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceAudience()
    {
       return $this->getProperty('serviceAudience');
    }

    /**
    * The geographic area where the service is provided.
    * @param Place|AdministrativeArea|GeoShape|array $value
    * @return $this
    */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }
   /**
    * @param Place|AdministrativeArea|GeoShape|array $value
    * @return $this
    */
    public function setServiceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceArea()
    {
       return $this->getProperty('serviceArea');
    }

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
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience|array $value
    * @return $this
    */
    public function audience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
   /**
    * @param Audience|array $value
    * @return $this
    */
    public function setAudience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }

    /**
    * Indicates an OfferCatalog listing for this Organization, Person, or Service.
    * @param OfferCatalog|array $value
    * @return $this
    */
    public function hasOfferCatalog(?OfferCatalog $value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }
   /**
    * @param OfferCatalog|array $value
    * @return $this
    */
    public function setHasOfferCatalog(?OfferCatalog $value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasOfferCatalog()
    {
       return $this->getProperty('hasOfferCatalog');
    }

    /**
    * The hours during which this service or contact is available.
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function hoursAvailable(?OpeningHoursSpecification $value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }
   /**
    * @param OpeningHoursSpecification|array $value
    * @return $this
    */
    public function setHoursAvailable(?OpeningHoursSpecification $value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHoursAvailable()
    {
       return $this->getProperty('hoursAvailable');
    }

    /**
    * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
    * @param string|array $value
    * @return $this
    */
    public function providerMobility(?string $value)
    {
        $this->setProperty('providerMobility', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setProviderMobility(?string $value)
    {
        $this->setProperty('providerMobility', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProviderMobility()
    {
       return $this->getProperty('providerMobility');
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
    * An award won by or for this item.
    * @param string|array $value
    * @return $this
    */
    public function award(?string $value)
    {
        $this->setProperty('award', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAward(?string $value)
    {
        $this->setProperty('award', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAward()
    {
       return $this->getProperty('award');
    }

    /**
    * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
   /**
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }

    /**
    * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setBroker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroker()
    {
       return $this->getProperty('broker');
    }

    /**
    * The tangible thing generated by the service, e.g. a passport, permit, etc.
    * @param Thing|array $value
    * @return $this
    */
    public function serviceOutput(?Thing $value)
    {
        $this->setProperty('serviceOutput', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setServiceOutput(?Thing $value)
    {
        $this->setProperty('serviceOutput', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceOutput()
    {
       return $this->getProperty('serviceOutput');
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
    * A pointer to another, functionally similar product (or multiple products).
    * @param Service|Product|array $value
    * @return $this
    */
    public function isSimilarTo($value)
    {
        $this->setProperty('isSimilarTo', $value);
        return $this;
    }
   /**
    * @param Service|Product|array $value
    * @return $this
    */
    public function setIsSimilarTo($value)
    {
        $this->setProperty('isSimilarTo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsSimilarTo()
    {
       return $this->getProperty('isSimilarTo');
    }

    /**
    * A pointer to another, somehow related product (or multiple products).
    * @param Product|Service|array $value
    * @return $this
    */
    public function isRelatedTo($value)
    {
        $this->setProperty('isRelatedTo', $value);
        return $this;
    }
   /**
    * @param Product|Service|array $value
    * @return $this
    */
    public function setIsRelatedTo($value)
    {
        $this->setProperty('isRelatedTo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsRelatedTo()
    {
       return $this->getProperty('isRelatedTo');
    }

    /**
    * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
    * @param ServiceChannel|array $value
    * @return $this
    */
    public function availableChannel(?ServiceChannel $value)
    {
        $this->setProperty('availableChannel', $value);
        return $this;
    }
   /**
    * @param ServiceChannel|array $value
    * @return $this
    */
    public function setAvailableChannel(?ServiceChannel $value)
    {
        $this->setProperty('availableChannel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableChannel()
    {
       return $this->getProperty('availableChannel');
    }

    /**
    * The tangible thing generated by the service, e.g. a passport, permit, etc.
    * @param Thing|array $value
    * @return $this
    */
    public function produces(?Thing $value)
    {
        $this->setProperty('produces', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setProduces(?Thing $value)
    {
        $this->setProperty('produces', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProduces()
    {
       return $this->getProperty('produces');
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
    * Human-readable terms of service documentation.
    * @param string|string|array $value
    * @return $this
    */
    public function termsOfService($value)
    {
        $this->setProperty('termsOfService', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setTermsOfService($value)
    {
        $this->setProperty('termsOfService', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTermsOfService()
    {
       return $this->getProperty('termsOfService');
    }

    /**
    * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
    * @param string|array $value
    * @return $this
    */
    public function serviceType(?string $value)
    {
        $this->setProperty('serviceType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setServiceType(?string $value)
    {
        $this->setProperty('serviceType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceType()
    {
       return $this->getProperty('serviceType');
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
    * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
    * @param Organization|Brand|array $value
    * @return $this
    */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }
   /**
    * @param Organization|Brand|array $value
    * @return $this
    */
    public function setBrand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBrand()
    {
       return $this->getProperty('brand');
    }

    /**
    * The geographic area where a service or offered item is provided.
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
   /**
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service','Thing\\Service');

