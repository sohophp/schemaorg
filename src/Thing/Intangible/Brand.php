<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
* A brand is a name used by an organization or business person for labeling a product, product group, or similar.
* @see http://schema.org/Brand
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Brand extends Intangible
{

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * An associated logo.
    * @param string|ImageObject $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * A review of the item.
    * @param Review $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }


}

