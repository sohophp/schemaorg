<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;

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
        * 'vendor' is an earlier term for 'seller'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function vendor($value)
    {
        $this->setProperty('vendor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The warranty promise(s) included in the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function warrantyPromise($value)
    {
        $this->setProperty('warrantyPromise', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An entity which offers (sells / leases / lends / loans) the services / goods.
 *  A seller may also be a provider.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
