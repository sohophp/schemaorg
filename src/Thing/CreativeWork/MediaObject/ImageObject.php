<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
* An image file.
* @see schema:ImageObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class ImageObject extends MediaObject
{


    /**
        * The caption for this object. For downloadable machine formats (closed
 * caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCaption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCaption()
    {
       return $this->getProperty('caption');
    }


    /**
        * exif data for this object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function exifData($value)
    {
        $this->setProperty('exifData', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExifData($value)
    {
        $this->setProperty('exifData', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExifData()
    {
       return $this->getProperty('exifData');
    }


    /**
        * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function embeddedTextCaption($value)
    {
        $this->setProperty('embeddedTextCaption', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEmbeddedTextCaption($value)
    {
        $this->setProperty('embeddedTextCaption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmbeddedTextCaption()
    {
       return $this->getProperty('embeddedTextCaption');
    }


    /**
        * Indicates whether this image is representative of the content of the page.
        * @param array|string|mixed $value
    * @return $this
    */
    public function representativeOfPage($value)
    {
        $this->setProperty('representativeOfPage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRepresentativeOfPage($value)
    {
        $this->setProperty('representativeOfPage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRepresentativeOfPage()
    {
       return $this->getProperty('representativeOfPage');
    }


}
