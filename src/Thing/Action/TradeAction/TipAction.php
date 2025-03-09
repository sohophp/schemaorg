<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;

/**
* The act of giving money voluntarily to a beneficiary in recognition of services rendered.
* @see schema:TipAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class TipAction extends TradeAction
{
   /**
        * A sub property of participant. The participant who is at the receiving end of the action.
        */
    protected $recipient = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipient()
    {
       return $this->getProperty('recipient');
    }


}
