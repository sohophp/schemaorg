<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

/**
* The act of generating a comment about a subject.
* @see schema:CommentAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class CommentAction extends CommunicateAction
{


    /**
        * A sub property of result. The Comment created or sent as a result of this
 * action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function resultComment($value)
    {
        $this->setProperty('resultComment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
