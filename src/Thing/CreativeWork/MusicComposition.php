<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;
  use Sohophp\SchemaOrg\Thing\Event;

/**
  * A musical composition.
  * @see schema:MusicComposition
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicComposition extends CreativeWork
{


  /**
      * An arrangement derived from the composition.
    * @param MusicComposition|array $value
  * @return $this
  */
  public function musicArrangement($value)
  {
  $this->setProperty('musicArrangement', $value);
  return $this;
  }

  /**
  * @param MusicComposition|array $value
  * @return $this
  */
  public function setMusicArrangement($value)
  {
  $this->setProperty('musicArrangement', $value);
  return $this;
  }

  /**
  * @param MusicComposition $value
  * @return $this
  */
  public function addMusicArrangement($value)
  {
  $current = $this->getProperty('musicArrangement');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('musicArrangement', $current);
  return $this;
  }

  /**
  * @return MusicComposition|array
  */
  public function getMusicArrangement()
  {
  return $this->getProperty('musicArrangement');
  }


  /**
      * The person or organization who wrote a composition, or who is the composer of
 * a work performed at some event.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function composer($value)
  {
  $this->setProperty('composer', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setComposer($value)
  {
  $this->setProperty('composer', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addComposer($value)
  {
  $current = $this->getProperty('composer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('composer', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getComposer()
  {
  return $this->getProperty('composer');
  }


  /**
      * The person who wrote the words.
    * @param Person|array $value
  * @return $this
  */
  public function lyricist($value)
  {
  $this->setProperty('lyricist', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setLyricist($value)
  {
  $this->setProperty('lyricist', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addLyricist($value)
  {
  $current = $this->getProperty('lyricist');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('lyricist', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getLyricist()
  {
  return $this->getProperty('lyricist');
  }


  /**
      * The words in the song.
    * @param CreativeWork|array $value
  * @return $this
  */
  public function lyrics($value)
  {
  $this->setProperty('lyrics', $value);
  return $this;
  }

  /**
  * @param CreativeWork|array $value
  * @return $this
  */
  public function setLyrics($value)
  {
  $this->setProperty('lyrics', $value);
  return $this;
  }

  /**
  * @param CreativeWork $value
  * @return $this
  */
  public function addLyrics($value)
  {
  $current = $this->getProperty('lyrics');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('lyrics', $current);
  return $this;
  }

  /**
  * @return CreativeWork|array
  */
  public function getLyrics()
  {
  return $this->getProperty('lyrics');
  }


  /**
      * An audio recording of the work.
    * @param MusicRecording|array $value
  * @return $this
  */
  public function recordedAs($value)
  {
  $this->setProperty('recordedAs', $value);
  return $this;
  }

  /**
  * @param MusicRecording|array $value
  * @return $this
  */
  public function setRecordedAs($value)
  {
  $this->setProperty('recordedAs', $value);
  return $this;
  }

  /**
  * @param MusicRecording $value
  * @return $this
  */
  public function addRecordedAs($value)
  {
  $current = $this->getProperty('recordedAs');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recordedAs', $current);
  return $this;
  }

  /**
  * @return MusicRecording|array
  */
  public function getRecordedAs()
  {
  return $this->getProperty('recordedAs');
  }


  /**
      * The type of composition (e.g. overture, sonata, symphony, etc.).
    * @param string|array $value
  * @return $this
  */
  public function musicCompositionForm($value)
  {
  $this->setProperty('musicCompositionForm', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setMusicCompositionForm($value)
  {
  $this->setProperty('musicCompositionForm', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addMusicCompositionForm($value)
  {
  $current = $this->getProperty('musicCompositionForm');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('musicCompositionForm', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getMusicCompositionForm()
  {
  return $this->getProperty('musicCompositionForm');
  }


  /**
      * Smaller compositions included in this work (e.g. a movement in a symphony).
    * @param MusicComposition|array $value
  * @return $this
  */
  public function includedComposition($value)
  {
  $this->setProperty('includedComposition', $value);
  return $this;
  }

  /**
  * @param MusicComposition|array $value
  * @return $this
  */
  public function setIncludedComposition($value)
  {
  $this->setProperty('includedComposition', $value);
  return $this;
  }

  /**
  * @param MusicComposition $value
  * @return $this
  */
  public function addIncludedComposition($value)
  {
  $current = $this->getProperty('includedComposition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('includedComposition', $current);
  return $this;
  }

  /**
  * @return MusicComposition|array
  */
  public function getIncludedComposition()
  {
  return $this->getProperty('includedComposition');
  }


  /**
      * The key, mode, or scale this composition uses.
    * @param string|array $value
  * @return $this
  */
  public function musicalKey($value)
  {
  $this->setProperty('musicalKey', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setMusicalKey($value)
  {
  $this->setProperty('musicalKey', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addMusicalKey($value)
  {
  $current = $this->getProperty('musicalKey');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('musicalKey', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getMusicalKey()
  {
  return $this->getProperty('musicalKey');
  }


  /**
      * The date and place the work was first performed.
    * @param Event|array $value
  * @return $this
  */
  public function firstPerformance($value)
  {
  $this->setProperty('firstPerformance', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setFirstPerformance($value)
  {
  $this->setProperty('firstPerformance', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addFirstPerformance($value)
  {
  $current = $this->getProperty('firstPerformance');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('firstPerformance', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getFirstPerformance()
  {
  return $this->getProperty('firstPerformance');
  }


  /**
      * The International Standard Musical Work Code for the composition.
    * @param string|array $value
  * @return $this
  */
  public function iswcCode($value)
  {
  $this->setProperty('iswcCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setIswcCode($value)
  {
  $this->setProperty('iswcCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addIswcCode($value)
  {
  $current = $this->getProperty('iswcCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('iswcCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getIswcCode()
  {
  return $this->getProperty('iswcCode');
  }


}
