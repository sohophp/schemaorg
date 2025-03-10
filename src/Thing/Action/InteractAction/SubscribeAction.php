<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;

/**
* The act of forming a personal connection with someone/something (object)
 * unidirectionally/asymmetrically to get updates pushed to.
 * 
 * Related actions:
 * 
 * * [[FollowAction]]: Unlike FollowAction, SubscribeAction implies that the
 * subscriber acts as a passive agent being constantly/actively pushed for
 * updates.
 * * [[RegisterAction]]: Unlike RegisterAction, SubscribeAction implies that the
 * agent is interested in continuing receiving updates from the object.
 * * [[JoinAction]]: Unlike JoinAction, SubscribeAction implies that the agent
 * is interested in continuing receiving updates from the object.
* @see http://schema.org/SubscribeAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class SubscribeAction extends InteractAction
{


}
