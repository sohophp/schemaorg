<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RsvpResponseType;

/**
* The act of notifying an event organizer as to whether you expect to attend the event.
* @see http://schema.org/RsvpAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction

*
*/
class RsvpAction extends InformAction
{

    /**
    * If responding yes, the number of guests who will attend in addition to the invitee.
    * @param |array $value
    * @return $this
    */
    public function additionalNumberOfGuests($value)
    {
        $this->setProperty('additionalNumberOfGuests', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setAdditionalNumberOfGuests($value)
    {
        $this->setProperty('additionalNumberOfGuests', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAdditionalNumberOfGuests()
    {
       return $this->getProperty('additionalNumberOfGuests');
    }

    /**
    * Comments, typically from users.
    * @param Comment|array $value
    * @return $this
    */
    public function comment(?Comment $value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }
   /**
    * @param Comment|array $value
    * @return $this
    */
    public function setComment(?Comment $value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getComment()
    {
       return $this->getProperty('comment');
    }

    /**
    * The response (yes, no, maybe) to the RSVP.
    * @param RsvpResponseType|array $value
    * @return $this
    */
    public function rsvpResponse(?RsvpResponseType $value)
    {
        $this->setProperty('rsvpResponse', $value);
        return $this;
    }
   /**
    * @param RsvpResponseType|array $value
    * @return $this
    */
    public function setRsvpResponse(?RsvpResponseType $value)
    {
        $this->setProperty('rsvpResponse', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRsvpResponse()
    {
       return $this->getProperty('rsvpResponse');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\InteractAction\\CommunicateAction\\InformAction\\RsvpAction','Thing\\RsvpAction');

