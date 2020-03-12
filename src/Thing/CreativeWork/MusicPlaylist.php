<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;

/**
* A collection of music tracks in playlist form.
* @see http://schema.org/MusicPlaylist
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class MusicPlaylist extends CreativeWork
{

    /**
    * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
    * @param ItemList|MusicRecording|array $value
    * @return $this
    */
    public function track($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }
   /**
    * @param ItemList|MusicRecording|array $value
    * @return $this
    */
    public function setTrack($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrack()
    {
       return $this->getProperty('track');
    }

    /**
    * The number of tracks in this album or playlist.
    * @param int|array $value
    * @return $this
    */
    public function numTracks(?int $value)
    {
        $this->setProperty('numTracks', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setNumTracks(?int $value)
    {
        $this->setProperty('numTracks', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumTracks()
    {
       return $this->getProperty('numTracks');
    }

    /**
    * A music recording (track)&#x2014;usually a single song.
    * @param MusicRecording|array $value
    * @return $this
    */
    public function tracks(?MusicRecording $value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }
   /**
    * @param MusicRecording|array $value
    * @return $this
    */
    public function setTracks(?MusicRecording $value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTracks()
    {
       return $this->getProperty('tracks');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MusicPlaylist','Thing\\MusicPlaylist');

