<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
* The act of physically/electronically dispatching an object for transfer from an origin to a destination.Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/ReceiveAction">ReceiveAction</a>: The reciprocal of SendAction.</li>
<li><a class="localLink" href="http://schema.org/GiveAction">GiveAction</a>: Unlike GiveAction, SendAction does not imply the transfer of ownership (e.g. I can send you my laptop, but I'm not necessarily giving it to you).</li>
</ul>

* @see http://schema.org/SendAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction

*
*/
class SendAction extends TransferAction
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
    * A sub property of instrument. The method of delivery.
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function deliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }
   /**
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function setDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeliveryMethod()
    {
       return $this->getProperty('deliveryMethod');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TransferAction\\SendAction','Thing\\SendAction');

