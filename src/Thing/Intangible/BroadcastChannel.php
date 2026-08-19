<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\BroadcastFrequencySpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\Intangible\Service\CableOrSatelliteService;

/**
  * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
  * @see schema:BroadcastChannel
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BroadcastChannel extends Intangible
{


  /**
      * The unique address by which the BroadcastService can be identified in a
 * provider lineup. In US, this is typically a number.
    * @param string|array $value
  * @return $this
  */
  public function broadcastChannelId($value)
  {
  $this->setProperty('broadcastChannelId', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBroadcastChannelId($value)
  {
  $this->setProperty('broadcastChannelId', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBroadcastChannelId($value)
  {
  $current = $this->getProperty('broadcastChannelId');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broadcastChannelId', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBroadcastChannelId()
  {
  return $this->getProperty('broadcastChannelId');
  }


  /**
      * The type of service required to have access to the channel (e.g. Standard or
 * Premium).
    * @param string|array $value
  * @return $this
  */
  public function broadcastServiceTier($value)
  {
  $this->setProperty('broadcastServiceTier', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBroadcastServiceTier($value)
  {
  $this->setProperty('broadcastServiceTier', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBroadcastServiceTier($value)
  {
  $current = $this->getProperty('broadcastServiceTier');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broadcastServiceTier', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBroadcastServiceTier()
  {
  return $this->getProperty('broadcastServiceTier');
  }


  /**
      * The frequency used for over-the-air broadcasts. Numeric values or simple
 * ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequencies
 * of AM and FM radio channels, e.g. "87 FM".
    * @param string|BroadcastFrequencySpecification|array $value
  * @return $this
  */
  public function broadcastFrequency($value)
  {
  $this->setProperty('broadcastFrequency', $value);
  return $this;
  }

  /**
  * @param string|BroadcastFrequencySpecification|array $value
  * @return $this
  */
  public function setBroadcastFrequency($value)
  {
  $this->setProperty('broadcastFrequency', $value);
  return $this;
  }

  /**
  * @param string|BroadcastFrequencySpecification $value
  * @return $this
  */
  public function addBroadcastFrequency($value)
  {
  $current = $this->getProperty('broadcastFrequency');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broadcastFrequency', $current);
  return $this;
  }

  /**
  * @return string|BroadcastFrequencySpecification|array
  */
  public function getBroadcastFrequency()
  {
  return $this->getProperty('broadcastFrequency');
  }


  /**
      * The BroadcastService offered on this channel.
    * @param BroadcastService|array $value
  * @return $this
  */
  public function providesBroadcastService($value)
  {
  $this->setProperty('providesBroadcastService', $value);
  return $this;
  }

  /**
  * @param BroadcastService|array $value
  * @return $this
  */
  public function setProvidesBroadcastService($value)
  {
  $this->setProperty('providesBroadcastService', $value);
  return $this;
  }

  /**
  * @param BroadcastService $value
  * @return $this
  */
  public function addProvidesBroadcastService($value)
  {
  $current = $this->getProperty('providesBroadcastService');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('providesBroadcastService', $current);
  return $this;
  }

  /**
  * @return BroadcastService|array
  */
  public function getProvidesBroadcastService()
  {
  return $this->getProperty('providesBroadcastService');
  }


  /**
      * Genre of the creative work, broadcast channel or group.
    * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function genre($value)
  {
  $this->setProperty('genre', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function setGenre($value)
  {
  $this->setProperty('genre', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm $value
  * @return $this
  */
  public function addGenre($value)
  {
  $current = $this->getProperty('genre');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('genre', $current);
  return $this;
  }

  /**
  * @return string|DefinedTerm|array
  */
  public function getGenre()
  {
  return $this->getProperty('genre');
  }


  /**
      * The CableOrSatelliteService offering the channel.
    * @param CableOrSatelliteService|array $value
  * @return $this
  */
  public function inBroadcastLineup($value)
  {
  $this->setProperty('inBroadcastLineup', $value);
  return $this;
  }

  /**
  * @param CableOrSatelliteService|array $value
  * @return $this
  */
  public function setInBroadcastLineup($value)
  {
  $this->setProperty('inBroadcastLineup', $value);
  return $this;
  }

  /**
  * @param CableOrSatelliteService $value
  * @return $this
  */
  public function addInBroadcastLineup($value)
  {
  $current = $this->getProperty('inBroadcastLineup');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inBroadcastLineup', $current);
  return $this;
  }

  /**
  * @return CableOrSatelliteService|array
  */
  public function getInBroadcastLineup()
  {
  return $this->getProperty('inBroadcastLineup');
  }


}
