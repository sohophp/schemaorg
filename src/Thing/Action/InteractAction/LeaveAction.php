<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
 * An agent leaves an event / group with participants/friends at a location. Related actions: * [[JoinAction]]: The antonym of LeaveAction. * [[UnRegisterAction]]: Unlike UnRegisterAction, LeaveAction implies leaving a group/team of people rather than a service.
 * @see https://schema.org/LeaveAction
 * @package Sohophp\SchemaOrg\Thing\Action\InteractAction
 */
class LeaveAction extends InteractAction
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
