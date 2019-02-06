<?php

declare (strict_types=1);

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

     public function exifData( $value):self
     {
        $this->setProperty("exifData",$value);
        return $this;
     }

     
     /**
     * Indicates whether this image is representative of the content of the page.
     * @param bool $value
     * @return $this
     */

     public function representativeOfPage(?bool $value):self
     {
        $this->setProperty("representativeOfPage",$value);
        return $this;
     }

     
     /**
     * Thumbnail image for an image or video.
     * @param ImageObject $value
     * @return $this
     */

     public function thumbnail(?ImageObject $value):self
     {
        $this->setProperty("thumbnail",$value);
        return $this;
     }

     
     /**
     * The caption for this object.
     * @param string $value
     * @return $this
     */

     public function caption(?string $value):self
     {
        $this->setProperty("caption",$value);
        return $this;
     }

     
}

