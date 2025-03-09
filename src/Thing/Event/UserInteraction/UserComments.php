<?php
namespace Sohophp\SchemaOrg\Thing\Event\UserInteraction;

use Sohophp\SchemaOrg\Thing\Event\UserInteraction;

/**
* UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use [[Action]]-based vocabulary, alongside types such as [[Comment]].
* @see schema:UserComments
* @package Sohophp\SchemaOrg\Thing\Event\UserInteraction
*/
class UserComments extends UserInteraction
{
   /**
        * The time at which the UserComment was made.
        */
    protected $commentTime = null;

   /**
        * The text of the UserComment.
        */
    protected $commentText = null;

   /**
        * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
        */
    protected $creator = null;

   /**
        * Specifies the CreativeWork associated with the UserComment.
        */
    protected $discusses = null;

   /**
        * The URL at which a reply may be posted to the specified UserComment.
        */
    protected $replyToUrl = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setCommentTime($value)
    {
        $this->setProperty('commentTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCommentTime()
    {
       return $this->getProperty('commentTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCommentText($value)
    {
        $this->setProperty('commentText', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCommentText()
    {
       return $this->getProperty('commentText');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCreator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCreator()
    {
       return $this->getProperty('creator');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiscusses($value)
    {
        $this->setProperty('discusses', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiscusses()
    {
       return $this->getProperty('discusses');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReplyToUrl($value)
    {
        $this->setProperty('replyToUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReplyToUrl()
    {
       return $this->getProperty('replyToUrl');
    }


}
