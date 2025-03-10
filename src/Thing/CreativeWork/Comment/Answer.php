<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

/**
* An answer offered to a question; perhaps correct, perhaps opinionated or
 * wrong.
* @see schema:Answer
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Comment
*/
class Answer extends Comment
{


    /**
        * A step-by-step or full explanation about Answer. Can outline how this Answer
 * was achieved or contain more broad clarification or statement about it.
        * @param array|string|mixed $value
    * @return $this
    */
    public function answerExplanation($value)
    {
        $this->setProperty('answerExplanation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAnswerExplanation($value)
    {
        $this->setProperty('answerExplanation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAnswerExplanation()
    {
       return $this->getProperty('answerExplanation');
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


}
