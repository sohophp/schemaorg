<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;

/**
* A review of an item - for example, of a restaurant, movie, or store.
* @see http://schema.org/Review
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Review extends CreativeWork
{


    /**
        * The item that is being reviewed/rated.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function itemReviewed($value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function setItemReviewed($value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemReviewed()
    {
       return $this->getProperty('itemReviewed');
    }


    /**
        * The rating given in this review. Note that reviews can themselves be rated.
 * The ```reviewRating``` applies to rating given by the review. The
 * [[aggregateRating]] property applies to the review itself, as a creative
 * work.
        * @param Rating|array|string|mixed $value
    * @return $this
    */
    public function reviewRating($value)
    {
        $this->setProperty('reviewRating', $value);
        return $this;
    }

    /**
    * @param Rating|array|string|mixed $value
    * @return $this
    */
    public function setReviewRating($value)
    {
        $this->setProperty('reviewRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviewRating()
    {
       return $this->getProperty('reviewRating');
    }


    /**
        * The actual body of the review.
        * @param string|array|mixed $value
    * @return $this
    */
    public function reviewBody($value)
    {
        $this->setProperty('reviewBody', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setReviewBody($value)
    {
        $this->setProperty('reviewBody', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviewBody()
    {
       return $this->getProperty('reviewBody');
    }


    /**
        * This Review or Rating is relevant to this part or facet of the itemReviewed.
        * @param string|array|mixed $value
    * @return $this
    */
    public function reviewAspect($value)
    {
        $this->setProperty('reviewAspect', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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


}
