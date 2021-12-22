<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;

/**
* The act of taking money from a buyer in exchange for goods or services rendered. An agent sells an object, product, or service to a buyer for a price. Reciprocal of BuyAction.
* @see http://schema.org/SellAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction

*
*/
class SellAction extends TradeAction
{

    /**
    * A sub property of participant. The participant/person/organization that bought the object.
    * @param Person|array $value
    * @return $this
    */
    public function buyer(?Person $value)
    {
        $this->setProperty('buyer', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setBuyer(?Person $value)
    {
        $this->setProperty('buyer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBuyer()
    {
       return $this->getProperty('buyer');
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TradeAction\\SellAction','Thing\\SellAction');

