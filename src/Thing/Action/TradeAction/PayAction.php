<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;

/**
* An agent pays a price to a participant.
* @see schema:PayAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class PayAction extends TradeAction
{


    /**
        * A sub property of participant. The participant who is at the receiving end of
 * the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
