<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;

/**
* The act of forming a personal connection with someone/something (object)
 * unidirectionally/asymmetrically to get updates polled from.
 * 
 * Related actions:
 * 
 * * [[BefriendAction]]: Unlike BefriendAction, FollowAction implies that the
 * connection is *not* necessarily reciprocal.
 * * [[SubscribeAction]]: Unlike SubscribeAction, FollowAction implies that the
 * follower acts as an active agent constantly/actively polling for updates.
 * * [[RegisterAction]]: Unlike RegisterAction, FollowAction implies that the
 * agent is interested in continuing receiving updates from the object.
 * * [[JoinAction]]: Unlike JoinAction, FollowAction implies that the agent is
 * interested in getting updates from the object.
 * * [[TrackAction]]: Unlike TrackAction, FollowAction refers to the polling of
 * updates of all aspects of animate objects rather than the location of
 * inanimate objects (e.g. you track a package, but you don't follow it).
* @see schema:FollowAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class FollowAction extends InteractAction
{


    /**
        * A sub property of object. The person or organization being followed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function followee($value)
    {
        $this->setProperty('followee', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFollowee($value)
    {
        $this->setProperty('followee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFollowee()
    {
       return $this->getProperty('followee');
    }


}
