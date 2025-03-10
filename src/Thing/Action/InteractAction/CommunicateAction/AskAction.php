<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Question;

/**
* The act of posing a question / favor to someone.
 * 
 * Related actions:
 * 
 * * [[ReplyAction]]: Appears generally as a response to AskAction.
* @see http://schema.org/AskAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class AskAction extends CommunicateAction
{


    /**
        * A sub property of object. A question.
        * @param Question|array|string|mixed $value
    * @return $this
    */
    public function question($value)
    {
        $this->setProperty('question', $value);
        return $this;
    }

    /**
    * @param Question|array|string|mixed $value
    * @return $this
    */
    public function setQuestion($value)
    {
        $this->setProperty('question', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getQuestion()
    {
       return $this->getProperty('question');
    }


}
