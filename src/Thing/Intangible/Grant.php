<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A grant, typically financial or otherwise quantifiable, of resources. Typically a <a class="localLink" href="http://schema.org/funder">funder</a> sponsors some <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a> to an <a class="localLink" href="http://schema.org/Organization">Organization</a> or <a class="localLink" href="http://schema.org/Person">Person</a>,
    sometimes not necessarily via a dedicated or long-lived <a class="localLink" href="http://schema.org/Project">Project</a>, resulting in one or more outputs, or <a class="localLink" href="http://schema.org/fundedItem">fundedItem</a>s. For financial sponsorship, indicate the <a class="localLink" href="http://schema.org/funder">funder</a> of a <a class="localLink" href="http://schema.org/MonetaryGrant">MonetaryGrant</a>. For non-financial support, indicate <a class="localLink" href="http://schema.org/sponsor">sponsor</a> of <a class="localLink" href="http://schema.org/Grant">Grant</a>s of resources (e.g. office space).<br/><br/>

Grants support  activities directed towards some agreed collective goals, often but not always organized as <a class="localLink" href="http://schema.org/Project">Project</a>s. Long-lived projects are sometimes sponsored by a variety of grants over time, but it is also common for a project to be associated with a single grant.<br/><br/>

The amount of a <a class="localLink" href="http://schema.org/Grant">Grant</a> is represented using <a class="localLink" href="http://schema.org/amount">amount</a> as a <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a>.
* @see http://schema.org/Grant
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Grant extends Intangible
{

    /**
    * Indicates an item funded or sponsored through a <a class="localLink" href="http://schema.org/Grant">Grant</a>.
    * @param Thing|array $value
    * @return $this
    */
    public function fundedItem(?Thing $value)
    {
        $this->setProperty('fundedItem', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setFundedItem(?Thing $value)
    {
        $this->setProperty('fundedItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFundedItem()
    {
       return $this->getProperty('fundedItem');
    }

    /**
    * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSponsor()
    {
       return $this->getProperty('sponsor');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Grant','Thing\\Grant');

