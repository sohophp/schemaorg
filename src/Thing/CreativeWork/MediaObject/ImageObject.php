<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

/**
* An image file.
* @see http://schema.org/ImageObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class ImageObject extends MediaObject
{


    /**
        * exif data for this object.
        * @param string|PropertyValue|array|mixed $value
    * @return $this
    */
    public function exifData($value)
    {
        $this->setProperty('exifData', $value);
        return $this;
    }

    /**
    * @param string|PropertyValue|array|mixed $value
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
        * Thumbnail image for an image or video.
        * @param ImageObject|array|string|mixed $value
    * @return $this
    */
    public function thumbnail($value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }

    /**
    * @param ImageObject|array|string|mixed $value
    * @return $this
    */
    public function setThumbnail($value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getThumbnail()
    {
       return $this->getProperty('thumbnail');
    }


    /**
        * Indicates whether this image is representative of the content of the page.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function representativeOfPage($value)
    {
        $this->setProperty('representativeOfPage', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
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


    /**
        * The caption for this object. For downloadable machine formats (closed
 * caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
        * @param string|MediaObject|array|mixed $value
    * @return $this
    */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }

    /**
    * @param string|MediaObject|array|mixed $value
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


}
