<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject;

  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * An audiobook.
  * @see schema:Audiobook
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject
*/
class Audiobook extends AudioObject
{


  /**
      * A person who reads (performs) the audiobook.
    * @param Person|array $value
  * @return $this
  */
  public function readBy($value)
  {
  $this->setProperty('readBy', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setReadBy($value)
  {
  $this->setProperty('readBy', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addReadBy($value)
  {
  $current = $this->getProperty('readBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('readBy', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getReadBy()
  {
  return $this->getProperty('readBy');
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
