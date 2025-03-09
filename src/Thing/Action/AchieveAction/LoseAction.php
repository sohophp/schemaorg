<?php
namespace Sohophp\SchemaOrg\Thing\Action\AchieveAction;

use Sohophp\SchemaOrg\Thing\Action\AchieveAction;

/**
* The act of being defeated in a competitive activity.
* @see schema:LoseAction
* @package Sohophp\SchemaOrg\Thing\Action\AchieveAction
*/
class LoseAction extends AchieveAction
{
   /**
        * A sub property of participant. The winner of the action.
        */
    protected $winner = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setWinner($value)
    {
        $this->setProperty('winner', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWinner()
    {
       return $this->getProperty('winner');
    }


}
