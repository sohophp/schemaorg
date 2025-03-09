<?php
namespace Sohophp\SchemaOrg\Thing\Action\ConsumeAction;

use Sohophp\SchemaOrg\Thing\Action\ConsumeAction;

/**
* The act of playing a video game.
* @see schema:PlayGameAction
* @package Sohophp\SchemaOrg\Thing\Action\ConsumeAction
*/
class PlayGameAction extends ConsumeAction
{
   /**
        * Indicates the availability type of the game content associated with this action, such as whether it is a full version or a demo.
        */
    protected $gameAvailabilityType = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setGameAvailabilityType($value)
    {
        $this->setProperty('gameAvailabilityType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameAvailabilityType()
    {
       return $this->getProperty('gameAvailabilityType');
    }


}
