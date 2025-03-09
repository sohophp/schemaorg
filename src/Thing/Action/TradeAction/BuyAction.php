<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;

/**
* The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
* @see schema:BuyAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class BuyAction extends TradeAction
{
   /**
        * 'vendor' is an earlier term for 'seller'.
        */
    protected $vendor = null;

   /**
        * The warranty promise(s) included in the offer.
        */
    protected $warrantyPromise = null;

   /**
        * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
        */
    protected $seller = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setVendor($value)
    {
        $this->setProperty('vendor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVendor()
    {
       return $this->getProperty('vendor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWarrantyPromise($value)
    {
        $this->setProperty('warrantyPromise', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWarrantyPromise()
    {
       return $this->getProperty('warrantyPromise');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }


}
