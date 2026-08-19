<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\ServiceChannel;
  use Sohophp\SchemaOrg\Thing\Product;
  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
  use Sohophp\SchemaOrg\Certification;
  use Sohophp\SchemaOrg\Thing\Intangible\Offer;
  use Sohophp\SchemaOrg\Thing\Intangible\Demand;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
  use Sohophp\SchemaOrg\Thing\Intangible\Brand;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GovernmentBenefitsType;

/**
  * A service provided by an organization, e.g. delivery service, print services,
 * etc.
  * @see schema:Service
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Service extends Intangible
{


  /**
      * The hours during which this service or contact is available.
    * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function hoursAvailable($value)
  {
  $this->setProperty('hoursAvailable', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function setHoursAvailable($value)
  {
  $this->setProperty('hoursAvailable', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification $value
  * @return $this
  */
  public function addHoursAvailable($value)
  {
  $current = $this->getProperty('hoursAvailable');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hoursAvailable', $current);
  return $this;
  }

  /**
  * @return OpeningHoursSpecification|array
  */
  public function getHoursAvailable()
  {
  return $this->getProperty('hoursAvailable');
  }


  /**
      * A means of accessing the service (e.g. a phone bank, a web site, a location,
 * etc.).
    * @param ServiceChannel|array $value
  * @return $this
  */
  public function availableChannel($value)
  {
  $this->setProperty('availableChannel', $value);
  return $this;
  }

  /**
  * @param ServiceChannel|array $value
  * @return $this
  */
  public function setAvailableChannel($value)
  {
  $this->setProperty('availableChannel', $value);
  return $this;
  }

  /**
  * @param ServiceChannel $value
  * @return $this
  */
  public function addAvailableChannel($value)
  {
  $current = $this->getProperty('availableChannel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('availableChannel', $current);
  return $this;
  }

  /**
  * @return ServiceChannel|array
  */
  public function getAvailableChannel()
  {
  return $this->getProperty('availableChannel');
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
  * @param Service|Product $value
  * @return $this
  */
  public function addIsSimilarTo($value)
  {
  $current = $this->getProperty('isSimilarTo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isSimilarTo', $current);
  return $this;
  }

  /**
  * @return Service|Product|array
  */
  public function getIsSimilarTo()
  {
  return $this->getProperty('isSimilarTo');
  }


  /**
      * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
    * @param string|array $value
  * @return $this
  */
  public function providerMobility($value)
  {
  $this->setProperty('providerMobility', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setProviderMobility($value)
  {
  $this->setProperty('providerMobility', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addProviderMobility($value)
  {
  $current = $this->getProperty('providerMobility');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('providerMobility', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getProviderMobility()
  {
  return $this->getProperty('providerMobility');
  }


  /**
      * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
    * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
  * @return $this
  */
  public function category($value)
  {
  $this->setProperty('category', $value);
  return $this;
  }

  /**
  * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
  * @return $this
  */
  public function setCategory($value)
  {
  $this->setProperty('category', $value);
  return $this;
  }

  /**
  * @param string|Thing|PhysicalActivityCategory|CategoryCode $value
  * @return $this
  */
  public function addCategory($value)
  {
  $current = $this->getProperty('category');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('category', $current);
  return $this;
  }

  /**
  * @return string|Thing|PhysicalActivityCategory|CategoryCode|array
  */
  public function getCategory()
  {
  return $this->getProperty('category');
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
      * The tangible thing generated by the service, e.g. a passport, permit, etc.
    * @param Thing|array $value
  * @return $this
  */
  public function produces($value)
  {
  $this->setProperty('produces', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setProduces($value)
  {
  $this->setProperty('produces', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addProduces($value)
  {
  $current = $this->getProperty('produces');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('produces', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getProduces()
  {
  return $this->getProperty('produces');
  }


  /**
      * The geographic area where the service is provided.
    * @param GeoShape|AdministrativeArea|Place|array $value
  * @return $this
  */
  public function serviceArea($value)
  {
  $this->setProperty('serviceArea', $value);
  return $this;
  }

  /**
  * @param GeoShape|AdministrativeArea|Place|array $value
  * @return $this
  */
  public function setServiceArea($value)
  {
  $this->setProperty('serviceArea', $value);
  return $this;
  }

  /**
  * @param GeoShape|AdministrativeArea|Place $value
  * @return $this
  */
  public function addServiceArea($value)
  {
  $current = $this->getProperty('serviceArea');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('serviceArea', $current);
  return $this;
  }

  /**
  * @return GeoShape|AdministrativeArea|Place|array
  */
  public function getServiceArea()
  {
  return $this->getProperty('serviceArea');
  }


  /**
      * The audience eligible for this service.
    * @param Audience|array $value
  * @return $this
  */
  public function serviceAudience($value)
  {
  $this->setProperty('serviceAudience', $value);
  return $this;
  }

  /**
  * @param Audience|array $value
  * @return $this
  */
  public function setServiceAudience($value)
  {
  $this->setProperty('serviceAudience', $value);
  return $this;
  }

  /**
  * @param Audience $value
  * @return $this
  */
  public function addServiceAudience($value)
  {
  $current = $this->getProperty('serviceAudience');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('serviceAudience', $current);
  return $this;
  }

  /**
  * @return Audience|array
  */
  public function getServiceAudience()
  {
  return $this->getProperty('serviceAudience');
  }


  /**
      * Indicates an OfferCatalog listing for this Organization, Person, or Service.
    * @param OfferCatalog|array $value
  * @return $this
  */
  public function hasOfferCatalog($value)
  {
  $this->setProperty('hasOfferCatalog', $value);
  return $this;
  }

  /**
  * @param OfferCatalog|array $value
  * @return $this
  */
  public function setHasOfferCatalog($value)
  {
  $this->setProperty('hasOfferCatalog', $value);
  return $this;
  }

  /**
  * @param OfferCatalog $value
  * @return $this
  */
  public function addHasOfferCatalog($value)
  {
  $current = $this->getProperty('hasOfferCatalog');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasOfferCatalog', $current);
  return $this;
  }

  /**
  * @return OfferCatalog|array
  */
  public function getHasOfferCatalog()
  {
  return $this->getProperty('hasOfferCatalog');
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
      * A pointer to another, somehow related product (or multiple products).
    * @param Service|Product|array $value
  * @return $this
  */
  public function isRelatedTo($value)
  {
  $this->setProperty('isRelatedTo', $value);
  return $this;
  }

  /**
  * @param Service|Product|array $value
  * @return $this
  */
  public function setIsRelatedTo($value)
  {
  $this->setProperty('isRelatedTo', $value);
  return $this;
  }

  /**
  * @param Service|Product $value
  * @return $this
  */
  public function addIsRelatedTo($value)
  {
  $current = $this->getProperty('isRelatedTo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isRelatedTo', $current);
  return $this;
  }

  /**
  * @return Service|Product|array
  */
  public function getIsRelatedTo()
  {
  return $this->getProperty('isRelatedTo');
  }


  /**
      * The tangible thing generated by the service, e.g. a passport, permit, etc.
    * @param Thing|array $value
  * @return $this
  */
  public function serviceOutput($value)
  {
  $this->setProperty('serviceOutput', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setServiceOutput($value)
  {
  $this->setProperty('serviceOutput', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addServiceOutput($value)
  {
  $current = $this->getProperty('serviceOutput');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('serviceOutput', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getServiceOutput()
  {
  return $this->getProperty('serviceOutput');
  }


  /**
      * An entity that arranges for an exchange between a buyer and a seller.  In
 * most cases a broker never acquires or releases ownership of a product or
 * service involved in an exchange.  If it is not clear whether an entity is a
 * broker, seller, or buyer, the latter two terms are preferred.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function broker($value)
  {
  $this->setProperty('broker', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setBroker($value)
  {
  $this->setProperty('broker', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addBroker($value)
  {
  $current = $this->getProperty('broker');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broker', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getBroker()
  {
  return $this->getProperty('broker');
  }


  /**
      * An intended audience, i.e. a group for whom something was created.
    * @param Audience|array $value
  * @return $this
  */
  public function audience($value)
  {
  $this->setProperty('audience', $value);
  return $this;
  }

  /**
  * @param Audience|array $value
  * @return $this
  */
  public function setAudience($value)
  {
  $this->setProperty('audience', $value);
  return $this;
  }

  /**
  * @param Audience $value
  * @return $this
  */
  public function addAudience($value)
  {
  $current = $this->getProperty('audience');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('audience', $current);
  return $this;
  }

  /**
  * @return Audience|array
  */
  public function getAudience()
  {
  return $this->getProperty('audience');
  }


  /**
      * The brand(s) associated with a product or service, or the brand(s) maintained
 * by an organization or business person.
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
  * @param Organization|Brand $value
  * @return $this
  */
  public function addBrand($value)
  {
  $current = $this->getProperty('brand');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('brand', $current);
  return $this;
  }

  /**
  * @return Organization|Brand|array
  */
  public function getBrand()
  {
  return $this->getProperty('brand');
  }


  /**
      * An award won by or for this item.
    * @param string|array $value
  * @return $this
  */
  public function award($value)
  {
  $this->setProperty('award', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAward($value)
  {
  $this->setProperty('award', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAward($value)
  {
  $current = $this->getProperty('award');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('award', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAward()
  {
  return $this->getProperty('award');
  }


  /**
      * Human-readable terms of service documentation.
    * @param string|array $value
  * @return $this
  */
  public function termsOfService($value)
  {
  $this->setProperty('termsOfService', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTermsOfService($value)
  {
  $this->setProperty('termsOfService', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTermsOfService($value)
  {
  $current = $this->getProperty('termsOfService');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('termsOfService', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTermsOfService()
  {
  return $this->getProperty('termsOfService');
  }


  /**
      * The geographic area where a service or offered item is provided.
    * @param GeoShape|AdministrativeArea|Place|string|array $value
  * @return $this
  */
  public function areaServed($value)
  {
  $this->setProperty('areaServed', $value);
  return $this;
  }

  /**
  * @param GeoShape|AdministrativeArea|Place|string|array $value
  * @return $this
  */
  public function setAreaServed($value)
  {
  $this->setProperty('areaServed', $value);
  return $this;
  }

  /**
  * @param GeoShape|AdministrativeArea|Place|string $value
  * @return $this
  */
  public function addAreaServed($value)
  {
  $current = $this->getProperty('areaServed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('areaServed', $current);
  return $this;
  }

  /**
  * @return GeoShape|AdministrativeArea|Place|string|array
  */
  public function getAreaServed()
  {
  return $this->getProperty('areaServed');
  }


  /**
      * The type of service being offered, e.g. veterans' benefits, emergency relief,
 * etc.
    * @param GovernmentBenefitsType|string|array $value
  * @return $this
  */
  public function serviceType($value)
  {
  $this->setProperty('serviceType', $value);
  return $this;
  }

  /**
  * @param GovernmentBenefitsType|string|array $value
  * @return $this
  */
  public function setServiceType($value)
  {
  $this->setProperty('serviceType', $value);
  return $this;
  }

  /**
  * @param GovernmentBenefitsType|string $value
  * @return $this
  */
  public function addServiceType($value)
  {
  $current = $this->getProperty('serviceType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('serviceType', $current);
  return $this;
  }

  /**
  * @return GovernmentBenefitsType|string|array
  */
  public function getServiceType()
  {
  return $this->getProperty('serviceType');
  }


}
