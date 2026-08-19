<?php
namespace Sohophp\SchemaOrg\Thing\Action;

  use Sohophp\SchemaOrg\Thing\Action;
  use Sohophp\SchemaOrg\Thing\Place;

/**
  * The act of an agent relocating to a place.
 * 
 * Related actions:
 * 
 * * [[TransferAction]]: Unlike TransferAction, the subject of the move is a
 * living Person or Organization rather than an inanimate object.
  * @see schema:MoveAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class MoveAction extends Action
{


  /**
      * A sub property of location. The final location of the object or the agent
 * after the action.
    * @param Place|array $value
  * @return $this
  */
  public function toLocation($value)
  {
  $this->setProperty('toLocation', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setToLocation($value)
  {
  $this->setProperty('toLocation', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addToLocation($value)
  {
  $current = $this->getProperty('toLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('toLocation', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getToLocation()
  {
  return $this->getProperty('toLocation');
  }


  /**
      * A sub property of location. The original location of the object or the agent
 * before the action.
    * @param Place|array $value
  * @return $this
  */
  public function fromLocation($value)
  {
  $this->setProperty('fromLocation', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setFromLocation($value)
  {
  $this->setProperty('fromLocation', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addFromLocation($value)
  {
  $current = $this->getProperty('fromLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('fromLocation', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getFromLocation()
  {
  return $this->getProperty('fromLocation');
  }


}
