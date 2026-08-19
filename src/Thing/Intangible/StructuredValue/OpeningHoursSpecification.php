<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;

/**
  * A structured value providing information about the opening hours of a place
 * or a certain service inside a place.
 * 
 * 
 * The place is __open__ if the [[opens]] property is specified, and __closed__
 * otherwise.
 * 
 * If the value for the [[closes]] property is less than the value for the
 * [[opens]] property then the hour range is assumed to span over the next day.
  * @see schema:OpeningHoursSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OpeningHoursSpecification extends StructuredValue
{


  /**
      * The closing hour of the place or service on the given day(s) of the week.
    * @param mixed $value
  * @return $this
  */
  public function closes($value)
  {
  $this->setProperty('closes', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCloses($value)
  {
  $this->setProperty('closes', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCloses($value)
  {
  $current = $this->getProperty('closes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('closes', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCloses()
  {
  return $this->getProperty('closes');
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
      * The day of the week for which these opening hours are valid.
    * @param DayOfWeek|array $value
  * @return $this
  */
  public function dayOfWeek($value)
  {
  $this->setProperty('dayOfWeek', $value);
  return $this;
  }

  /**
  * @param DayOfWeek|array $value
  * @return $this
  */
  public function setDayOfWeek($value)
  {
  $this->setProperty('dayOfWeek', $value);
  return $this;
  }

  /**
  * @param DayOfWeek $value
  * @return $this
  */
  public function addDayOfWeek($value)
  {
  $current = $this->getProperty('dayOfWeek');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('dayOfWeek', $current);
  return $this;
  }

  /**
  * @return DayOfWeek|array
  */
  public function getDayOfWeek()
  {
  return $this->getProperty('dayOfWeek');
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


  /**
      * The opening hour of the place or service on the given day(s) of the week.
    * @param mixed $value
  * @return $this
  */
  public function opens($value)
  {
  $this->setProperty('opens', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setOpens($value)
  {
  $this->setProperty('opens', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addOpens($value)
  {
  $current = $this->getProperty('opens');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('opens', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getOpens()
  {
  return $this->getProperty('opens');
  }


}
