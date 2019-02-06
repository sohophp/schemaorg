<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
/**
* The act of transferring ownership of an object to a destination. Reciprocal of TakeAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/TakeAction">TakeAction</a>: Reciprocal of GiveAction.</li>
<li><a class="localLink" href="http://schema.org/SendAction">SendAction</a>: Unlike SendAction, GiveAction implies that ownership is being transferred (e.g. I may send my laptop to you, but that doesn't mean I'm giving it to you).</li>
</ul>

* @see http://schema.org/GiveAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class GiveAction extends TransferAction
{

     
     /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @param Person|ContactPoint|Organization|Audience $value
     * @return $this
     */

     public function recipient( $value):self
     {
        $this->setProperty("recipient",$value);
        return $this;
     }

     
}

