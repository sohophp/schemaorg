<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;

use Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction;
use Sohophp\SchemaOrg\Thing\Place;

/**
* The act of adding at a specific location in an ordered collection.
* @see http://schema.org/InsertAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction\AddAction
*/
class InsertAction extends AddAction
{

    /**
    * A sub property of location. The final location of the object or the agent after the action.
    * @param Place $value
    * @return $this
    */
    public function toLocation(?Place $value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }


}

