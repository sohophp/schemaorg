<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

/**
* A specific question - e.g. from a user seeking answers online, or collected
 * in a Frequently Asked Questions (FAQ) document.
* @see schema:Question
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Comment
*/
class Question extends Comment
{


    /**
        * The number of answers this question has received.
        * @param array|string|mixed $value
    * @return $this
    */
    public function answerCount($value)
    {
        $this->setProperty('answerCount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAnswerCount($value)
    {
        $this->setProperty('answerCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAnswerCount()
    {
       return $this->getProperty('answerCount');
    }


    /**
        * An answer (possibly one of several, possibly incorrect) to a Question, e.g.
 * on a Question/Answer site.
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedAnswer($value)
    {
        $this->setProperty('suggestedAnswer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedAnswer($value)
    {
        $this->setProperty('suggestedAnswer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedAnswer()
    {
       return $this->getProperty('suggestedAnswer');
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
        * The answer(s) that has been accepted as best, typically on a Question/Answer
 * site. Sites vary in their selection mechanisms, e.g. drawing on community
 * opinion and/or the view of the Question author.
        * @param array|string|mixed $value
    * @return $this
    */
    public function acceptedAnswer($value)
    {
        $this->setProperty('acceptedAnswer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAcceptedAnswer($value)
    {
        $this->setProperty('acceptedAnswer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAcceptedAnswer()
    {
       return $this->getProperty('acceptedAnswer');
    }


    /**
        * For questions that are part of learning resources (e.g. Quiz),
 * eduQuestionType indicates the format of question being given. Example:
 * "Multiple choice", "Open ended", "Flashcard".
        * @param array|string|mixed $value
    * @return $this
    */
    public function eduQuestionType($value)
    {
        $this->setProperty('eduQuestionType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEduQuestionType($value)
    {
        $this->setProperty('eduQuestionType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEduQuestionType()
    {
       return $this->getProperty('eduQuestionType');
    }


}
