<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment\Answer;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;

/**
* A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.
* @see http://schema.org/Question
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Question extends CreativeWork
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
    * The number of answers this question has received.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setAnswerCount
    */
    public function answerCount($value)
    {
        $this->setProperty('answerCount', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setAnswerCount($value)
    {
        $this->setProperty('answerCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAnswerCount()
    {
       return $this->getProperty('answerCount');
    }

    /**
    * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
    * @param Answer|ItemList|array|string $value
    * @return $this
    * @deprecated use setSuggestedAnswer
    */
    public function suggestedAnswer($value)
    {
        $this->setProperty('suggestedAnswer', $value);
        return $this;
    }
   /**
    * @param Answer|ItemList|array|string $value
    * @return $this
    */
    public function setSuggestedAnswer($value)
    {
        $this->setProperty('suggestedAnswer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuggestedAnswer()
    {
       return $this->getProperty('suggestedAnswer');
    }

    /**
    * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
    * @param ItemList|Answer|array|string $value
    * @return $this
    * @deprecated use setAcceptedAnswer
    */
    public function acceptedAnswer($value)
    {
        $this->setProperty('acceptedAnswer', $value);
        return $this;
    }
   /**
    * @param ItemList|Answer|array|string $value
    * @return $this
    */
    public function setAcceptedAnswer($value)
    {
        $this->setProperty('acceptedAnswer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAcceptedAnswer()
    {
       return $this->getProperty('acceptedAnswer');
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
