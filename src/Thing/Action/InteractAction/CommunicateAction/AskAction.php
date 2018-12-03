<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Question;

/**
 * The act of posing a question / favor to someone.<br/><br/>.
Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/ReplyAction">ReplyAction</a>: Appears generally as a response to AskAction.</li>
</ul>

 * @see http://schema.org/AskAction
 */
class AskAction extends CommunicateAction
{
    /**
     * A sub property of object. A question.
     *
     * @param Question $value
     *
     * @return $this
     */
    public function question(?Question $value): self
    {
        $this->setProperty('question', $value);

        return $this;
    }
}
