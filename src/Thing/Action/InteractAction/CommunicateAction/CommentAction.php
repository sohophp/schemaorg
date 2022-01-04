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
    * @param Comment|array|string $value
    * @return $this
    * @deprecated use setResultComment
    */
    public function resultComment($value)
    {
        $this->setProperty('resultComment', $value);
        return $this;
    }
   /**
    * @param Comment|array|string $value
    * @return $this
    */
    public function setResultComment($value)
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
