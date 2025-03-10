<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
* An agent joins an event/group with participants/friends at a location.
 * 
 * Related actions:
 * 
 * * [[RegisterAction]]: Unlike RegisterAction, JoinAction refers to joining a
 * group/team of people.
 * * [[SubscribeAction]]: Unlike SubscribeAction, JoinAction does not imply that
 * you'll be receiving updates.
 * * [[FollowAction]]: Unlike FollowAction, JoinAction does not imply that
 * you'll be polling for updates.
* @see http://schema.org/JoinAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class JoinAction extends InteractAction
{


    /**
        * Upcoming or past event associated with this place, organization, or action.
        * @param Event|array|string|mixed $value
    * @return $this
    */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @param Event|array|string|mixed $value
    * @return $this
    */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }


}
