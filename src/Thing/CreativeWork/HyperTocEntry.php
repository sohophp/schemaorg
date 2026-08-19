<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
  * A HyperToEntry is an item within a [[HyperToc]], which represents a hypertext
 * table of contents for complex media objects, such as [[VideoObject]],
 * [[AudioObject]]. The media object itself is indicated using
 * [[associatedMedia]]. Each section of interest within that content can be
 * described with a [[HyperTocEntry]], with associated [[startOffset]] and
 * [[endOffset]]. When several entries are all from the same file,
 * [[associatedMedia]] is used on the overarching [[HyperTocEntry]]; if the
 * content has been split into multiple files, they can be referenced using
 * [[associatedMedia]] on each [[HyperTocEntry]].
  * @see schema:HyperTocEntry
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HyperTocEntry extends CreativeWork
{


  /**
      * A media object that encodes this CreativeWork. This property is a synonym for
 * encoding.
    * @param MediaObject|array $value
  * @return $this
  */
  public function associatedMedia($value)
  {
  $this->setProperty('associatedMedia', $value);
  return $this;
  }

  /**
  * @param MediaObject|array $value
  * @return $this
  */
  public function setAssociatedMedia($value)
  {
  $this->setProperty('associatedMedia', $value);
  return $this;
  }

  /**
  * @param MediaObject $value
  * @return $this
  */
  public function addAssociatedMedia($value)
  {
  $current = $this->getProperty('associatedMedia');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('associatedMedia', $current);
  return $this;
  }

  /**
  * @return MediaObject|array
  */
  public function getAssociatedMedia()
  {
  return $this->getProperty('associatedMedia');
  }


  /**
      * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is
 * another [[HyperTocEntry]] that would be the default next item to play or
 * render.
    * @param HyperTocEntry|array $value
  * @return $this
  */
  public function tocContinuation($value)
  {
  $this->setProperty('tocContinuation', $value);
  return $this;
  }

  /**
  * @param HyperTocEntry|array $value
  * @return $this
  */
  public function setTocContinuation($value)
  {
  $this->setProperty('tocContinuation', $value);
  return $this;
  }

  /**
  * @param HyperTocEntry $value
  * @return $this
  */
  public function addTocContinuation($value)
  {
  $current = $this->getProperty('tocContinuation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('tocContinuation', $current);
  return $this;
  }

  /**
  * @return HyperTocEntry|array
  */
  public function getTocContinuation()
  {
  return $this->getProperty('tocContinuation');
  }


  /**
      * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain
 * section of a media object, represented as a [[HyperTocEntry]].
    * @param string|array $value
  * @return $this
  */
  public function utterances($value)
  {
  $this->setProperty('utterances', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setUtterances($value)
  {
  $this->setProperty('utterances', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addUtterances($value)
  {
  $current = $this->getProperty('utterances');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('utterances', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getUtterances()
  {
  return $this->getProperty('utterances');
  }


}
