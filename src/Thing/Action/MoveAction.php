<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
* The act of an agent relocating to a place.\n\nRelated actions:\n\n* [[TransferAction]]: Unlike TransferAction, the subject of the move is a living Person or Organization rather than an inanimate object.
* @see schema:MoveAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class MoveAction extends Action
{
   /**
        * A sub property of location. The original location of the object or the agent before the action.
        */
    protected $fromLocation = null;

   /**
        * A sub property of location. The final location of the object or the agent after the action.
        */
    protected $toLocation = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setFromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFromLocation()
    {
       return $this->getProperty('fromLocation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setToLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getToLocation()
    {
       return $this->getProperty('toLocation');
    }


}
