<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalDevicePurpose;
use Sohophp\SchemaOrg\Thing;

/**
* An agent pays a price to a participant.
* @see http://schema.org/PayAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction

*
*/
class PayAction extends TradeAction
{

    /**
    * A sub property of participant. The participant who is at the receiving end of the action.
    * @param Person|ContactPoint|Organization|Audience|array $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }
   /**
    * @param Person|ContactPoint|Organization|Audience|array $value
    * @return $this
    */
    public function setRecipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecipient()
    {
       return $this->getProperty('recipient');
    }

    /**
    * A goal towards an action is taken. Can be concrete or abstract.
    * @param MedicalDevicePurpose|Thing|array $value
    * @return $this
    */
    public function purpose($value)
    {
        $this->setProperty('purpose', $value);
        return $this;
    }
   /**
    * @param MedicalDevicePurpose|Thing|array $value
    * @return $this
    */
    public function setPurpose($value)
    {
        $this->setProperty('purpose', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPurpose()
    {
       return $this->getProperty('purpose');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TradeAction\\PayAction','Thing\\PayAction');

