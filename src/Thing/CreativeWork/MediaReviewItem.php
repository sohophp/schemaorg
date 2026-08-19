<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
 * Represents an item or group of closely related items treated as a unit for the sake of evaluation in a [[MediaReview]]. Authorship etc. apply to the items rather than to the curation/grouping or reviewing party.
 * @see https://schema.org/MediaReviewItem
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class MediaReviewItem extends CreativeWork
{
    /**
     * In the context of a [[MediaReview]], indicates specific media item(s) that are grouped using a [[MediaReviewItem]].
     * @see https://schema.org/mediaItemAppearance
     * @param MediaObject|array $value
     * @return $this
     */
    public function mediaItemAppearance($value)
    {
        $this->setProperty('mediaItemAppearance', $value);
        return $this;
    }

    /**
     * @param MediaObject|array $value
     * @return $this
     */
    public function setMediaItemAppearance($value)
    {
        $this->setProperty('mediaItemAppearance', $value);
        return $this;
    }

    /**
     * @param MediaObject $value
     * @return $this
     */
    public function addMediaItemAppearance($value)
    {
        $current = $this->getProperty('mediaItemAppearance');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('mediaItemAppearance', $current);
        return $this;
    }

    /**
     * @return MediaObject|array
     */
    public function getMediaItemAppearance()
    {
        return $this->getProperty('mediaItemAppearance');
    }
}
