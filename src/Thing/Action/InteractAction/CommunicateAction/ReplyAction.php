<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

/**
* The act of responding to a question/message asked/sent by the object. Related
 * to [[AskAction]]
 * 
 * Related actions:
 * 
 * * [[AskAction]]: Appears generally as an origin of a ReplyAction.
* @see http://schema.org/ReplyAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class ReplyAction extends CommunicateAction
{


    /**
        * A sub property of result. The Comment created or sent as a result of this
 * action.
        * @param Comment|array|string|mixed $value
    * @return $this
    */
    public function resultComment($value)
    {
        $this->setProperty('resultComment', $value);
        return $this;
    }

    /**
    * @param Comment|array|string|mixed $value
    * @return $this
    */
    public function setResultComment($value)
    {
        $this->setProperty('resultComment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getResultComment()
    {
       return $this->getProperty('resultComment');
    }


}
