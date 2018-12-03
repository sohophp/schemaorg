<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;

/**
 * A music recording (track), usually a single song.
 *
 * @see http://schema.org/MusicRecording
 */
class MusicRecording extends CreativeWork
{
    /**
     * The composition this track is a recording of.
     *
     * @param MusicComposition $value
     *
     * @return $this
     */
    public function recordingOf(?MusicComposition $value): self
    {
        $this->setProperty('recordingOf', $value);

        return $this;
    }

    /**
     * The International Standard Recording Code for the recording.
     *
     * @param string $value
     *
     * @return $this
     */
    public function isrcCode(?string $value): self
    {
        $this->setProperty('isrcCode', $value);

        return $this;
    }

    /**
     * The album to which this recording belongs.
     *
     * @param MusicAlbum $value
     *
     * @return $this
     */
    public function inAlbum(?MusicAlbum $value): self
    {
        $this->setProperty('inAlbum', $value);

        return $this;
    }

    /**
     * The playlist to which this recording belongs.
     *
     * @param MusicPlaylist $value
     *
     * @return $this
     */
    public function inPlaylist(?MusicPlaylist $value): self
    {
        $this->setProperty('inPlaylist', $value);

        return $this;
    }
}
