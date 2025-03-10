<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A collection of music tracks in playlist form.
* @see schema:MusicPlaylist
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicPlaylist extends CreativeWork
{


    /**
        * A music recording (track)&#x2014;usually a single song.
        * @param array|string|mixed $value
    * @return $this
    */
    public function tracks($value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTracks($value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTracks()
    {
       return $this->getProperty('tracks');
    }


    /**
        * A music recording (track)&#x2014;usually a single song. If an ItemList is
 * given, the list should contain items of type MusicRecording.
        * @param array|string|mixed $value
    * @return $this
    */
    public function track($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTrack($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrack()
    {
       return $this->getProperty('track');
    }


    /**
        * The number of tracks in this album or playlist.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numTracks($value)
    {
        $this->setProperty('numTracks', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumTracks($value)
    {
        $this->setProperty('numTracks', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumTracks()
    {
       return $this->getProperty('numTracks');
    }


}
