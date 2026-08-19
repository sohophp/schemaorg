<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Rating;

use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing;

/**
 * The average rating based on multiple ratings or reviews.
 * @see https://schema.org/AggregateRating
 * @package Sohophp\SchemaOrg\Thing\Intangible\Rating
 */
class AggregateRating extends Rating
{
    /**
     * The count of total number of ratings.
     * @see https://schema.org/ratingCount
     * @param int|array $value
     * @return $this
     */
    public function ratingCount($value)
    {
        $this->setProperty('ratingCount', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setRatingCount($value)
    {
        $this->setProperty('ratingCount', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addRatingCount($value)
    {
        $current = $this->getProperty('ratingCount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ratingCount', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getRatingCount()
    {
        return $this->getProperty('ratingCount');
    }
    /**
     * The item that is being reviewed/rated.
     * @see https://schema.org/itemReviewed
     * @param Thing|array $value
     * @return $this
     */
    public function itemReviewed($value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setItemReviewed($value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addItemReviewed($value)
    {
        $current = $this->getProperty('itemReviewed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('itemReviewed', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getItemReviewed()
    {
        return $this->getProperty('itemReviewed');
    }
    /**
     * The count of total number of reviews.
     * @see https://schema.org/reviewCount
     * @param int|array $value
     * @return $this
     */
    public function reviewCount($value)
    {
        $this->setProperty('reviewCount', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setReviewCount($value)
    {
        $this->setProperty('reviewCount', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addReviewCount($value)
    {
        $current = $this->getProperty('reviewCount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('reviewCount', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getReviewCount()
    {
        return $this->getProperty('reviewCount');
    }
}
