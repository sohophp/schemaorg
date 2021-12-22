<?php
namespace Sohophp\SchemaOrg\Thing\Action\MoveAction;

use Sohophp\SchemaOrg\Thing\Action\MoveAction;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;

/**
* The act of traveling from an fromLocation to a destination by a specified mode of transport, optionally with participants.
* @see http://schema.org/TravelAction
* @package Sohophp\SchemaOrg\Thing\Action\MoveAction

*
*/
class TravelAction extends MoveAction
{

    /**
    * The distance travelled, e.g. exercising or travelling.
    * @param Distance|array $value
    * @return $this
    */
    public function distance(?Distance $value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }
   /**
    * @param Distance|array $value
    * @return $this
    */
    public function setDistance(?Distance $value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDistance()
    {
       return $this->getProperty('distance');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\MoveAction\\TravelAction','Thing\\TravelAction');

