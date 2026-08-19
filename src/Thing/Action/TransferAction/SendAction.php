<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

  use Sohophp\SchemaOrg\Thing\Action\TransferAction;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
  * The act of physically/electronically dispatching an object for transfer from
 * an origin to a destination. Related actions:
 * 
 * * [[ReceiveAction]]: The reciprocal of SendAction.
 * * [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer
 * of ownership (e.g. I can send you my laptop, but I'm not necessarily giving
 * it to you).
  * @see schema:SendAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class SendAction extends TransferAction
{


  /**
      * A sub property of instrument. The method of delivery.
    * @param DeliveryMethod|array $value
  * @return $this
  */
  public function deliveryMethod($value)
  {
  $this->setProperty('deliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod|array $value
  * @return $this
  */
  public function setDeliveryMethod($value)
  {
  $this->setProperty('deliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod $value
  * @return $this
  */
  public function addDeliveryMethod($value)
  {
  $current = $this->getProperty('deliveryMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('deliveryMethod', $current);
  return $this;
  }

  /**
  * @return DeliveryMethod|array
  */
  public function getDeliveryMethod()
  {
  return $this->getProperty('deliveryMethod');
  }


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
