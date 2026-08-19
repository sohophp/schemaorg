<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

  use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicReleaseFormatType;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * A MusicRelease is a specific release of a music album.
  * @see schema:MusicRelease
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist
*/
class MusicRelease extends MusicPlaylist
{


  /**
      * The group the release is credited to if different than the byArtist. For
 * example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady
 * Gaga.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function creditedTo($value)
  {
  $this->setProperty('creditedTo', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setCreditedTo($value)
  {
  $this->setProperty('creditedTo', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addCreditedTo($value)
  {
  $current = $this->getProperty('creditedTo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('creditedTo', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getCreditedTo()
  {
  return $this->getProperty('creditedTo');
  }


  /**
      * The album this is a release of.
    * @param MusicAlbum|array $value
  * @return $this
  */
  public function releaseOf($value)
  {
  $this->setProperty('releaseOf', $value);
  return $this;
  }

  /**
  * @param MusicAlbum|array $value
  * @return $this
  */
  public function setReleaseOf($value)
  {
  $this->setProperty('releaseOf', $value);
  return $this;
  }

  /**
  * @param MusicAlbum $value
  * @return $this
  */
  public function addReleaseOf($value)
  {
  $current = $this->getProperty('releaseOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('releaseOf', $current);
  return $this;
  }

  /**
  * @return MusicAlbum|array
  */
  public function getReleaseOf()
  {
  return $this->getProperty('releaseOf');
  }


  /**
      * Format of this release (the type of recording media used, i.e. compact disc,
 * digital media, LP, etc.).
    * @param MusicReleaseFormatType|array $value
  * @return $this
  */
  public function musicReleaseFormat($value)
  {
  $this->setProperty('musicReleaseFormat', $value);
  return $this;
  }

  /**
  * @param MusicReleaseFormatType|array $value
  * @return $this
  */
  public function setMusicReleaseFormat($value)
  {
  $this->setProperty('musicReleaseFormat', $value);
  return $this;
  }

  /**
  * @param MusicReleaseFormatType $value
  * @return $this
  */
  public function addMusicReleaseFormat($value)
  {
  $current = $this->getProperty('musicReleaseFormat');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('musicReleaseFormat', $current);
  return $this;
  }

  /**
  * @return MusicReleaseFormatType|array
  */
  public function getMusicReleaseFormat()
  {
  return $this->getProperty('musicReleaseFormat');
  }


  /**
      * The catalog number for the release.
    * @param string|array $value
  * @return $this
  */
  public function catalogNumber($value)
  {
  $this->setProperty('catalogNumber', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCatalogNumber($value)
  {
  $this->setProperty('catalogNumber', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCatalogNumber($value)
  {
  $current = $this->getProperty('catalogNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('catalogNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCatalogNumber()
  {
  return $this->getProperty('catalogNumber');
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
      * The label that issued the release.
    * @param Organization|array $value
  * @return $this
  */
  public function recordLabel($value)
  {
  $this->setProperty('recordLabel', $value);
  return $this;
  }

  /**
  * @param Organization|array $value
  * @return $this
  */
  public function setRecordLabel($value)
  {
  $this->setProperty('recordLabel', $value);
  return $this;
  }

  /**
  * @param Organization $value
  * @return $this
  */
  public function addRecordLabel($value)
  {
  $current = $this->getProperty('recordLabel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recordLabel', $current);
  return $this;
  }

  /**
  * @return Organization|array
  */
  public function getRecordLabel()
  {
  return $this->getProperty('recordLabel');
  }


}
