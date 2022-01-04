<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Question;

/**
* A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the <a class="localLink" href="http://schema.org/text">text</a> property, and its topic via <a class="localLink" href="http://schema.org/about">about</a>, properties shared with all CreativeWorks.
* @see http://schema.org/Comment
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Comment extends CreativeWork
{

    /**
    * The number of upvotes this question, answer or comment has received from the community.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setUpvoteCount
    */
    public function upvoteCount($value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setUpvoteCount($value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUpvoteCount()
    {
       return $this->getProperty('upvoteCount');
    }

    /**
    * The parent of a question, answer or item in general.
    * @param Question|array|string $value
    * @return $this
    * @deprecated use setParentItem
    */
    public function parentItem($value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }
   /**
    * @param Question|array|string $value
    * @return $this
    */
    public function setParentItem($value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getParentItem()
    {
       return $this->getProperty('parentItem');
    }

    /**
    * The number of downvotes this question, answer or comment has received from the community.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setDownvoteCount
    */
    public function downvoteCount($value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setDownvoteCount($value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDownvoteCount()
    {
       return $this->getProperty('downvoteCount');
    }


}
