<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

  use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;
  use Sohophp\SchemaOrg\Thing\Intangible\Language;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Rating;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
  * A lodging business, such as a motel, hotel, or inn.
  * @see schema:LodgingBusiness
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class LodgingBusiness extends LocalBusiness
{


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
      * The number of rooms (excluding bathrooms and closets) of the accommodation or
 * lodging business.
 * Typical unit code(s): ROM for room or C62 for no unit. The type of room can
 * be put in the unitText property of the QuantitativeValue.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function numberOfRooms($value)
  {
  $this->setProperty('numberOfRooms', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setNumberOfRooms($value)
  {
  $this->setProperty('numberOfRooms', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addNumberOfRooms($value)
  {
  $current = $this->getProperty('numberOfRooms');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numberOfRooms', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getNumberOfRooms()
  {
  return $this->getProperty('numberOfRooms');
  }


  /**
      * An official rating for a lodging business or food establishment, e.g. from
 * national associations or standards bodies. Use the author property to
 * indicate the rating organization, e.g. as an Organization with name such as
 * (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
    * @param Rating|array $value
  * @return $this
  */
  public function starRating($value)
  {
  $this->setProperty('starRating', $value);
  return $this;
  }

  /**
  * @param Rating|array $value
  * @return $this
  */
  public function setStarRating($value)
  {
  $this->setProperty('starRating', $value);
  return $this;
  }

  /**
  * @param Rating $value
  * @return $this
  */
  public function addStarRating($value)
  {
  $current = $this->getProperty('starRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('starRating', $current);
  return $this;
  }

  /**
  * @return Rating|array
  */
  public function getStarRating()
  {
  return $this->getProperty('starRating');
  }


  /**
      * Indicates whether pets are allowed to enter the accommodation or lodging
 * business. More detailed information can be put in a text value.
    * @param string|bool|array $value
  * @return $this
  */
  public function petsAllowed($value)
  {
  $this->setProperty('petsAllowed', $value);
  return $this;
  }

  /**
  * @param string|bool|array $value
  * @return $this
  */
  public function setPetsAllowed($value)
  {
  $this->setProperty('petsAllowed', $value);
  return $this;
  }

  /**
  * @param string|bool $value
  * @return $this
  */
  public function addPetsAllowed($value)
  {
  $current = $this->getProperty('petsAllowed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('petsAllowed', $current);
  return $this;
  }

  /**
  * @return string|bool|array
  */
  public function getPetsAllowed()
  {
  return $this->getProperty('petsAllowed');
  }


  /**
      * An amenity feature (e.g. a characteristic or service) of the Accommodation.
 * This generic property does not make a statement about whether the feature is
 * included in an offer for the main accommodation or available at extra costs.
    * @param LocationFeatureSpecification|array $value
  * @return $this
  */
  public function amenityFeature($value)
  {
  $this->setProperty('amenityFeature', $value);
  return $this;
  }

  /**
  * @param LocationFeatureSpecification|array $value
  * @return $this
  */
  public function setAmenityFeature($value)
  {
  $this->setProperty('amenityFeature', $value);
  return $this;
  }

  /**
  * @param LocationFeatureSpecification $value
  * @return $this
  */
  public function addAmenityFeature($value)
  {
  $current = $this->getProperty('amenityFeature');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('amenityFeature', $current);
  return $this;
  }

  /**
  * @return LocationFeatureSpecification|array
  */
  public function getAmenityFeature()
  {
  return $this->getProperty('amenityFeature');
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
      * The latest someone may check out of a lodging establishment.
    * @param mixed $value
  * @return $this
  */
  public function checkoutTime($value)
  {
  $this->setProperty('checkoutTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCheckoutTime($value)
  {
  $this->setProperty('checkoutTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCheckoutTime($value)
  {
  $current = $this->getProperty('checkoutTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('checkoutTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCheckoutTime()
  {
  return $this->getProperty('checkoutTime');
  }


  /**
      * The earliest someone may check into a lodging establishment.
    * @param mixed $value
  * @return $this
  */
  public function checkinTime($value)
  {
  $this->setProperty('checkinTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCheckinTime($value)
  {
  $this->setProperty('checkinTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCheckinTime($value)
  {
  $current = $this->getProperty('checkinTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('checkinTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCheckinTime()
  {
  return $this->getProperty('checkinTime');
  }


}
