<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
/**
* The act of returning to the origin that which was previously received (concrete objects) or taken (ownership).
* @see http://schema.org/ReturnAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class ReturnAction extends TransferAction
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

