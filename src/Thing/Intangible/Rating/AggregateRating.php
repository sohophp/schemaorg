<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Rating;

use Sohophp\SchemaOrg\Thing\Intangible\Rating;
/**
* The average rating based on multiple ratings or reviews.
* @see http://schema.org/AggregateRating
* @package Sohophp\SchemaOrg\Thing\Intangible\Rating
*/
class AggregateRating extends Rating
{

     
     /**
     * The count of total number of reviews.
     * @param int $value
     * @return $this
     */

     public function reviewCount(?int $value):self
     {
        $this->setProperty("reviewCount",$value);
        return $this;
     }

     
     /**
     * The count of total number of ratings.
     * @param int $value
     * @return $this
     */

     public function ratingCount(?int $value):self
     {
        $this->setProperty("ratingCount",$value);
        return $this;
     }

     
}

