<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;
use Sohophp\SchemaOrg\Thing\Event;
/**
* An agent joins an event/group with participants/friends at a location.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/RegisterAction">RegisterAction</a>: Unlike RegisterAction, JoinAction refers to joining a group/team of people.</li>
<li><a class="localLink" href="http://schema.org/SubscribeAction">SubscribeAction</a>: Unlike SubscribeAction, JoinAction does not imply that you'll be receiving updates.</li>
<li><a class="localLink" href="http://schema.org/FollowAction">FollowAction</a>: Unlike FollowAction, JoinAction does not imply that you'll be polling for updates.</li>
</ul>

* @see http://schema.org/JoinAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class JoinAction extends InteractAction
{

     
     /**
     * Upcoming or past event associated with this place, organization, or action.
     * @param Event $value
     * @return $this
     */

     public function event(?Event $value):self
     {
        $this->setProperty("event",$value);
        return $this;
     }

     
}

