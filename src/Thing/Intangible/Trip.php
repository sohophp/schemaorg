<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
 * A trip or journey. An itinerary of visits to one or more places.
 *
 * @see http://schema.org/Trip
 */
class Trip extends Intangible
{
    /**
     * The expected arrival time.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function arrivalTime(?\DateTimeInterface $value): self
    {
        $this->setProperty('arrivalTime', $value);

        return $this;
    }

    /**
     * The expected departure time.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function departureTime(?\DateTimeInterface $value): self
    {
        $this->setProperty('departureTime', $value);

        return $this;
    }
}
