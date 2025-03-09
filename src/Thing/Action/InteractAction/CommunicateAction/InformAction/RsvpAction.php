<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;

/**
* The act of notifying an event organizer as to whether you expect to attend the event.
* @see schema:RsvpAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction
*/
class RsvpAction extends InformAction
{
   /**
        * Comments, typically from users.
        */
    protected $comment = null;

   /**
        * The response (yes, no, maybe) to the RSVP.
        */
    protected $rsvpResponse = null;

   /**
        * If responding yes, the number of guests who will attend in addition to the invitee.
        */
    protected $additionalNumberOfGuests = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setComment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getComment()
    {
       return $this->getProperty('comment');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRsvpResponse($value)
    {
        $this->setProperty('rsvpResponse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRsvpResponse()
    {
       return $this->getProperty('rsvpResponse');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAdditionalNumberOfGuests($value)
    {
        $this->setProperty('additionalNumberOfGuests', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalNumberOfGuests()
    {
       return $this->getProperty('additionalNumberOfGuests');
    }


}
