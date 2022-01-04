<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;

/**
* A review of an item - for example, of a restaurant, movie, or store.
* @see http://schema.org/Review
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Review extends CreativeWork
{

    /**
    * The item that is being reviewed/rated.
    * @param Thing|array|string $value
    * @return $this
    * @deprecated use setItemReviewed
    */
    public function itemReviewed($value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }
   /**
    * @param Thing|array|string $value
    * @return $this
    */
    public function setItemReviewed($value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getItemReviewed()
    {
       return $this->getProperty('itemReviewed');
    }

    /**
    * The rating given in this review. Note that reviews can themselves be rated. The <code>reviewRating</code> applies to rating given by the review. The <a class="localLink" href="http://schema.org/aggregateRating">aggregateRating</a> property applies to the review itself, as a creative work.
    * @param Rating|array|string $value
    * @return $this
    * @deprecated use setReviewRating
    */
    public function reviewRating($value)
    {
        $this->setProperty('reviewRating', $value);
        return $this;
    }
   /**
    * @param Rating|array|string $value
    * @return $this
    */
    public function setReviewRating($value)
    {
        $this->setProperty('reviewRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReviewRating()
    {
       return $this->getProperty('reviewRating');
    }

    /**
    * The actual body of the review.
    * @param string|array $value
    * @return $this
    * @deprecated use setReviewBody
    */
    public function reviewBody($value)
    {
        $this->setProperty('reviewBody', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setReviewBody($value)
    {
        $this->setProperty('reviewBody', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReviewBody()
    {
       return $this->getProperty('reviewBody');
    }

    /**
    * This Review or Rating is relevant to this part or facet of the itemReviewed.
    * @param string|array $value
    * @return $this
    * @deprecated use setReviewAspect
    */
    public function reviewAspect($value)
    {
        $this->setProperty('reviewAspect', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setReviewAspect($value)
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
