<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing;

/**
* A review of an item - for example, of a restaurant, movie, or store.
* @see http://schema.org/Review
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Review extends CreativeWork
{

    /**
    * The rating given in this review. Note that reviews can themselves be rated. The <code>reviewRating</code> applies to rating given by the review. The <a class="localLink" href="http://schema.org/aggregateRating">aggregateRating</a> property applies to the review itself, as a creative work.
    * @param Rating $value
    * @return $this
    */
    public function reviewRating(?Rating $value)
    {
        $this->setProperty('reviewRating', $value);
        return $this;
    }

    /**
    * The item that is being reviewed/rated.
    * @param Thing $value
    * @return $this
    */
    public function itemReviewed(?Thing $value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }

    /**
    * The actual body of the review.
    * @param string $value
    * @return $this
    */
    public function reviewBody(?string $value)
    {
        $this->setProperty('reviewBody', $value);
        return $this;
    }


}

