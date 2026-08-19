<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\Language;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ContactPointOption;
  use Sohophp\SchemaOrg\Thing\Product;

/**
  * A contact point&#x2014;for example, a Customer Complaints department.
  * @see schema:ContactPoint
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ContactPoint extends StructuredValue
{


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
      * A language someone may use with or at the item, service or place. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
    * @param string|Language|array $value
  * @return $this
  */
  public function availableLanguage($value)
  {
  $this->setProperty('availableLanguage', $value);
  return $this;
  }

  /**
  * @param string|Language|array $value
  * @return $this
  */
  public function setAvailableLanguage($value)
  {
  $this->setProperty('availableLanguage', $value);
  return $this;
  }

  /**
  * @param string|Language $value
  * @return $this
  */
  public function addAvailableLanguage($value)
  {
  $current = $this->getProperty('availableLanguage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('availableLanguage', $current);
  return $this;
  }

  /**
  * @return string|Language|array
  */
  public function getAvailableLanguage()
  {
  return $this->getProperty('availableLanguage');
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
      * Email address.
    * @param string|array $value
  * @return $this
  */
  public function email($value)
  {
  $this->setProperty('email', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setEmail($value)
  {
  $this->setProperty('email', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addEmail($value)
  {
  $current = $this->getProperty('email');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('email', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getEmail()
  {
  return $this->getProperty('email');
  }


  /**
      * An option available on this contact point (e.g. a toll-free number or support
 * for hearing-impaired callers).
    * @param ContactPointOption|array $value
  * @return $this
  */
  public function contactOption($value)
  {
  $this->setProperty('contactOption', $value);
  return $this;
  }

  /**
  * @param ContactPointOption|array $value
  * @return $this
  */
  public function setContactOption($value)
  {
  $this->setProperty('contactOption', $value);
  return $this;
  }

  /**
  * @param ContactPointOption $value
  * @return $this
  */
  public function addContactOption($value)
  {
  $current = $this->getProperty('contactOption');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('contactOption', $current);
  return $this;
  }

  /**
  * @return ContactPointOption|array
  */
  public function getContactOption()
  {
  return $this->getProperty('contactOption');
  }


  /**
      * A person or organization can have different contact points, for different
 * purposes. For example, a sales contact point, a PR contact point and so on.
 * This property is used to specify the kind of contact point.
    * @param string|array $value
  * @return $this
  */
  public function contactType($value)
  {
  $this->setProperty('contactType', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setContactType($value)
  {
  $this->setProperty('contactType', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addContactType($value)
  {
  $current = $this->getProperty('contactType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('contactType', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getContactType()
  {
  return $this->getProperty('contactType');
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
      * The product or service this support contact point is related to (such as
 * product support for a particular product line). This can be a specific
 * product or product line (e.g. "iPhone") or a general category of products or
 * services (e.g. "smartphones").
    * @param string|Product|array $value
  * @return $this
  */
  public function productSupported($value)
  {
  $this->setProperty('productSupported', $value);
  return $this;
  }

  /**
  * @param string|Product|array $value
  * @return $this
  */
  public function setProductSupported($value)
  {
  $this->setProperty('productSupported', $value);
  return $this;
  }

  /**
  * @param string|Product $value
  * @return $this
  */
  public function addProductSupported($value)
  {
  $current = $this->getProperty('productSupported');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('productSupported', $current);
  return $this;
  }

  /**
  * @return string|Product|array
  */
  public function getProductSupported()
  {
  return $this->getProperty('productSupported');
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


}
