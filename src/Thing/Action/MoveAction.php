<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Place;
/**
* The act of an agent relocating to a place.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/TransferAction">TransferAction</a>: Unlike TransferAction, the subject of the move is a living Person or Organization rather than an inanimate object.</li>
</ul>

* @see http://schema.org/MoveAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class MoveAction extends Action
{

     
     /**
     * A sub property of location. The final location of the object or the agent after the action.
     * @param Place $value
     * @return $this
     */

     public function toLocation(?Place $value):self
     {
        $this->setProperty("toLocation",$value);
        return $this;
     }

     
     /**
     * A sub property of location. The original location of the object or the agent before the action.
     * @param Place $value
     * @return $this
     */

     public function fromLocation(?Place $value):self
     {
        $this->setProperty("fromLocation",$value);
        return $this;
     }

     
}

