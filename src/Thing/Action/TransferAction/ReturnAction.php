<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;

/**
* The act of returning to the origin that which was previously received
 * (concrete objects) or taken (ownership).
* @see schema:ReturnAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class ReturnAction extends TransferAction
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
