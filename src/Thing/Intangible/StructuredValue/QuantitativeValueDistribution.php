<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * A statistical distribution of values.
  * @see schema:QuantitativeValueDistribution
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class QuantitativeValueDistribution extends StructuredValue
{


  /**
      * The median value.
    * @param mixed $value
  * @return $this
  */
  public function median($value)
  {
  $this->setProperty('median', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setMedian($value)
  {
  $this->setProperty('median', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addMedian($value)
  {
  $current = $this->getProperty('median');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('median', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getMedian()
  {
  return $this->getProperty('median');
  }


  /**
      * The 90th percentile value.
    * @param mixed $value
  * @return $this
  */
  public function percentile90($value)
  {
  $this->setProperty('percentile90', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPercentile90($value)
  {
  $this->setProperty('percentile90', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPercentile90($value)
  {
  $current = $this->getProperty('percentile90');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('percentile90', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPercentile90()
  {
  return $this->getProperty('percentile90');
  }


  /**
      * The 25th percentile value.
    * @param mixed $value
  * @return $this
  */
  public function percentile25($value)
  {
  $this->setProperty('percentile25', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPercentile25($value)
  {
  $this->setProperty('percentile25', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPercentile25($value)
  {
  $current = $this->getProperty('percentile25');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('percentile25', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPercentile25()
  {
  return $this->getProperty('percentile25');
  }


  /**
      * The 10th percentile value.
    * @param mixed $value
  * @return $this
  */
  public function percentile10($value)
  {
  $this->setProperty('percentile10', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPercentile10($value)
  {
  $this->setProperty('percentile10', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPercentile10($value)
  {
  $current = $this->getProperty('percentile10');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('percentile10', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPercentile10()
  {
  return $this->getProperty('percentile10');
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


  /**
      * The 75th percentile value.
    * @param mixed $value
  * @return $this
  */
  public function percentile75($value)
  {
  $this->setProperty('percentile75', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPercentile75($value)
  {
  $this->setProperty('percentile75', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPercentile75($value)
  {
  $current = $this->getProperty('percentile75');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('percentile75', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPercentile75()
  {
  return $this->getProperty('percentile75');
  }


}
