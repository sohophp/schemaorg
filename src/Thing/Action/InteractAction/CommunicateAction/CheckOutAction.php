<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

/**
 * The act of an agent communicating (service provider, social media, etc) their departure of a previously reserved service (e.g. flight check-in) or place (e.g. hotel). Related actions: * [[CheckInAction]]: The antonym of CheckOutAction. * [[DepartAction]]: Unlike DepartAction, CheckOutAction implies that the agent is informing/confirming the end of a previously reserved service. * [[CancelAction]]: Unlike CancelAction, CheckOutAction implies that the agent is informing/confirming the end of a previously reserved service.
 * @see https://schema.org/CheckOutAction
 * @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
 */
class CheckOutAction extends CommunicateAction
{
}
