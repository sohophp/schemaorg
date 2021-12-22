<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

use Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

/**
* The act of planning the execution of an event/task/action/reservation/plan to a future date.
* @see http://schema.org/PlanAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction

*
*/
class PlanAction extends OrganizeAction
{

    /**
    * The time the object is scheduled to.
    * @param |array $value
    * @return $this
    */
    public function scheduledTime($value)
    {
        $this->setProperty('scheduledTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setScheduledTime($value)
    {
        $this->setProperty('scheduledTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getScheduledTime()
    {
       return $this->getProperty('scheduledTime');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\OrganizeAction\\PlanAction','Thing\\PlanAction');

