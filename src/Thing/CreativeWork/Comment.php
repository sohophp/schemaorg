<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A comment on an item - for example, a comment on a blog post. The comment's
 * content is expressed via the [[text]] property, and its topic via [[about]],
 * properties shared with all CreativeWorks.
* @see schema:Comment
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Comment extends CreativeWork
{


    /**
        * The number of upvotes this question, answer or comment has received from the
 * community.
        * @param array|string|mixed $value
    * @return $this
    */
    public function upvoteCount($value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A CreativeWork such as an image, video, or audio clip shared as part of this
 * posting.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sharedContent($value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSharedContent($value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSharedContent()
    {
       return $this->getProperty('sharedContent');
    }


    /**
        * The parent of a question, answer or item in general. Typically used for Q/A
 * discussion threads e.g. a chain of comments with the first comment being an
 * [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from
 * something to a comment about it.
        * @param array|string|mixed $value
    * @return $this
    */
    public function parentItem($value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function downvoteCount($value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
