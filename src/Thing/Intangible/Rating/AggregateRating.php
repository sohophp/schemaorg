<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Rating;

use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing;

/**
* The average rating based on multiple ratings or reviews.
* @see http://schema.org/AggregateRating
* @package Sohophp\SchemaOrg\Thing\Intangible\Rating

*
*/
class AggregateRating extends Rating
{

    /**
    * The item that is being reviewed/rated.
    * @param Thing|array $value
    * @return $this
    */
    public function itemReviewed(?Thing $value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setItemReviewed(?Thing $value)
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
    * The count of total number of reviews.
    * @param int|array $value
    * @return $this
    */
    public function reviewCount(?int $value)
    {
        $this->setProperty('reviewCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setReviewCount(?int $value)
    {
        $this->setProperty('reviewCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReviewCount()
    {
       return $this->getProperty('reviewCount');
    }

    /**
    * The count of total number of ratings.
    * @param int|array $value
    * @return $this
    */
    public function ratingCount(?int $value)
    {
        $this->setProperty('ratingCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setRatingCount(?int $value)
    {
        $this->setProperty('ratingCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRatingCount()
    {
       return $this->getProperty('ratingCount');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Rating\\AggregateRating','Thing\\AggregateRating');

