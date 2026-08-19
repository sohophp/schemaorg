<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 * @see https://schema.org/InviteAction
 * @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
 */
class InviteAction extends CommunicateAction
{
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * @see https://schema.org/event
     * @param Event|array $value
     * @return $this
     */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
     * @param Event|array $value
     * @return $this
     */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
     * @param Event $value
     * @return $this
     */
    public function addEvent($value)
    {
        $current = $this->getProperty('event');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('event', $current);
        return $this;
    }

    /**
     * @return Event|array
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }
}
