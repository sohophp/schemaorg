<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

/**
 * A blog post intended to provide a rolling textual coverage of an ongoing event through continuous updates.
 *
 * @see http://schema.org/LiveBlogPosting
 */
class LiveBlogPosting extends BlogPosting
{
    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function coverageStartTime(?\DateTimeInterface $value): self
    {
        $this->setProperty('coverageStartTime', $value);

        return $this;
    }

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function coverageEndTime(?\DateTimeInterface $value): self
    {
        $this->setProperty('coverageEndTime', $value);

        return $this;
    }

    /**
     * An update to the LiveBlog.
     *
     * @param BlogPosting $value
     *
     * @return $this
     */
    public function liveBlogUpdate(?BlogPosting $value): self
    {
        $this->setProperty('liveBlogUpdate', $value);

        return $this;
    }
}
