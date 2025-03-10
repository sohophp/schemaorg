<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* The act of transferring ownership of an object to a destination. Reciprocal
 * of TakeAction.
 * 
 * Related actions:
 * 
 * * [[TakeAction]]: Reciprocal of GiveAction.
 * * [[SendAction]]: Unlike SendAction, GiveAction implies that ownership is
 * being transferred (e.g. I may send my laptop to you, but that doesn't mean
 * I'm giving it to you).
* @see http://schema.org/GiveAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class GiveAction extends TransferAction
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
