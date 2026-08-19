<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

  use Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

/**
  * The act of planning the execution of an event/task/action/reservation/plan to
 * a future date.
  * @see schema:PlanAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction
*/
class PlanAction extends OrganizeAction
{


  /**
      * The time the object is scheduled to.
    * @param mixed $value
  * @return $this
  */
  public function scheduledTime($value)
  {
  $this->setProperty('scheduledTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setScheduledTime($value)
  {
  $this->setProperty('scheduledTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addScheduledTime($value)
  {
  $current = $this->getProperty('scheduledTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('scheduledTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getScheduledTime()
  {
  return $this->getProperty('scheduledTime');
  }


}
