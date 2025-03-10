<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A grant, typically financial or otherwise quantifiable, of resources.
 * Typically a [[funder]] sponsors some [[MonetaryAmount]] to an
 * [[Organization]] or [[Person]],
 *     sometimes not necessarily via a dedicated or long-lived [[Project]],
 * resulting in one or more outputs, or [[fundedItem]]s. For financial
 * sponsorship, indicate the [[funder]] of a [[MonetaryGrant]]. For
 * non-financial support, indicate [[sponsor]] of [[Grant]]s of resources (e.g.
 * office space).
 * 
 * Grants support  activities directed towards some agreed collective goals,
 * often but not always organized as [[Project]]s. Long-lived projects are
 * sometimes sponsored by a variety of grants over time, but it is also common
 * for a project to be associated with a single grant.
 * 
 * The amount of a [[Grant]] is represented using [[amount]] as a
 * [[MonetaryAmount]].
* @see http://schema.org/Grant
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Grant extends Intangible
{


    /**
        * Indicates an item funded or sponsored through a [[Grant]].
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function fundedItem($value)
    {
        $this->setProperty('fundedItem', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function setFundedItem($value)
    {
        $this->setProperty('fundedItem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFundedItem()
    {
       return $this->getProperty('fundedItem');
    }


    /**
        * A person or organization that supports a thing through a pledge, promise, or
 * financial contribution. e.g. a sponsor of a Medical Study or a corporate
 * sponsor of an event.
        * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSponsor()
    {
       return $this->getProperty('sponsor');
    }


}
