<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

  use Sohophp\SchemaOrg\Thing\Action\TradeAction;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
  * An agent pays a price to a participant.
  * @see schema:PayAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class PayAction extends TradeAction
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
