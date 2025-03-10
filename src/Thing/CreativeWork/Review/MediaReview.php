<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Review;

use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
* A [[MediaReview]] is a more specialized form of Review dedicated to the
 * evaluation of media content online, typically in the context of fact-checking
 * and misinformation.
 *     For more general reviews of media in the broader sense, use
 * [[UserReview]], [[CriticReview]] or other [[Review]] types. This definition
 * is
 *     a work in progress. While the [[MediaManipulationRatingEnumeration]] list
 * reflects significant community review amongst fact-checkers and others
 * working
 *     to combat misinformation, the specific structures for representing media
 * objects, their versions and publication context, are still evolving.
 * Similarly, best practices for the relationship between [[MediaReview]] and
 * [[ClaimReview]] markup have not yet been finalized.
* @see schema:MediaReview
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Review
*/
class MediaReview extends Review
{


    /**
        * Describes, in a [[MediaReview]] when dealing with
 * [[DecontextualizedContent]], background information that can contribute to
 * better interpretation of the [[MediaObject]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function originalMediaContextDescription($value)
    {
        $this->setProperty('originalMediaContextDescription', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOriginalMediaContextDescription($value)
    {
        $this->setProperty('originalMediaContextDescription', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOriginalMediaContextDescription()
    {
       return $this->getProperty('originalMediaContextDescription');
    }


    /**
        * Indicates a MediaManipulationRatingEnumeration classification of a media
 * object (in the context of how it was published or shared).
        * @param array|string|mixed $value
    * @return $this
    */
    public function mediaAuthenticityCategory($value)
    {
        $this->setProperty('mediaAuthenticityCategory', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMediaAuthenticityCategory($value)
    {
        $this->setProperty('mediaAuthenticityCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMediaAuthenticityCategory()
    {
       return $this->getProperty('mediaAuthenticityCategory');
    }


    /**
        * Link to the page containing an original version of the content, or directly
 * to an online copy of the original [[MediaObject]] content, e.g. video file.
        * @param array|string|mixed $value
    * @return $this
    */
    public function originalMediaLink($value)
    {
        $this->setProperty('originalMediaLink', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOriginalMediaLink($value)
    {
        $this->setProperty('originalMediaLink', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOriginalMediaLink()
    {
       return $this->getProperty('originalMediaLink');
    }


}
