<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

/**
 * A [[LiveBlogPosting]] is a [[BlogPosting]] intended to provide a rolling textual coverage of an ongoing event through continuous updates.
 * @see https://schema.org/LiveBlogPosting
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting
 */
class LiveBlogPosting extends BlogPosting
{
    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     * @see https://schema.org/coverageEndTime
     * @param mixed $value
     * @return $this
     */
    public function coverageEndTime($value)
    {
        $this->setProperty('coverageEndTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setCoverageEndTime($value)
    {
        $this->setProperty('coverageEndTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addCoverageEndTime($value)
    {
        $current = $this->getProperty('coverageEndTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('coverageEndTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoverageEndTime()
    {
        return $this->getProperty('coverageEndTime');
    }
    /**
     * An update to the LiveBlog.
     * @see https://schema.org/liveBlogUpdate
     * @param BlogPosting|array $value
     * @return $this
     */
    public function liveBlogUpdate($value)
    {
        $this->setProperty('liveBlogUpdate', $value);
        return $this;
    }

    /**
     * @param BlogPosting|array $value
     * @return $this
     */
    public function setLiveBlogUpdate($value)
    {
        $this->setProperty('liveBlogUpdate', $value);
        return $this;
    }

    /**
     * @param BlogPosting $value
     * @return $this
     */
    public function addLiveBlogUpdate($value)
    {
        $current = $this->getProperty('liveBlogUpdate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('liveBlogUpdate', $current);
        return $this;
    }

    /**
     * @return BlogPosting|array
     */
    public function getLiveBlogUpdate()
    {
        return $this->getProperty('liveBlogUpdate');
    }
    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
     * @see https://schema.org/coverageStartTime
     * @param mixed $value
     * @return $this
     */
    public function coverageStartTime($value)
    {
        $this->setProperty('coverageStartTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setCoverageStartTime($value)
    {
        $this->setProperty('coverageStartTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addCoverageStartTime($value)
    {
        $current = $this->getProperty('coverageStartTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('coverageStartTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoverageStartTime()
    {
        return $this->getProperty('coverageStartTime');
    }
}
