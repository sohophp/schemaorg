<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

/**
* The act of responding to a question/message asked/sent by the object. Related to <a class="localLink" href="http://schema.org/AskAction">AskAction</a><br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/AskAction">AskAction</a>: Appears generally as an origin of a ReplyAction.</li>
</ul>

* @see http://schema.org/ReplyAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction

*
*/
class ReplyAction extends CommunicateAction
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
