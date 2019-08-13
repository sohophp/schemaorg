<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Place;

/**
* The act of transferring/moving (abstract or concrete) animate or inanimate objects from one place to another.
* @see http://schema.org/TransferAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class TransferAction extends Action
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

    /**
    * A sub property of location. The original location of the object or the agent before the action.
    * @param Place $value
    * @return $this
    */
    public function fromLocation(?Place $value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TransferAction','Thing\\TransferAction');

