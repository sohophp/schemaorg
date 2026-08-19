<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
  * The frequency in MHz and the modulation used for a particular
 * BroadcastService.
  * @see schema:BroadcastFrequencySpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BroadcastFrequencySpecification extends Intangible
{


  /**
      * The frequency in MHz for a particular broadcast.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function broadcastFrequencyValue($value)
  {
  $this->setProperty('broadcastFrequencyValue', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setBroadcastFrequencyValue($value)
  {
  $this->setProperty('broadcastFrequencyValue', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addBroadcastFrequencyValue($value)
  {
  $current = $this->getProperty('broadcastFrequencyValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broadcastFrequencyValue', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getBroadcastFrequencyValue()
  {
  return $this->getProperty('broadcastFrequencyValue');
  }


  /**
      * The subchannel used for the broadcast.
    * @param string|array $value
  * @return $this
  */
  public function broadcastSubChannel($value)
  {
  $this->setProperty('broadcastSubChannel', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBroadcastSubChannel($value)
  {
  $this->setProperty('broadcastSubChannel', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBroadcastSubChannel($value)
  {
  $current = $this->getProperty('broadcastSubChannel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broadcastSubChannel', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBroadcastSubChannel()
  {
  return $this->getProperty('broadcastSubChannel');
  }


  /**
      * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
    * @param QualitativeValue|string|array $value
  * @return $this
  */
  public function broadcastSignalModulation($value)
  {
  $this->setProperty('broadcastSignalModulation', $value);
  return $this;
  }

  /**
  * @param QualitativeValue|string|array $value
  * @return $this
  */
  public function setBroadcastSignalModulation($value)
  {
  $this->setProperty('broadcastSignalModulation', $value);
  return $this;
  }

  /**
  * @param QualitativeValue|string $value
  * @return $this
  */
  public function addBroadcastSignalModulation($value)
  {
  $current = $this->getProperty('broadcastSignalModulation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broadcastSignalModulation', $current);
  return $this;
  }

  /**
  * @return QualitativeValue|string|array
  */
  public function getBroadcastSignalModulation()
  {
  return $this->getProperty('broadcastSignalModulation');
  }


}
