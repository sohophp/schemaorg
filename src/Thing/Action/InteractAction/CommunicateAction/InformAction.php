<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
* The act of notifying someone of information pertinent to them, with no expectation of a response.
* @see http://schema.org/InformAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class InformAction extends CommunicateAction
{

    /**
    * Upcoming or past event associated with this place, organization, or action.
    * @param Event $value
    * @return $this
    */
    public function event(?Event $value)
    {
        $this->setProperty('event', $value);
        return $this;
    }


}

