<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
* The action that takes in a math expression and directs users to a page
 * potentially capable of solving/simplifying that expression.
* @see schema:SolveMathAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class SolveMathAction extends Action
{


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
