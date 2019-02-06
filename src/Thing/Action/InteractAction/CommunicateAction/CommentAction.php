<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
/**
* The act of generating a comment about a subject.
* @see http://schema.org/CommentAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class CommentAction extends CommunicateAction
{

     
     /**
     * A sub property of result. The Comment created or sent as a result of this action.
     * @param Comment $value
     * @return $this
     */

     public function resultComment(?Comment $value):self
     {
        $this->setProperty("resultComment",$value);
        return $this;
     }

     
}

