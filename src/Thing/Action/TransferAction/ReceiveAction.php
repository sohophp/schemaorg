<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
/**
* The act of physically/electronically taking delivery of an object thathas been transferred from an origin to a destination. Reciprocal of SendAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/SendAction">SendAction</a>: The reciprocal of ReceiveAction.</li>
<li><a class="localLink" href="http://schema.org/TakeAction">TakeAction</a>: Unlike TakeAction, ReceiveAction does not imply that the ownership has been transfered (e.g. I can receive a package, but it does not mean the package is now mine).</li>
</ul>

* @see http://schema.org/ReceiveAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class ReceiveAction extends TransferAction
{

     
}

