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
        * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
        */
    protected $caption = null;

   /**
        * exif data for this object.
        */
    protected $exifData = null;

   /**
        * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
        */
    protected $embeddedTextCaption = null;

   /**
        * Indicates whether this image is representative of the content of the page.
        */
    protected $representativeOfPage = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
