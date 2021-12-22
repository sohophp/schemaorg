<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;

/**
* The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
* @see http://schema.org/BuyAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction

*
*/
class BuyAction extends TradeAction
{

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
    * @return $this|string|array
    */
    public function getVendor()
    {
       return $this->getProperty('vendor');
    }

    /**
    * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
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
    * @return $this|string|array
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }

    /**
    * The warranty promise(s) included in the offer.
    * @param WarrantyPromise|array $value
    * @return $this
    */
    public function warrantyPromise(?WarrantyPromise $value)
    {
        $this->setProperty('warrantyPromise', $value);
        return $this;
    }
   /**
    * @param WarrantyPromise|array $value
    * @return $this
    */
    public function setWarrantyPromise(?WarrantyPromise $value)
    {
        $this->setProperty('warrantyPromise', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWarrantyPromise()
    {
       return $this->getProperty('warrantyPromise');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TradeAction\\BuyAction','Thing\\BuyAction');

