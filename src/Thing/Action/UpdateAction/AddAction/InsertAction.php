<?php
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;

  use Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;
  use Sohophp\SchemaOrg\Thing\Place;

/**
  * The act of adding at a specific location in an ordered collection.
  * @see schema:InsertAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction
*/
class InsertAction extends AddAction
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


}
