<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
* The act of asking someone to attend an event. Reciprocal of RsvpAction.
* @see http://schema.org/InviteAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction

*
*/
class InviteAction extends CommunicateAction
{

    /**
    * Upcoming or past event associated with this place, organization, or action.
    * @param Event|array $value
    * @return $this
    */
    public function event(?Event $value)
    {
        $this->setProperty('event', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setEvent(?Event $value)
    {
        $this->setProperty('event', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\InteractAction\\CommunicateAction\\InviteAction','Thing\\InviteAction');

