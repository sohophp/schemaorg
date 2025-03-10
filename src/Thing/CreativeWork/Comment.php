<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Question;

/**
* A comment on an item - for example, a comment on a blog post. The comment's
 * content is expressed via the [[text]] property, and its topic via [[about]],
 * properties shared with all CreativeWorks.
* @see http://schema.org/Comment
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Comment extends CreativeWork
{


    /**
        * The number of upvotes this question, answer or comment has received from the
 * community.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function upvoteCount($value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setUpvoteCount($value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUpvoteCount()
    {
       return $this->getProperty('upvoteCount');
    }


    /**
        * The parent of a question, answer or item in general.
        * @param Question|array|string|mixed $value
    * @return $this
    */
    public function parentItem($value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }

    /**
    * @param Question|array|string|mixed $value
    * @return $this
    */
    public function setParentItem($value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getParentItem()
    {
       return $this->getProperty('parentItem');
    }


    /**
        * The number of downvotes this question, answer or comment has received from
 * the community.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function downvoteCount($value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setDownvoteCount($value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDownvoteCount()
    {
       return $this->getProperty('downvoteCount');
    }


}
