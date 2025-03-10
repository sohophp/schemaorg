<?php
namespace Sohophp\SchemaOrg\Thing\Action\AchieveAction;

use Sohophp\SchemaOrg\Thing\Action\AchieveAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
* The act of achieving victory in a competitive activity.
* @see http://schema.org/WinAction
* @package Sohophp\SchemaOrg\Thing\Action\AchieveAction
*/
class WinAction extends AchieveAction
{


    /**
        * A sub property of participant. The loser of the action.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function loser($value)
    {
        $this->setProperty('loser', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setLoser($value)
    {
        $this->setProperty('loser', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLoser()
    {
       return $this->getProperty('loser');
    }


}
