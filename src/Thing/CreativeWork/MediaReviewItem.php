<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* Represents an item or group of closely related items treated as a unit for
 * the sake of evaluation in a [[MediaReview]]. Authorship etc. apply to the
 * items rather than to the curation/grouping or reviewing party.
* @see schema:MediaReviewItem
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MediaReviewItem extends CreativeWork
{


    /**
        * In the context of a [[MediaReview]], indicates specific media item(s) that
 * are grouped using a [[MediaReviewItem]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function mediaItemAppearance($value)
    {
        $this->setProperty('mediaItemAppearance', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMediaItemAppearance($value)
    {
        $this->setProperty('mediaItemAppearance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMediaItemAppearance()
    {
       return $this->getProperty('mediaItemAppearance');
    }


}
