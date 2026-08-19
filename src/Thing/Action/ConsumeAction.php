<?php
namespace Sohophp\SchemaOrg\Thing\Action;

  use Sohophp\SchemaOrg\Thing\Action;
  use Sohophp\SchemaOrg\Thing\Intangible\ActionAccessSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\Offer;

/**
  * The act of ingesting information/resources/food.
  * @see schema:ConsumeAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class ConsumeAction extends Action
{


  /**
      * A set of requirements that must be fulfilled in order to perform an Action.
 * If more than one value is specified, fulfilling one set of requirements will
 * allow the Action to be performed.
    * @param ActionAccessSpecification|array $value
  * @return $this
  */
  public function actionAccessibilityRequirement($value)
  {
  $this->setProperty('actionAccessibilityRequirement', $value);
  return $this;
  }

  /**
  * @param ActionAccessSpecification|array $value
  * @return $this
  */
  public function setActionAccessibilityRequirement($value)
  {
  $this->setProperty('actionAccessibilityRequirement', $value);
  return $this;
  }

  /**
  * @param ActionAccessSpecification $value
  * @return $this
  */
  public function addActionAccessibilityRequirement($value)
  {
  $current = $this->getProperty('actionAccessibilityRequirement');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('actionAccessibilityRequirement', $current);
  return $this;
  }

  /**
  * @return ActionAccessSpecification|array
  */
  public function getActionAccessibilityRequirement()
  {
  return $this->getProperty('actionAccessibilityRequirement');
  }


  /**
      * An Offer which must be accepted before the user can perform the Action. For
 * example, the user may need to buy a movie before being able to watch it.
    * @param Offer|array $value
  * @return $this
  */
  public function expectsAcceptanceOf($value)
  {
  $this->setProperty('expectsAcceptanceOf', $value);
  return $this;
  }

  /**
  * @param Offer|array $value
  * @return $this
  */
  public function setExpectsAcceptanceOf($value)
  {
  $this->setProperty('expectsAcceptanceOf', $value);
  return $this;
  }

  /**
  * @param Offer $value
  * @return $this
  */
  public function addExpectsAcceptanceOf($value)
  {
  $current = $this->getProperty('expectsAcceptanceOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('expectsAcceptanceOf', $current);
  return $this;
  }

  /**
  * @return Offer|array
  */
  public function getExpectsAcceptanceOf()
  {
  return $this->getProperty('expectsAcceptanceOf');
  }


}
