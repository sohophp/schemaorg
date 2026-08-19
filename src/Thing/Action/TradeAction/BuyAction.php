<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

  use Sohophp\SchemaOrg\Thing\Action\TradeAction;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;

/**
  * The act of giving money to a seller in exchange for goods or services
 * rendered. An agent buys an object, product, or service from a seller for a
 * price. Reciprocal of SellAction.
  * @see schema:BuyAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class BuyAction extends TradeAction
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
      * 'vendor' is an earlier term for 'seller'.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function vendor($value)
  {
  $this->setProperty('vendor', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setVendor($value)
  {
  $this->setProperty('vendor', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addVendor($value)
  {
  $current = $this->getProperty('vendor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('vendor', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getVendor()
  {
  return $this->getProperty('vendor');
  }


  /**
      * An entity which offers (sells / leases / lends / loans) the services / goods.
 *  A seller may also be a provider.
    * @param Person|Organization|array $value
  * @return $this
  */
  public function seller($value)
  {
  $this->setProperty('seller', $value);
  return $this;
  }

  /**
  * @param Person|Organization|array $value
  * @return $this
  */
  public function setSeller($value)
  {
  $this->setProperty('seller', $value);
  return $this;
  }

  /**
  * @param Person|Organization $value
  * @return $this
  */
  public function addSeller($value)
  {
  $current = $this->getProperty('seller');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seller', $current);
  return $this;
  }

  /**
  * @return Person|Organization|array
  */
  public function getSeller()
  {
  return $this->getProperty('seller');
  }


}
