<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

  use Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
  * The act of granting permission to an object.
  * @see schema:AuthorizeAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction
*/
class AuthorizeAction extends AllocateAction
{


  /**
      * A sub property of participant. The participant who is at the receiving end of
 * the action.
    * @param Organization|Person|ContactPoint|Audience|array $value
  * @return $this
  */
  public function recipient($value)
  {
  $this->setProperty('recipient', $value);
  return $this;
  }

  /**
  * @param Organization|Person|ContactPoint|Audience|array $value
  * @return $this
  */
  public function setRecipient($value)
  {
  $this->setProperty('recipient', $value);
  return $this;
  }

  /**
  * @param Organization|Person|ContactPoint|Audience $value
  * @return $this
  */
  public function addRecipient($value)
  {
  $current = $this->getProperty('recipient');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipient', $current);
  return $this;
  }

  /**
  * @return Organization|Person|ContactPoint|Audience|array
  */
  public function getRecipient()
  {
  return $this->getProperty('recipient');
  }


}
