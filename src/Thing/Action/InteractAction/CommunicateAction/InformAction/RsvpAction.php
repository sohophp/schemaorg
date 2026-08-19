<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RsvpResponseType;

/**
 * The act of notifying an event organizer as to whether you expect to attend the event.
 * @see https://schema.org/RsvpAction
 * @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction\InformAction
 */
class RsvpAction extends InformAction
{
    /**
     * Comments, typically from users.
     * @see https://schema.org/comment
     * @param Comment|array $value
     * @return $this
     */
    public function comment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
     * @param Comment|array $value
     * @return $this
     */
    public function setComment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
     * @param Comment $value
     * @return $this
     */
    public function addComment($value)
    {
        $current = $this->getProperty('comment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('comment', $current);
        return $this;
    }

    /**
     * @return Comment|array
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }
    /**
     * The response (yes, no, maybe) to the RSVP.
     * @see https://schema.org/rsvpResponse
     * @param RsvpResponseType|array $value
     * @return $this
     */
    public function rsvpResponse($value)
    {
        $this->setProperty('rsvpResponse', $value);
        return $this;
    }

    /**
     * @param RsvpResponseType|array $value
     * @return $this
     */
    public function setRsvpResponse($value)
    {
        $this->setProperty('rsvpResponse', $value);
        return $this;
    }

    /**
     * @param RsvpResponseType $value
     * @return $this
     */
    public function addRsvpResponse($value)
    {
        $current = $this->getProperty('rsvpResponse');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('rsvpResponse', $current);
        return $this;
    }

    /**
     * @return RsvpResponseType|array
     */
    public function getRsvpResponse()
    {
        return $this->getProperty('rsvpResponse');
    }
    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     * @see https://schema.org/additionalNumberOfGuests
     * @param mixed $value
     * @return $this
     */
    public function additionalNumberOfGuests($value)
    {
        $this->setProperty('additionalNumberOfGuests', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setAdditionalNumberOfGuests($value)
    {
        $this->setProperty('additionalNumberOfGuests', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addAdditionalNumberOfGuests($value)
    {
        $current = $this->getProperty('additionalNumberOfGuests');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('additionalNumberOfGuests', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdditionalNumberOfGuests()
    {
        return $this->getProperty('additionalNumberOfGuests');
    }
}
