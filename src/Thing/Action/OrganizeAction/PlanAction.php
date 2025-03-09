<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

use Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

/**
* The act of planning the execution of an event/task/action/reservation/plan to a future date.
* @see schema:PlanAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction
*/
class PlanAction extends OrganizeAction
{
   /**
        * The time the object is scheduled to.
        */
    protected $scheduledTime = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setScheduledTime($value)
    {
        $this->setProperty('scheduledTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getScheduledTime()
    {
       return $this->getProperty('scheduledTime');
    }


}
