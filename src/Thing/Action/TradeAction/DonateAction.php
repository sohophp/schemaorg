<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* The act of providing goods, services, or money without compensation, often for philanthropic reasons.
* @see http://schema.org/DonateAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction

*
*/
class DonateAction extends TradeAction
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


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TradeAction\\DonateAction','Thing\\DonateAction');

