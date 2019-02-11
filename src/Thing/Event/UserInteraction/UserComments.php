<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Event\UserInteraction;

use Sohophp\SchemaOrg\Thing\Event\UserInteraction;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
* UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use <a class="localLink" href="http://schema.org/Action">Action</a>-based vocabulary, alongside types such as <a class="localLink" href="http://schema.org/Comment">Comment</a>.
* @see http://schema.org/UserComments
* @package Sohophp\SchemaOrg\Thing\Event\UserInteraction
*/
class UserComments extends UserInteraction
{

    /**
    * The text of the UserComment.
    * @param string $value
    * @return $this
    */
    public function commentText(?string $value)
    {
        $this->setProperty('commentText', $value);
        return $this;
    }

    /**
    * Specifies the CreativeWork associated with the UserComment.
    * @param CreativeWork $value
    * @return $this
    */
    public function discusses(?CreativeWork $value)
    {
        $this->setProperty('discusses', $value);
        return $this;
    }

    /**
    * The time at which the UserComment was made.
    * @param  $value
    * @return $this
    */
    public function commentTime($value)
    {
        $this->setProperty('commentTime', $value);
        return $this;
    }

    /**
    * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
    * @param Organization|Person $value
    * @return $this
    */
    public function creator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }

    /**
    * The URL at which a reply may be posted to the specified UserComment.
    * @param string $value
    * @return $this
    */
    public function replyToUrl(?string $value)
    {
        $this->setProperty('replyToUrl', $value);
        return $this;
    }


}

