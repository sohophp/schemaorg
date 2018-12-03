<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\CreativeWork\Movie;

/**
 * A screening of a movie or other video.
 *
 * @see http://schema.org/ScreeningEvent
 */
class ScreeningEvent extends Event
{
    /**
     * The movie presented during this event.
     *
     * @param Movie $value
     *
     * @return $this
     */
    public function workPresented(?Movie $value): self
    {
        $this->setProperty('workPresented', $value);

        return $this;
    }
}
