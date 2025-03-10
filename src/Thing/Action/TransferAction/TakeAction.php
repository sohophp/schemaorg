<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;

/**
* The act of gaining ownership of an object from an origin. Reciprocal of
 * GiveAction.
 * 
 * Related actions:
 * 
 * * [[GiveAction]]: The reciprocal of TakeAction.
 * * [[ReceiveAction]]: Unlike ReceiveAction, TakeAction implies that ownership
 * has been transferred.
* @see schema:TakeAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class TakeAction extends TransferAction
{


}
