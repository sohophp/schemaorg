<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;

/**
  * Specifies a location feature by providing a structured value representing a
 * feature of an accommodation as a property-value pair of varying degrees of
 * formality.
  * @see schema:LocationFeatureSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue
*/
class LocationFeatureSpecification extends PropertyValue
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
      * The date after when the item is not valid. For example the end of an offer,
 * salary period, or a period of opening hours.
    * @param mixed $value
  * @return $this
  */
  public function validThrough($value)
  {
  $this->setProperty('validThrough', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setValidThrough($value)
  {
  $this->setProperty('validThrough', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addValidThrough($value)
  {
  $current = $this->getProperty('validThrough');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('validThrough', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getValidThrough()
  {
  return $this->getProperty('validThrough');
  }


  /**
      * The date when the item becomes valid.
    * @param mixed $value
  * @return $this
  */
  public function validFrom($value)
  {
  $this->setProperty('validFrom', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setValidFrom($value)
  {
  $this->setProperty('validFrom', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addValidFrom($value)
  {
  $current = $this->getProperty('validFrom');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('validFrom', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getValidFrom()
  {
  return $this->getProperty('validFrom');
  }


}
