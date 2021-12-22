<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;

/**
* The act of gaining ownership of an object from an origin. Reciprocal of GiveAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/GiveAction">GiveAction</a>: The reciprocal of TakeAction.</li>
<li><a class="localLink" href="http://schema.org/ReceiveAction">ReceiveAction</a>: Unlike ReceiveAction, TakeAction implies that ownership has been transfered.</li>
</ul>

* @see http://schema.org/TakeAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction

*
*/
class TakeAction extends TransferAction
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TransferAction\\TakeAction','Thing\\TakeAction');

