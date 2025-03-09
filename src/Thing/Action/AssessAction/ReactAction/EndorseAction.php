<?php
namespace Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction;

/**
* An agent approves/certifies/likes/supports/sanctions an object.
* @see schema:EndorseAction
* @package Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction
*/
class EndorseAction extends ReactAction
{
   /**
        * A sub property of participant. The person/organization being supported.
        */
    protected $endorsee = null;


    /**
    * @param array|string $value
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
