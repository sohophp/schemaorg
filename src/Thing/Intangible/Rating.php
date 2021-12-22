<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
* @see http://schema.org/Rating
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Rating extends Intangible
{

    /**
    * The rating for the content.<br/><br/>

Usage guidelines:<br/><br/>

<ul>
<li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
<li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
</ul>

    * @param string|array $value
    * @return $this
    */
    public function ratingValue(?string $value)
    {
        $this->setProperty('ratingValue', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setRatingValue(?string $value)
    {
        $this->setProperty('ratingValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRatingValue()
    {
       return $this->getProperty('ratingValue');
    }

    /**
    * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
    * @param string|array $value
    * @return $this
    */
    public function bestRating(?string $value)
    {
        $this->setProperty('bestRating', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBestRating(?string $value)
    {
        $this->setProperty('bestRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBestRating()
    {
       return $this->getProperty('bestRating');
    }

    /**
    * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
    * @param string|array $value
    * @return $this
    */
    public function worstRating(?string $value)
    {
        $this->setProperty('worstRating', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setWorstRating(?string $value)
    {
        $this->setProperty('worstRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorstRating()
    {
       return $this->getProperty('worstRating');
    }

    /**
    * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function author($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setAuthor($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAuthor()
    {
       return $this->getProperty('author');
    }

    /**
    * A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in the rating. This is particularly applicable to ratings associated with "fact check" markup using <a class="localLink" href="http://schema.org/ClaimReview">ClaimReview</a>.
    * @param string|array $value
    * @return $this
    */
    public function ratingExplanation(?string $value)
    {
        $this->setProperty('ratingExplanation', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setRatingExplanation(?string $value)
    {
        $this->setProperty('ratingExplanation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRatingExplanation()
    {
       return $this->getProperty('ratingExplanation');
    }

    /**
    * This Review or Rating is relevant to this part or facet of the itemReviewed.
    * @param string|array $value
    * @return $this
    */
    public function reviewAspect(?string $value)
    {
        $this->setProperty('reviewAspect', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setReviewAspect(?string $value)
    {
        $this->setProperty('reviewAspect', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReviewAspect()
    {
       return $this->getProperty('reviewAspect');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Rating','Thing\\Rating');

