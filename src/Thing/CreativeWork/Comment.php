<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Question;

/**
* A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the <a class="localLink" href="http://schema.org/text">text</a> property, and its topic via <a class="localLink" href="http://schema.org/about">about</a>, properties shared with all CreativeWorks.
* @see http://schema.org/Comment
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Comment extends CreativeWork
{

    /**
    * The number of upvotes this question, answer or comment has received from the community.
    * @param int $value
    * @return $this
    */
    public function upvoteCount(?int $value)
    {
        $this->setProperty('upvoteCount', $value);
        return $this;
    }

    /**
    * The parent of a question, answer or item in general.
    * @param Question $value
    * @return $this
    */
    public function parentItem(?Question $value)
    {
        $this->setProperty('parentItem', $value);
        return $this;
    }

    /**
    * The number of downvotes this question, answer or comment has received from the community.
    * @param int $value
    * @return $this
    */
    public function downvoteCount(?int $value)
    {
        $this->setProperty('downvoteCount', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Comment','Thing\\Comment');

