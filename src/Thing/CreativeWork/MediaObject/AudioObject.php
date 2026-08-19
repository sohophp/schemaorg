<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
  * An audio file.
  * @see schema:AudioObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class AudioObject extends MediaObject
{


  /**
      * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
    * @param string|array $value
  * @return $this
  */
  public function embeddedTextCaption($value)
  {
  $this->setProperty('embeddedTextCaption', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setEmbeddedTextCaption($value)
  {
  $this->setProperty('embeddedTextCaption', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addEmbeddedTextCaption($value)
  {
  $current = $this->getProperty('embeddedTextCaption');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('embeddedTextCaption', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getEmbeddedTextCaption()
  {
  return $this->getProperty('embeddedTextCaption');
  }


  /**
      * The caption for this object. For downloadable machine formats (closed
 * caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
    * @param string|MediaObject|array $value
  * @return $this
  */
  public function caption($value)
  {
  $this->setProperty('caption', $value);
  return $this;
  }

  /**
  * @param string|MediaObject|array $value
  * @return $this
  */
  public function setCaption($value)
  {
  $this->setProperty('caption', $value);
  return $this;
  }

  /**
  * @param string|MediaObject $value
  * @return $this
  */
  public function addCaption($value)
  {
  $current = $this->getProperty('caption');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('caption', $current);
  return $this;
  }

  /**
  * @return string|MediaObject|array
  */
  public function getCaption()
  {
  return $this->getProperty('caption');
  }


  /**
      * If this MediaObject is an AudioObject or VideoObject, the transcript of that
 * object.
    * @param string|array $value
  * @return $this
  */
  public function transcript($value)
  {
  $this->setProperty('transcript', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTranscript($value)
  {
  $this->setProperty('transcript', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTranscript($value)
  {
  $current = $this->getProperty('transcript');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('transcript', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTranscript()
  {
  return $this->getProperty('transcript');
  }


}
