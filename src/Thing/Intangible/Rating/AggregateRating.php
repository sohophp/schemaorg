<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Rating;

use Sohophp\SchemaOrg\Thing\Intangible\Rating;

/**
* The average rating based on multiple ratings or reviews.
* @see schema:AggregateRating
* @package Sohophp\SchemaOrg\Thing\Intangible\Rating
*/
class AggregateRating extends Rating
{
   /**
        * The count of total number of ratings.
        */
    protected $ratingCount = null;

   /**
        * The count of total number of reviews.
        */
    protected $reviewCount = null;

   /**
        * The item that is being reviewed/rated.
        */
    protected $itemReviewed = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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


}
