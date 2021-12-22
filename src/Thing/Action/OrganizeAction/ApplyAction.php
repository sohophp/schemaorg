<?php
namespace Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

use Sohophp\SchemaOrg\Thing\Action\OrganizeAction;

/**
* The act of registering to an organization/service without the guarantee to receive it.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/RegisterAction">RegisterAction</a>: Unlike RegisterAction, ApplyAction has no guarantees that the application will be accepted.</li>
</ul>

* @see http://schema.org/ApplyAction
* @package Sohophp\SchemaOrg\Thing\Action\OrganizeAction

*
*/
class ApplyAction extends OrganizeAction
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\OrganizeAction\\ApplyAction','Thing\\ApplyAction');

