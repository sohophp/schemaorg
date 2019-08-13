<?php declare(strict_types=1);
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
    * @param string|PropertyValue $value
    * @return $this
    */
    public function exifData($value)
    {
        $this->setProperty('exifData', $value);
        return $this;
    }

    /**
    * Thumbnail image for an image or video.
    * @param ImageObject $value
    * @return $this
    */
    public function thumbnail(?ImageObject $value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }

    /**
    * Indicates whether this image is representative of the content of the page.
    * @param bool $value
    * @return $this
    */
    public function representativeOfPage(?bool $value)
    {
        $this->setProperty('representativeOfPage', $value);
        return $this;
    }

    /**
    * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a>.
    * @param string|MediaObject $value
    * @return $this
    */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MediaObject\\ImageObject','Thing\\ImageObject');

