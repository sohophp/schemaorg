<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
* @see schema:Rating
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Rating extends Intangible
{
   /**
        * The rating for the content.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
        */
    protected $ratingValue = null;

   /**
        * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
        */
    protected $author = null;

   /**
        * This Review or Rating is relevant to this part or facet of the itemReviewed.
        */
    protected $reviewAspect = null;

   /**
        * The highest value allowed in this rating system.
        */
    protected $bestRating = null;

   /**
        * The lowest value allowed in this rating system.
        */
    protected $worstRating = null;

   /**
        * A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in the rating. This is particularly applicable to ratings associated with "fact check" markup using [[ClaimReview]].
        */
    protected $ratingExplanation = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setRatingValue($value)
    {
        $this->setProperty('ratingValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRatingValue()
    {
       return $this->getProperty('ratingValue');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAuthor($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAuthor()
    {
       return $this->getProperty('author');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReviewAspect($value)
    {
        $this->setProperty('reviewAspect', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviewAspect()
    {
       return $this->getProperty('reviewAspect');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBestRating($value)
    {
        $this->setProperty('bestRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBestRating()
    {
       return $this->getProperty('bestRating');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWorstRating($value)
    {
        $this->setProperty('worstRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorstRating()
    {
       return $this->getProperty('worstRating');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRatingExplanation($value)
    {
        $this->setProperty('ratingExplanation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRatingExplanation()
    {
       return $this->getProperty('ratingExplanation');
    }


}
