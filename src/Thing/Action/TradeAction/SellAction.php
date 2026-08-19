<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

  use Sohophp\SchemaOrg\Thing\Action\TradeAction;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;

/**
  * The act of taking money from a buyer in exchange for goods or services
 * rendered. An agent sells an object, product, or service to a buyer for a
 * price. Reciprocal of BuyAction.
  * @see schema:SellAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class SellAction extends TradeAction
{


  /**
      * The warranty promise(s) included in the offer.
    * @param WarrantyPromise|array $value
  * @return $this
  */
  public function warrantyPromise($value)
  {
  $this->setProperty('warrantyPromise', $value);
  return $this;
  }

  /**
  * @param WarrantyPromise|array $value
  * @return $this
  */
  public function setWarrantyPromise($value)
  {
  $this->setProperty('warrantyPromise', $value);
  return $this;
  }

  /**
  * @param WarrantyPromise $value
  * @return $this
  */
  public function addWarrantyPromise($value)
  {
  $current = $this->getProperty('warrantyPromise');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('warrantyPromise', $current);
  return $this;
  }

  /**
  * @return WarrantyPromise|array
  */
  public function getWarrantyPromise()
  {
  return $this->getProperty('warrantyPromise');
  }


  /**
      * A sub property of participant. The participant/person/organization that
 * bought the object.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function buyer($value)
  {
  $this->setProperty('buyer', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setBuyer($value)
  {
  $this->setProperty('buyer', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addBuyer($value)
  {
  $current = $this->getProperty('buyer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('buyer', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getBuyer()
  {
  return $this->getProperty('buyer');
  }


}
