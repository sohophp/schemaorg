<?php
namespace Sohophp\SchemaOrg\Thing\Event\UserInteraction;

use Sohophp\SchemaOrg\Thing\Event\UserInteraction;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
* UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use <a class="localLink" href="http://schema.org/Action">Action</a>-based vocabulary, alongside types such as <a class="localLink" href="http://schema.org/Comment">Comment</a>.
* @see http://schema.org/UserComments
* @package Sohophp\SchemaOrg\Thing\Event\UserInteraction

*
*/
class UserComments extends UserInteraction
{

    /**
    * The text of the UserComment.
    * @param string|array $value
    * @return $this
    */
    public function commentText(?string $value)
    {
        $this->setProperty('commentText', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCommentText(?string $value)
    {
        $this->setProperty('commentText', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCommentText()
    {
       return $this->getProperty('commentText');
    }

    /**
    * Specifies the CreativeWork associated with the UserComment.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function discusses(?CreativeWork $value)
    {
        $this->setProperty('discusses', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setDiscusses(?CreativeWork $value)
    {
        $this->setProperty('discusses', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiscusses()
    {
       return $this->getProperty('discusses');
    }

    /**
    * The time at which the UserComment was made.
    * @param |array $value
    * @return $this
    */
    public function commentTime($value)
    {
        $this->setProperty('commentTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setCommentTime($value)
    {
        $this->setProperty('commentTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCommentTime()
    {
       return $this->getProperty('commentTime');
    }

    /**
    * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function creator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setCreator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCreator()
    {
       return $this->getProperty('creator');
    }

    /**
    * The URL at which a reply may be posted to the specified UserComment.
    * @param string|array $value
    * @return $this
    */
    public function replyToUrl(?string $value)
    {
        $this->setProperty('replyToUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setReplyToUrl(?string $value)
    {
        $this->setProperty('replyToUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReplyToUrl()
    {
       return $this->getProperty('replyToUrl');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\UserInteraction\\UserComments','Thing\\UserComments');

