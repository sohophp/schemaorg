<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A media episode (e.g. TV, radio, video game) which can be part of a series or season.
 *
 * @see http://schema.org/Episode
 */
class Episode extends CreativeWork
{
    /**
     * Position of the episode within an ordered group of episodes.
     *
     * @param string|int $value
     *
     * @return $this
     */
    public function episodeNumber($value): self
    {
        $this->setProperty('episodeNumber', $value);

        return $this;
    }
}
