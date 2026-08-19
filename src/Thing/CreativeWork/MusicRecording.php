<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MusicComposition;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;

/**
  * A music recording (track), usually a single song.
  * @see schema:MusicRecording
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicRecording extends CreativeWork
{


  /**
      * The playlist to which this recording belongs.
    * @param MusicPlaylist|array $value
  * @return $this
  */
  public function inPlaylist($value)
  {
  $this->setProperty('inPlaylist', $value);
  return $this;
  }

  /**
  * @param MusicPlaylist|array $value
  * @return $this
  */
  public function setInPlaylist($value)
  {
  $this->setProperty('inPlaylist', $value);
  return $this;
  }

  /**
  * @param MusicPlaylist $value
  * @return $this
  */
  public function addInPlaylist($value)
  {
  $current = $this->getProperty('inPlaylist');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inPlaylist', $current);
  return $this;
  }

  /**
  * @return MusicPlaylist|array
  */
  public function getInPlaylist()
  {
  return $this->getProperty('inPlaylist');
  }


  /**
      * The album to which this recording belongs.
    * @param MusicAlbum|array $value
  * @return $this
  */
  public function inAlbum($value)
  {
  $this->setProperty('inAlbum', $value);
  return $this;
  }

  /**
  * @param MusicAlbum|array $value
  * @return $this
  */
  public function setInAlbum($value)
  {
  $this->setProperty('inAlbum', $value);
  return $this;
  }

  /**
  * @param MusicAlbum $value
  * @return $this
  */
  public function addInAlbum($value)
  {
  $current = $this->getProperty('inAlbum');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inAlbum', $current);
  return $this;
  }

  /**
  * @return MusicAlbum|array
  */
  public function getInAlbum()
  {
  return $this->getProperty('inAlbum');
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
      * The composition this track is a recording of.
    * @param MusicComposition|array $value
  * @return $this
  */
  public function recordingOf($value)
  {
  $this->setProperty('recordingOf', $value);
  return $this;
  }

  /**
  * @param MusicComposition|array $value
  * @return $this
  */
  public function setRecordingOf($value)
  {
  $this->setProperty('recordingOf', $value);
  return $this;
  }

  /**
  * @param MusicComposition $value
  * @return $this
  */
  public function addRecordingOf($value)
  {
  $current = $this->getProperty('recordingOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recordingOf', $current);
  return $this;
  }

  /**
  * @return MusicComposition|array
  */
  public function getRecordingOf()
  {
  return $this->getProperty('recordingOf');
  }


  /**
      * The artist that performed this album or recording.
    * @param Person|MusicGroup|array $value
  * @return $this
  */
  public function byArtist($value)
  {
  $this->setProperty('byArtist', $value);
  return $this;
  }

  /**
  * @param Person|MusicGroup|array $value
  * @return $this
  */
  public function setByArtist($value)
  {
  $this->setProperty('byArtist', $value);
  return $this;
  }

  /**
  * @param Person|MusicGroup $value
  * @return $this
  */
  public function addByArtist($value)
  {
  $current = $this->getProperty('byArtist');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('byArtist', $current);
  return $this;
  }

  /**
  * @return Person|MusicGroup|array
  */
  public function getByArtist()
  {
  return $this->getProperty('byArtist');
  }


  /**
      * The International Standard Recording Code for the recording.
    * @param string|array $value
  * @return $this
  */
  public function isrcCode($value)
  {
  $this->setProperty('isrcCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setIsrcCode($value)
  {
  $this->setProperty('isrcCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addIsrcCode($value)
  {
  $current = $this->getProperty('isrcCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isrcCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getIsrcCode()
  {
  return $this->getProperty('isrcCode');
  }


}
