<?php
namespace Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
* The act of expressing a preference from a fixed/finite/structured set of
 * choices/options.
* @see http://schema.org/VoteAction
* @package Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction
*/
class VoteAction extends ChooseAction
{


    /**
        * A sub property of object. The candidate subject of this action.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function candidate($value)
    {
        $this->setProperty('candidate', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setCandidate($value)
    {
        $this->setProperty('candidate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCandidate()
    {
       return $this->getProperty('candidate');
    }


}
