<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
 *
 * @see http://schema.org/BuyAction
 */
class BuyAction extends TradeAction
{
    /**
     * 'vendor' is an earlier term for 'seller'.
     *
     * @param Person|Organization $value
     *
     * @return $this
     */
    public function vendor($value): self
    {
        $this->setProperty('vendor', $value);

        return $this;
    }
}
