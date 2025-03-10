<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RsvpResponseType;

/**
* The act of notifying an event organizer as to whether you expect to attend
 * the event.
* @see http://schema.org/RsvpAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction
*/
class RsvpAction extends InformAction
{


    /**
        * If responding yes, the number of guests who will attend in addition to the
 * invitee.
        * @param array|string|mixed $value
    * @return $this
    */
    public function additionalNumberOfGuests($value)
    {
        $this->setProperty('additionalNumberOfGuests', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * Comments, typically from users.
        * @param Comment|array|string|mixed $value
    * @return $this
    */
    public function comment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
    * @param Comment|array|string|mixed $value
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
        * The response (yes, no, maybe) to the RSVP.
        * @param RsvpResponseType|array|string|mixed $value
    * @return $this
    */
    public function rsvpResponse($value)
    {
        $this->setProperty('rsvpResponse', $value);
        return $this;
    }

    /**
    * @param RsvpResponseType|array|string|mixed $value
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


}
