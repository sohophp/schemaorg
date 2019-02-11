<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment\Answer;

/**
* A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.
* @see http://schema.org/Question
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Question extends CreativeWork
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
    * The number of answers this question has received.
    * @param int $value
    * @return $this
    */
    public function answerCount(?int $value)
    {
        $this->setProperty('answerCount', $value);
        return $this;
    }

    /**
    * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
    * @param ItemList|Answer $value
    * @return $this
    */
    public function acceptedAnswer($value)
    {
        $this->setProperty('acceptedAnswer', $value);
        return $this;
    }

    /**
    * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
    * @param ItemList|Answer $value
    * @return $this
    */
    public function suggestedAnswer($value)
    {
        $this->setProperty('suggestedAnswer', $value);
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

