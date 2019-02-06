<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;
/**
* The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
* @see http://schema.org/BuyAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class BuyAction extends TradeAction
{

     
     /**
     * 'vendor' is an earlier term for 'seller'.
     * @param Person|Organization $value
     * @return $this
     */

     public function vendor( $value):self
     {
        $this->setProperty("vendor",$value);
        return $this;
     }

     
     /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     * @param Organization|Person $value
     * @return $this
     */

     public function seller( $value):self
     {
        $this->setProperty("seller",$value);
        return $this;
     }

     
     /**
     * The warranty promise(s) included in the offer.
     * @param WarrantyPromise $value
     * @return $this
     */

     public function warrantyPromise(?WarrantyPromise $value):self
     {
        $this->setProperty("warrantyPromise",$value);
        return $this;
     }

     
}

