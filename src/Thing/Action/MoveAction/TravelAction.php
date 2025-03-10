<?php
namespace Sohophp\SchemaOrg\Thing\Action\MoveAction;

use Sohophp\SchemaOrg\Thing\Action\MoveAction;

/**
* The act of traveling from a fromLocation to a destination by a specified mode
 * of transport, optionally with participants.
* @see schema:TravelAction
* @package Sohophp\SchemaOrg\Thing\Action\MoveAction
*/
class TravelAction extends MoveAction
{


    /**
        * The distance travelled, e.g. exercising or travelling.
        * @param array|string|mixed $value
    * @return $this
    */
    public function distance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDistance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDistance()
    {
       return $this->getProperty('distance');
    }


}
