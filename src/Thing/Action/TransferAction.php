<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Place;

/**
* The act of transferring/moving (abstract or concrete) animate or inanimate
 * objects from one place to another.
* @see http://schema.org/TransferAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class TransferAction extends Action
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
