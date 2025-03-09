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
        */
    protected $tracks = null;

   /**
        * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
        */
    protected $track = null;

   /**
        * The number of tracks in this album or playlist.
        */
    protected $numTracks = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
