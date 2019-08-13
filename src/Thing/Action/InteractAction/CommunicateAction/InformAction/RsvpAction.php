<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RsvpResponseType;

/**
* The act of notifying an event organizer as to whether you expect to attend the event.
* @see http://schema.org/RsvpAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction
*/
class RsvpAction extends InformAction
{

    /**
    * If responding yes, the number of guests who will attend in addition to the invitee.
    * @param  $value
    * @return $this
    */
    public function additionalNumberOfGuests($value)
    {
        $this->setProperty('additionalNumberOfGuests', $value);
        return $this;
    }

    /**
    * Comments, typically from users.
    * @param Comment $value
    * @return $this
    */
    public function comment(?Comment $value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
    * The response (yes, no, maybe) to the RSVP.
    * @param RsvpResponseType $value
    * @return $this
    */
    public function rsvpResponse(?RsvpResponseType $value)
    {
        $this->setProperty('rsvpResponse', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\InteractAction\\CommunicateAction\\InformAction\\RsvpAction','Thing\\RsvpAction');

