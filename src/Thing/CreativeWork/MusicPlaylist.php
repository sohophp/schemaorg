<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;

/**
* A collection of music tracks in playlist form.
* @see http://schema.org/MusicPlaylist
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicPlaylist extends CreativeWork
{

    /**
    * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
    * @param MusicRecording|ItemList $value
    * @return $this
    */
    public function track($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }

    /**
    * The number of tracks in this album or playlist.
    * @param int $value
    * @return $this
    */
    public function numTracks(?int $value)
    {
        $this->setProperty('numTracks', $value);
        return $this;
    }

    /**
    * A music recording (track)&#x2014;usually a single song.
    * @param MusicRecording $value
    * @return $this
    */
    public function tracks(?MusicRecording $value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }


}

