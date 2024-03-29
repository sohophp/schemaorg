<?php
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

*
*/
class MoveAction extends Action
{

    /**
    * A sub property of location. The final location of the object or the agent after the action.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setToLocation
    */
    public function toLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setToLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getToLocation()
    {
       return $this->getProperty('toLocation');
    }

    /**
    * A sub property of location. The original location of the object or the agent before the action.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setFromLocation
    */
    public function fromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setFromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFromLocation()
    {
       return $this->getProperty('fromLocation');
    }


}
