<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\FindAction;

use Sohophp\SchemaOrg\Thing\Action\FindAction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
* An agent tracks an object for updates.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/FollowAction">FollowAction</a>: Unlike FollowAction, TrackAction refers to the interest on the location of innanimates objects.</li>
<li><a class="localLink" href="http://schema.org/SubscribeAction">SubscribeAction</a>: Unlike SubscribeAction, TrackAction refers to  the interest on the location of innanimate objects.</li>
</ul>

* @see http://schema.org/TrackAction
* @package Sohophp\SchemaOrg\Thing\Action\FindAction
*/
class TrackAction extends FindAction
{

    /**
    * A sub property of instrument. The method of delivery.
    * @param DeliveryMethod $value
    * @return $this
    */
    public function deliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }


}

