<?php

namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\DataType\Text;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\StruacturedData\Thing\Intangible\StructuredValue\PropertyValue;

/**
 * Class ImageObject
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
 * @see https://schema.org/ImageObject
 */
class ImageObject extends MediaObject
{
    public function __construct(?string $image)
    {
        if (!is_null($image)) {
            $this->url($image);
        }
    }

    /**
     * @param Text|string $value
     * @return $this
     */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }

    /**
     * @param PropertyValue|Text|string $value
     * @return $this
     */
    public function exifData($value)
    {
        $this->setProperty('exifData', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function representativeOfPage(bool $value)
    {
        $this->setProperty('representativeOfPage', $value);
        return $this;

    }

    /**
     * @param ImageObject $value
     * @return $this
     */
    public function thumbnail(ImageObject $value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }
}
