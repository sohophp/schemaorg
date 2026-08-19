<?php
namespace Sohophp\SchemaOrg\Thing\Action\AssessAction;

  use Sohophp\SchemaOrg\Thing\Action\AssessAction;
  use Sohophp\SchemaOrg\Thing;

/**
  * The act of expressing a preference from a set of options or a large or
 * unbounded set of choices/options.
  * @see schema:ChooseAction
* @package Sohophp\SchemaOrg\Thing\Action\AssessAction
*/
class ChooseAction extends AssessAction
{


  /**
      * A sub property of object. The options subject to this action.
    * @param string|Thing|array $value
  * @return $this
  */
  public function option($value)
  {
  $this->setProperty('option', $value);
  return $this;
  }

  /**
  * @param string|Thing|array $value
  * @return $this
  */
  public function setOption($value)
  {
  $this->setProperty('option', $value);
  return $this;
  }

  /**
  * @param string|Thing $value
  * @return $this
  */
  public function addOption($value)
  {
  $current = $this->getProperty('option');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('option', $current);
  return $this;
  }

  /**
  * @return string|Thing|array
  */
  public function getOption()
  {
  return $this->getProperty('option');
  }


  /**
      * A sub property of object. The options subject to this action.
    * @param string|Thing|array $value
  * @return $this
  */
  public function actionOption($value)
  {
  $this->setProperty('actionOption', $value);
  return $this;
  }

  /**
  * @param string|Thing|array $value
  * @return $this
  */
  public function setActionOption($value)
  {
  $this->setProperty('actionOption', $value);
  return $this;
  }

  /**
  * @param string|Thing $value
  * @return $this
  */
  public function addActionOption($value)
  {
  $current = $this->getProperty('actionOption');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('actionOption', $current);
  return $this;
  }

  /**
  * @return string|Thing|array
  */
  public function getActionOption()
  {
  return $this->getProperty('actionOption');
  }


}
