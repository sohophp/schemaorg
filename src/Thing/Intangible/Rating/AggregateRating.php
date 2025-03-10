<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Rating;

use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing;

/**
* The average rating based on multiple ratings or reviews.
* @see http://schema.org/AggregateRating
* @package Sohophp\SchemaOrg\Thing\Intangible\Rating
*/
class AggregateRating extends Rating
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
        * The count of total number of reviews.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function reviewCount($value)
    {
        $this->setProperty('reviewCount', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setReviewCount($value)
    {
        $this->setProperty('reviewCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviewCount()
    {
       return $this->getProperty('reviewCount');
    }


    /**
        * The count of total number of ratings.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function ratingCount($value)
    {
        $this->setProperty('ratingCount', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setRatingCount($value)
    {
        $this->setProperty('ratingCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRatingCount()
    {
       return $this->getProperty('ratingCount');
    }


}
