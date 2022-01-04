<?php
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;

use Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;
use Sohophp\SchemaOrg\Thing\Place;

/**
* The act of adding at a specific location in an ordered collection.
* @see http://schema.org/InsertAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction

*
*/
class InsertAction extends AddAction
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


}
