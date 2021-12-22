<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

/**
* The act of generating a comment about a subject.
* @see http://schema.org/CommentAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction

*
*/
class CommentAction extends CommunicateAction
{

    /**
    * A sub property of result. The Comment created or sent as a result of this action.
    * @param Comment|array $value
    * @return $this
    */
    public function resultComment(?Comment $value)
    {
        $this->setProperty('resultComment', $value);
        return $this;
    }
   /**
    * @param Comment|array $value
    * @return $this
    */
    public function setResultComment(?Comment $value)
    {
        $this->setProperty('resultComment', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getResultComment()
    {
       return $this->getProperty('resultComment');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\InteractAction\\CommunicateAction\\CommentAction','Thing\\CommentAction');

