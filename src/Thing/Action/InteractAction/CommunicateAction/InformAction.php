<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\Event;

/**
 * The act of notifying someone of information pertinent to them, with no expectation of a response.
 * @see https://schema.org/InformAction
 * @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
 */
class InformAction extends CommunicateAction
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
