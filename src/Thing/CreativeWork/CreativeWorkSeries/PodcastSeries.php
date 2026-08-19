<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset\DataFeed;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;

/**
 * A podcast is an episodic series of digital audio or video files which a user can download and listen to.
 * @see https://schema.org/PodcastSeries
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries
 */
class PodcastSeries extends CreativeWorkSeries
{
    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
     * @see https://schema.org/webFeed
     * @param string|DataFeed|array $value
     * @return $this
     */
    public function webFeed($value)
    {
        $this->setProperty('webFeed', $value);
        return $this;
    }

    /**
     * @param string|DataFeed|array $value
     * @return $this
     */
    public function setWebFeed($value)
    {
        $this->setProperty('webFeed', $value);
        return $this;
    }

    /**
     * @param string|DataFeed $value
     * @return $this
     */
    public function addWebFeed($value)
    {
        $current = $this->getProperty('webFeed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('webFeed', $current);
        return $this;
    }

    /**
     * @return string|DataFeed|array
     */
    public function getWebFeed()
    {
        return $this->getProperty('webFeed');
    }
    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/actor
     * @param Person|PerformingGroup|array $value
     * @return $this
     */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
     * @param Person|PerformingGroup|array $value
     * @return $this
     */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
     * @param Person|PerformingGroup $value
     * @return $this
     */
    public function addActor($value)
    {
        $current = $this->getProperty('actor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actor', $current);
        return $this;
    }

    /**
     * @return Person|PerformingGroup|array
     */
    public function getActor()
    {
        return $this->getProperty('actor');
    }
}
