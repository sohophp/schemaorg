<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
* The act of notifying someone of information pertinent to them, with no
 * expectation of a response.
* @see http://schema.org/InformAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class InformAction extends CommunicateAction
{


    /**
        * Upcoming or past event associated with this place, organization, or action.
        * @param Event|array|string|mixed $value
    * @return $this
    */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @param Event|array|string|mixed $value
    * @return $this
    */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }


}
