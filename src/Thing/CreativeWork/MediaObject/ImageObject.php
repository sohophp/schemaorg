<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

/**
* An image file.
* @see http://schema.org/ImageObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject

*
*/
class ImageObject extends MediaObject
{

    /**
    * exif data for this object.
    * @param string|PropertyValue|array $value
    * @return $this
    */
    public function exifData($value)
    {
        $this->setProperty('exifData', $value);
        return $this;
    }
   /**
    * @param string|PropertyValue|array $value
    * @return $this
    */
    public function setExifData($value)
    {
        $this->setProperty('exifData', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExifData()
    {
       return $this->getProperty('exifData');
    }

    /**
    * Thumbnail image for an image or video.
    * @param ImageObject|array $value
    * @return $this
    */
    public function thumbnail(?ImageObject $value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }
   /**
    * @param ImageObject|array $value
    * @return $this
    */
    public function setThumbnail(?ImageObject $value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getThumbnail()
    {
       return $this->getProperty('thumbnail');
    }

    /**
    * Indicates whether this image is representative of the content of the page.
    * @param bool|array $value
    * @return $this
    */
    public function representativeOfPage(?bool $value)
    {
        $this->setProperty('representativeOfPage', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setRepresentativeOfPage(?bool $value)
    {
        $this->setProperty('representativeOfPage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRepresentativeOfPage()
    {
       return $this->getProperty('representativeOfPage');
    }

    /**
    * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a>.
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
    * @return $this|string|array
    */
    public function getCaption()
    {
       return $this->getProperty('caption');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MediaObject\\ImageObject','Thing\\ImageObject');

