<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Question;

/**
* The act of posing a question / favor to someone.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/ReplyAction">ReplyAction</a>: Appears generally as a response to AskAction.</li>
</ul>

* @see http://schema.org/AskAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction

*
*/
class AskAction extends CommunicateAction
{

    /**
    * A sub property of object. A question.
    * @param Question|array|string $value
    * @return $this
    * @deprecated use setQuestion
    */
    public function question($value)
    {
        $this->setProperty('question', $value);
        return $this;
    }
   /**
    * @param Question|array|string $value
    * @return $this
    */
    public function setQuestion($value)
    {
        $this->setProperty('question', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getQuestion()
    {
       return $this->getProperty('question');
    }


}
