<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\MoveAction;

use Sohophp\SchemaOrg\Thing\Action\MoveAction;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;

/**
* The act of traveling from an fromLocation to a destination by a specified mode of transport, optionally with participants.
* @see http://schema.org/TravelAction
* @package Sohophp\SchemaOrg\Thing\Action\MoveAction
*/
class TravelAction extends MoveAction
{

    /**
    * The distance travelled, e.g. exercising or travelling.
    * @param Distance $value
    * @return $this
    */
    public function distance(?Distance $value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }


}

