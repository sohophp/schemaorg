<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AchieveAction;

use Sohophp\SchemaOrg\Thing\Action\AchieveAction;
use Sohophp\SchemaOrg\Thing\Person;
/**
* The act of achieving victory in a competitive activity.
* @see http://schema.org/WinAction
* @package Sohophp\SchemaOrg\Thing\Action\AchieveAction
*/
class WinAction extends AchieveAction
{

     
     /**
     * A sub property of participant. The loser of the action.
     * @param Person $value
     * @return $this
     */

     public function loser(?Person $value):self
     {
        $this->setProperty("loser",$value);
        return $this;
     }

     
}

