<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

use Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* The act of granting permission to an object.
* @see http://schema.org/AuthorizeAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction
*/
class AuthorizeAction extends AllocateAction
{


    /**
        * A sub property of participant. The participant who is at the receiving end of
 * the action.
        * @param Person|ContactPoint|Organization|Audience|array|string|mixed $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * @param Person|ContactPoint|Organization|Audience|array|string|mixed $value
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
