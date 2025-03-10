<?php
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;

use Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;

/**
* The act of adding at a specific location in an ordered collection.
* @see schema:InsertAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction
*/
class InsertAction extends AddAction
{


    /**
        * A sub property of location. The final location of the object or the agent
 * after the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function toLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
