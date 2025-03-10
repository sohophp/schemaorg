<?php
namespace Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* An agent approves/certifies/likes/supports/sanction an object.
* @see http://schema.org/EndorseAction
* @package Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction
*/
class EndorseAction extends ReactAction
{


    /**
        * A sub property of participant. The person/organization being supported.
        * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function endorsee($value)
    {
        $this->setProperty('endorsee', $value);
        return $this;
    }

    /**
    * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function setEndorsee($value)
    {
        $this->setProperty('endorsee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndorsee()
    {
       return $this->getProperty('endorsee');
    }


}
