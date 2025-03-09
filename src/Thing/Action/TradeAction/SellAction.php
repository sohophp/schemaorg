<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;

/**
* The act of taking money from a buyer in exchange for goods or services rendered. An agent sells an object, product, or service to a buyer for a price. Reciprocal of BuyAction.
* @see schema:SellAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class SellAction extends TradeAction
{
   /**
        * A sub property of participant. The participant/person/organization that bought the object.
        */
    protected $buyer = null;

   /**
        * The warranty promise(s) included in the offer.
        */
    protected $warrantyPromise = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBuyer($value)
    {
        $this->setProperty('buyer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBuyer()
    {
       return $this->getProperty('buyer');
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


}
