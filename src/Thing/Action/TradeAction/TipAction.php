<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* The act of giving money voluntarily to a beneficiary in recognition of services rendered.
* @see http://schema.org/TipAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class TipAction extends TradeAction
{

    /**
    * A sub property of participant. The participant who is at the receiving end of the action.
    * @param Person|ContactPoint|Organization|Audience $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }


}

