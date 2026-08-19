<?php
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction;

  use Sohophp\SchemaOrg\Thing\Action\UpdateAction;
  use Sohophp\SchemaOrg\Thing;

/**
  * The act of editing a recipient by replacing an old object with a new object.
  * @see schema:ReplaceAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction
*/
class ReplaceAction extends UpdateAction
{


  /**
      * A sub property of object. The object that is being replaced.
    * @param Thing|array $value
  * @return $this
  */
  public function replacee($value)
  {
  $this->setProperty('replacee', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setReplacee($value)
  {
  $this->setProperty('replacee', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addReplacee($value)
  {
  $current = $this->getProperty('replacee');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('replacee', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getReplacee()
  {
  return $this->getProperty('replacee');
  }


  /**
      * A sub property of object. The object that replaces.
    * @param Thing|array $value
  * @return $this
  */
  public function replacer($value)
  {
  $this->setProperty('replacer', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setReplacer($value)
  {
  $this->setProperty('replacer', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addReplacer($value)
  {
  $current = $this->getProperty('replacer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('replacer', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getReplacer()
  {
  return $this->getProperty('replacer');
  }


}
