<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Person;
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

     
     /**
     * A sub property of instrument. The method of delivery.
     * @param DeliveryMethod $value
     * @return $this
     */

     public function deliveryMethod(?DeliveryMethod $value):self
     {
        $this->setProperty("deliveryMethod",$value);
        return $this;
     }

     
     /**
     * A sub property of participant. The participant who is at the sending end of the action.
     * @param Organization|Audience|Person $value
     * @return $this
     */

     public function sender( $value):self
     {
        $this->setProperty("sender",$value);
        return $this;
     }

     
}

