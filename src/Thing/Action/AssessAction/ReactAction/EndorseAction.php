<?php declare(strict_types=1);
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
    * @param Person|Organization $value
    * @return $this
    */
    public function endorsee($value)
    {
        $this->setProperty('endorsee', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\AssessAction\\ReactAction\\EndorseAction','Thing\\EndorseAction');

