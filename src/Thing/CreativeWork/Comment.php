<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the [[text]] property, and its topic via [[about]], properties shared with all CreativeWorks.
 * @see https://schema.org/Comment
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Comment extends CreativeWork
{
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
     * @see https://schema.org/sharedContent
     * @param CreativeWork|array $value
     * @return $this
     */
    public function sharedContent($value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setSharedContent($value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addSharedContent($value)
    {
        $current = $this->getProperty('sharedContent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sharedContent', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getSharedContent()
    {
        return $this->getProperty('sharedContent');
    }
    /**
     * The number of upvotes this question, answer or comment has received from the community.
     * @see https://schema.org/upvoteCount
     * @param int|array $value
     * @return $this
     */
    public function upvoteCount($value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setUpvoteCount($value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addUpvoteCount($value)
    {
        $current = $this->getProperty('upvoteCount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('upvoteCount', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getUpvoteCount()
    {
        return $this->getProperty('upvoteCount');
    }
    /**
     * The number of downvotes this question, answer or comment has received from the community.
     * @see https://schema.org/downvoteCount
     * @param int|array $value
     * @return $this
     */
    public function downvoteCount($value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setDownvoteCount($value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addDownvoteCount($value)
    {
        $current = $this->getProperty('downvoteCount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('downvoteCount', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getDownvoteCount()
    {
        return $this->getProperty('downvoteCount');
    }
    /**
     * The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about it.
     * @see https://schema.org/parentItem
     * @param CreativeWork|Comment|array $value
     * @return $this
     */
    public function parentItem($value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }

    /**
     * @param CreativeWork|Comment|array $value
     * @return $this
     */
    public function setParentItem($value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }

    /**
     * @param CreativeWork|Comment $value
     * @return $this
     */
    public function addParentItem($value)
    {
        $current = $this->getProperty('parentItem');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('parentItem', $current);
        return $this;
    }

    /**
     * @return CreativeWork|Comment|array
     */
    public function getParentItem()
    {
        return $this->getProperty('parentItem');
    }
}
