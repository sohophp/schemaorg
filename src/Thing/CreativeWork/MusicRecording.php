<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicComposition;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A music recording (track), usually a single song.
* @see http://schema.org/MusicRecording
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicRecording extends CreativeWork
{

    /**
    * The composition this track is a recording of.
    * @param MusicComposition $value
    * @return $this
    */
    public function recordingOf(?MusicComposition $value)
    {
        $this->setProperty('recordingOf', $value);
        return $this;
    }

    /**
    * The International Standard Recording Code for the recording.
    * @param string $value
    * @return $this
    */
    public function isrcCode(?string $value)
    {
        $this->setProperty('isrcCode', $value);
        return $this;
    }

    /**
    * The album to which this recording belongs.
    * @param MusicAlbum $value
    * @return $this
    */
    public function inAlbum(?MusicAlbum $value)
    {
        $this->setProperty('inAlbum', $value);
        return $this;
    }

    /**
    * The playlist to which this recording belongs.
    * @param MusicPlaylist $value
    * @return $this
    */
    public function inPlaylist(?MusicPlaylist $value)
    {
        $this->setProperty('inPlaylist', $value);
        return $this;
    }

    /**
    * The artist that performed this album or recording.
    * @param MusicGroup $value
    * @return $this
    */
    public function byArtist(?MusicGroup $value)
    {
        $this->setProperty('byArtist', $value);
        return $this;
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }


}

