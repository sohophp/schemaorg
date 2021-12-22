<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
* An agent leaves an event / group with participants/friends at a location.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/JoinAction">JoinAction</a>: The antonym of LeaveAction.</li>
<li><a class="localLink" href="http://schema.org/UnRegisterAction">UnRegisterAction</a>: Unlike UnRegisterAction, LeaveAction implies leaving a group/team of people rather than a service.</li>
</ul>

* @see http://schema.org/LeaveAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction

*
*/
class LeaveAction extends InteractAction
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\InteractAction\\LeaveAction','Thing\\LeaveAction');

