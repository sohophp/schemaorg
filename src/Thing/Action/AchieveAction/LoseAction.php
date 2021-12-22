<?php
namespace Sohophp\SchemaOrg\Thing\Action\AchieveAction;

use Sohophp\SchemaOrg\Thing\Action\AchieveAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
* The act of being defeated in a competitive activity.
* @see http://schema.org/LoseAction
* @package Sohophp\SchemaOrg\Thing\Action\AchieveAction

*
*/
class LoseAction extends AchieveAction
{

    /**
    * A sub property of participant. The winner of the action.
    * @param Person|array $value
    * @return $this
    */
    public function winner(?Person $value)
    {
        $this->setProperty('winner', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setWinner(?Person $value)
    {
        $this->setProperty('winner', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWinner()
    {
       return $this->getProperty('winner');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\AchieveAction\\LoseAction','Thing\\LoseAction');

