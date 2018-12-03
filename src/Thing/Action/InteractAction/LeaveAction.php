<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;

/**
 * An agent leaves an event / group with participants/friends at a location.<br/><br/>.
Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/JoinAction">JoinAction</a>: The antonym of LeaveAction.</li>
<li><a class="localLink" href="http://schema.org/UnRegisterAction">UnRegisterAction</a>: Unlike UnRegisterAction, LeaveAction implies leaving a group/team of people rather than a service.</li>
</ul>

 * @see http://schema.org/LeaveAction
 */
class LeaveAction extends InteractAction
{
}
