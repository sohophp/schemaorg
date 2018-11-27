<?php

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\DataType\Text\Url;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible;

/**
 * Class Brand
 * @package Sohophp\SchemaOrg\Thing\Intangible
 * @see https://schema.org/Brand
 */
class Brand extends Intangible
{
    /**
     * @param Rating\AggregateRating $value
     * @return $this
     */
    public function aggregateRating(Intangible\Rating\AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
     * @param ImageObject|Url|string $value
     * @return $this
     */

    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
     * @param Review $value
     * @return $this
     */
    public function review(Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

}
