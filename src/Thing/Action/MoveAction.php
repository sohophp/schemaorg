<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Place;

/**
* The act of an agent relocating to a place.
 * 
 * Related actions:
 * 
 * * [[TransferAction]]: Unlike TransferAction, the subject of the move is a
 * living Person or Organization rather than an inanimate object.
* @see http://schema.org/MoveAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class MoveAction extends Action
{


    /**
        * A sub property of location. The final location of the object or the agent
 * after the action.
        * @param Place|array|string|mixed $value
    * @return $this
    */
    public function toLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
    * @param Place|array|string|mixed $value
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


    /**
        * A sub property of location. The original location of the object or the agent
 * before the action.
        * @param Place|array|string|mixed $value
    * @return $this
    */
    public function fromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }

    /**
    * @param Place|array|string|mixed $value
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


}
