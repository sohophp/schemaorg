<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
/**
* An agent pays a price to a participant.
* @see http://schema.org/PayAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class PayAction extends TradeAction
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

