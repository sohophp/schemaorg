<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

use Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

/**
* The act of planning the execution of an event/task/action/reservation/plan to a future date.
* @see http://schema.org/PlanAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction
*/
class PlanAction extends OrganizeAction
{

    /**
    * The time the object is scheduled to.
    * @param  $value
    * @return $this
    */
    public function scheduledTime($value)
    {
        $this->setProperty('scheduledTime', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\OrganizeAction\\PlanAction','Thing\\PlanAction');

