<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\Event;
/**
* The act of asking someone to attend an event. Reciprocal of RsvpAction.
* @see http://schema.org/InviteAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class InviteAction extends CommunicateAction
{

     
     /**
     * Upcoming or past event associated with this place, organization, or action.
     * @param Event $value
     * @return $this
     */

     public function event(?Event $value):self
     {
        $this->setProperty("event",$value);
        return $this;
     }

     
}

