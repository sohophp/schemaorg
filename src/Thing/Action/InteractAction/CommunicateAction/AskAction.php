<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

/**
* The act of posing a question / favor to someone.\n\nRelated actions:\n\n* [[ReplyAction]]: Appears generally as a response to AskAction.
* @see schema:AskAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class AskAction extends CommunicateAction
{
   /**
        * A sub property of object. A question.
        */
    protected $question = null;


    /**
    * @param array|string $value
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
