<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A collection of music tracks in playlist form.
 *
 * @see http://schema.org/MusicPlaylist
 */
class MusicPlaylist extends CreativeWork
{
    /**
     * The number of tracks in this album or playlist.
     *
     * @param int $value
     *
     * @return $this
     */
    public function numTracks(?int $value): self
    {
        $this->setProperty('numTracks', $value);

        return $this;
    }
}
