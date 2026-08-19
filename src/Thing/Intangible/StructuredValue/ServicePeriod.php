<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * ServicePeriod represents a duration with some constraints about cutoff time
 * and business days. This is used e.g. in shipping for handling times or
 * transit time.
  * @see schema:ServicePeriod
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ServicePeriod extends StructuredValue
{


  /**
      * Order cutoff time allows merchants to describe the time after which they will
 * no longer process orders received on that day. For orders processed after
 * cutoff time, one day gets added to the delivery time estimate. This property
 * is expected to be most typically used via the [[ShippingRateSettings]]
 * publication pattern. The time is indicated using the ISO-8601 Time format,
 * e.g. "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST)
 * which is 5 hours behind Coordinated Universal Time (UTC).
    * @param mixed $value
  * @return $this
  */
  public function cutoffTime($value)
  {
  $this->setProperty('cutoffTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCutoffTime($value)
  {
  $this->setProperty('cutoffTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCutoffTime($value)
  {
  $current = $this->getProperty('cutoffTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cutoffTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCutoffTime()
  {
  return $this->getProperty('cutoffTime');
  }


  /**
      * Days of the week when the merchant typically operates, indicated via opening
 * hours markup.
    * @param DayOfWeek|OpeningHoursSpecification|array $value
  * @return $this
  */
  public function businessDays($value)
  {
  $this->setProperty('businessDays', $value);
  return $this;
  }

  /**
  * @param DayOfWeek|OpeningHoursSpecification|array $value
  * @return $this
  */
  public function setBusinessDays($value)
  {
  $this->setProperty('businessDays', $value);
  return $this;
  }

  /**
  * @param DayOfWeek|OpeningHoursSpecification $value
  * @return $this
  */
  public function addBusinessDays($value)
  {
  $current = $this->getProperty('businessDays');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('businessDays', $current);
  return $this;
  }

  /**
  * @return DayOfWeek|OpeningHoursSpecification|array
  */
  public function getBusinessDays()
  {
  return $this->getProperty('businessDays');
  }


  /**
      * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param Duration|QuantitativeValue|array $value
  * @return $this
  */
  public function duration($value)
  {
  $this->setProperty('duration', $value);
  return $this;
  }

  /**
  * @param Duration|QuantitativeValue|array $value
  * @return $this
  */
  public function setDuration($value)
  {
  $this->setProperty('duration', $value);
  return $this;
  }

  /**
  * @param Duration|QuantitativeValue $value
  * @return $this
  */
  public function addDuration($value)
  {
  $current = $this->getProperty('duration');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('duration', $current);
  return $this;
  }

  /**
  * @return Duration|QuantitativeValue|array
  */
  public function getDuration()
  {
  return $this->getProperty('duration');
  }


}
