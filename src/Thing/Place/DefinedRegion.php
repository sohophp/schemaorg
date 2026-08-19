<?php
namespace Sohophp\SchemaOrg\Thing\Place;

  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PostalCodeRangeSpecification;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
  * A DefinedRegion is a geographic area defined by potentially arbitrary (rather
 * than political, administrative or natural geographical) criteria. Properties
 * are provided for defining a region by reference to sets of postal codes.
 * 
 * Examples: a delivery destination when shopping. Region where regional pricing
 * is configured.
 * 
 * Requirement 1:
 * Country: US
 * States: "NY", "CA"
 * 
 * Requirement 2:
 * Country: US
 * PostalCode Set: { [94000-94585], [97000, 97999], [13000, 13599]}
 * { [12345, 12345], [78945, 78945], }
 * Region = state, canton, prefecture, autonomous community...
  * @see schema:DefinedRegion
* @package Sohophp\SchemaOrg\Thing\Place
*/
class DefinedRegion extends Place
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
      * A defined range of postal codes indicated by a common textual prefix. Used
 * for non-numeric systems such as UK.
    * @param string|array $value
  * @return $this
  */
  public function postalCodePrefix($value)
  {
  $this->setProperty('postalCodePrefix', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPostalCodePrefix($value)
  {
  $this->setProperty('postalCodePrefix', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPostalCodePrefix($value)
  {
  $current = $this->getProperty('postalCodePrefix');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('postalCodePrefix', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPostalCodePrefix()
  {
  return $this->getProperty('postalCodePrefix');
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
      * A defined range of postal codes.
    * @param PostalCodeRangeSpecification|array $value
  * @return $this
  */
  public function postalCodeRange($value)
  {
  $this->setProperty('postalCodeRange', $value);
  return $this;
  }

  /**
  * @param PostalCodeRangeSpecification|array $value
  * @return $this
  */
  public function setPostalCodeRange($value)
  {
  $this->setProperty('postalCodeRange', $value);
  return $this;
  }

  /**
  * @param PostalCodeRangeSpecification $value
  * @return $this
  */
  public function addPostalCodeRange($value)
  {
  $current = $this->getProperty('postalCodeRange');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('postalCodeRange', $current);
  return $this;
  }

  /**
  * @return PostalCodeRangeSpecification|array
  */
  public function getPostalCodeRange()
  {
  return $this->getProperty('postalCodeRange');
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
