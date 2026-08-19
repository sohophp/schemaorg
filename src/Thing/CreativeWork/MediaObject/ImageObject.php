<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

/**
  * An image file.
  * @see schema:ImageObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class ImageObject extends MediaObject
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
      * exif data for this object.
    * @param PropertyValue|string|array $value
  * @return $this
  */
  public function exifData($value)
  {
  $this->setProperty('exifData', $value);
  return $this;
  }

  /**
  * @param PropertyValue|string|array $value
  * @return $this
  */
  public function setExifData($value)
  {
  $this->setProperty('exifData', $value);
  return $this;
  }

  /**
  * @param PropertyValue|string $value
  * @return $this
  */
  public function addExifData($value)
  {
  $current = $this->getProperty('exifData');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('exifData', $current);
  return $this;
  }

  /**
  * @return PropertyValue|string|array
  */
  public function getExifData()
  {
  return $this->getProperty('exifData');
  }


  /**
      * Indicates whether this image is representative of the content of the page.
    * @param bool|array $value
  * @return $this
  */
  public function representativeOfPage($value)
  {
  $this->setProperty('representativeOfPage', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setRepresentativeOfPage($value)
  {
  $this->setProperty('representativeOfPage', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addRepresentativeOfPage($value)
  {
  $current = $this->getProperty('representativeOfPage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('representativeOfPage', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getRepresentativeOfPage()
  {
  return $this->getProperty('representativeOfPage');
  }


}
