<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;

/**
* The act of registering to be a user of a service, product or web page.\n\nRelated actions:\n\n* [[JoinAction]]: Unlike JoinAction, RegisterAction implies you are registering to be a user of a service, *not* a group/team of people.\n* [[FollowAction]]: Unlike FollowAction, RegisterAction doesn't imply that the agent is expecting to poll for updates from the object.\n* [[SubscribeAction]]: Unlike SubscribeAction, RegisterAction doesn't imply that the agent is expecting updates from the object.
* @see schema:RegisterAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class RegisterAction extends InteractAction
{


}
