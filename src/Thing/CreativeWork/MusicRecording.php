<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A music recording (track), usually a single song.
* @see schema:MusicRecording
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicRecording extends CreativeWork
{
   /**
        * The artist that performed this album or recording.
        */
    protected $byArtist = null;

   /**
        * The playlist to which this recording belongs.
        */
    protected $inPlaylist = null;

   /**
        * The International Standard Recording Code for the recording.
        */
    protected $isrcCode = null;

   /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $duration = null;

   /**
        * The album to which this recording belongs.
        */
    protected $inAlbum = null;

   /**
        * The composition this track is a recording of.
        */
    protected $recordingOf = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setByArtist($value)
    {
        $this->setProperty('byArtist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getByArtist()
    {
       return $this->getProperty('byArtist');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setInPlaylist($value)
    {
        $this->setProperty('inPlaylist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInPlaylist()
    {
       return $this->getProperty('inPlaylist');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsrcCode($value)
    {
        $this->setProperty('isrcCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsrcCode()
    {
       return $this->getProperty('isrcCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setInAlbum($value)
    {
        $this->setProperty('inAlbum', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInAlbum()
    {
       return $this->getProperty('inAlbum');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecordingOf($value)
    {
        $this->setProperty('recordingOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecordingOf()
    {
       return $this->getProperty('recordingOf');
    }


}
