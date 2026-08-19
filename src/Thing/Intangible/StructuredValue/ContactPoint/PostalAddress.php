<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
  * The mailing address.
  * @see schema:PostalAddress
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
*/
class PostalAddress extends ContactPoint
{


  /**
      * The region in which the locality is, and which is in the country. For
 * example, California or another appropriate first-level [Administrative
 * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country)
 * such as the Province in Italy or Region in Germany.
    * @param string|AdministrativeArea|array $value
  * @return $this
  */
  public function addressRegion($value)
  {
  $this->setProperty('addressRegion', $value);
  return $this;
  }

  /**
  * @param string|AdministrativeArea|array $value
  * @return $this
  */
  public function setAddressRegion($value)
  {
  $this->setProperty('addressRegion', $value);
  return $this;
  }

  /**
  * @param string|AdministrativeArea $value
  * @return $this
  */
  public function addAddressRegion($value)
  {
  $current = $this->getProperty('addressRegion');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('addressRegion', $current);
  return $this;
  }

  /**
  * @return string|AdministrativeArea|array
  */
  public function getAddressRegion()
  {
  return $this->getProperty('addressRegion');
  }


  /**
      * The postal code. For example, 94043.
    * @param string|array $value
  * @return $this
  */
  public function postalCode($value)
  {
  $this->setProperty('postalCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPostalCode($value)
  {
  $this->setProperty('postalCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPostalCode($value)
  {
  $current = $this->getProperty('postalCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('postalCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPostalCode()
  {
  return $this->getProperty('postalCode');
  }


  /**
      * The locality in which the street address is, and which is in the region. For
 * example, Mountain View.
    * @param string|array $value
  * @return $this
  */
  public function addressLocality($value)
  {
  $this->setProperty('addressLocality', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAddressLocality($value)
  {
  $this->setProperty('addressLocality', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAddressLocality($value)
  {
  $current = $this->getProperty('addressLocality');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('addressLocality', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAddressLocality()
  {
  return $this->getProperty('addressLocality');
  }


  /**
      * The post office box number for PO box addresses.
    * @param string|array $value
  * @return $this
  */
  public function postOfficeBoxNumber($value)
  {
  $this->setProperty('postOfficeBoxNumber', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPostOfficeBoxNumber($value)
  {
  $this->setProperty('postOfficeBoxNumber', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPostOfficeBoxNumber($value)
  {
  $current = $this->getProperty('postOfficeBoxNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('postOfficeBoxNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPostOfficeBoxNumber()
  {
  return $this->getProperty('postOfficeBoxNumber');
  }


  /**
      * The street address. For example, 1600 Amphitheatre Pkwy.
    * @param string|array $value
  * @return $this
  */
  public function streetAddress($value)
  {
  $this->setProperty('streetAddress', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setStreetAddress($value)
  {
  $this->setProperty('streetAddress', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addStreetAddress($value)
  {
  $current = $this->getProperty('streetAddress');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('streetAddress', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getStreetAddress()
  {
  return $this->getProperty('streetAddress');
  }


  /**
      * An address extension such as an apartment number, C/O or alternative name.
    * @param string|array $value
  * @return $this
  */
  public function extendedAddress($value)
  {
  $this->setProperty('extendedAddress', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setExtendedAddress($value)
  {
  $this->setProperty('extendedAddress', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addExtendedAddress($value)
  {
  $current = $this->getProperty('extendedAddress');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('extendedAddress', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getExtendedAddress()
  {
  return $this->getProperty('extendedAddress');
  }


  /**
      * The country. Recommended to be in 2-letter [ISO 3166-1
 * alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US".
 * For backward compatibility, a 3-letter [ISO 3166-1
 * alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such
 * as "SGP" or a full country name such as "Singapore" can also be used.
    * @param Country|string|array $value
  * @return $this
  */
  public function addressCountry($value)
  {
  $this->setProperty('addressCountry', $value);
  return $this;
  }

  /**
  * @param Country|string|array $value
  * @return $this
  */
  public function setAddressCountry($value)
  {
  $this->setProperty('addressCountry', $value);
  return $this;
  }

  /**
  * @param Country|string $value
  * @return $this
  */
  public function addAddressCountry($value)
  {
  $current = $this->getProperty('addressCountry');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('addressCountry', $current);
  return $this;
  }

  /**
  * @return Country|string|array
  */
  public function getAddressCountry()
  {
  return $this->getProperty('addressCountry');
  }


}
