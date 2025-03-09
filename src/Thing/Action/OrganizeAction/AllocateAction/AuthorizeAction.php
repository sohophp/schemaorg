<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

use Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

/**
* The act of granting permission to an object.
* @see schema:AuthorizeAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction
*/
class AuthorizeAction extends AllocateAction
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
