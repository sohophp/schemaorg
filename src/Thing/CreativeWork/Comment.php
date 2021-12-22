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
    * @param int|array $value
    * @return $this
    */
    public function upvoteCount(?int $value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setUpvoteCount(?int $value)
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
    * @param Question|array $value
    * @return $this
    */
    public function parentItem(?Question $value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }
   /**
    * @param Question|array $value
    * @return $this
    */
    public function setParentItem(?Question $value)
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
    * @param int|array $value
    * @return $this
    */
    public function downvoteCount(?int $value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setDownvoteCount(?int $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Comment','Thing\\Comment');

