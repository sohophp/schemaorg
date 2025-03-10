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
        * @param array|string|mixed $value
    * @return $this
    */
    public function byArtist($value)
    {
        $this->setProperty('byArtist', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The playlist to which this recording belongs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function inPlaylist($value)
    {
        $this->setProperty('inPlaylist', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The International Standard Recording Code for the recording.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isrcCode($value)
    {
        $this->setProperty('isrcCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * duration format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param array|string|mixed $value
    * @return $this
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The album to which this recording belongs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function inAlbum($value)
    {
        $this->setProperty('inAlbum', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The composition this track is a recording of.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recordingOf($value)
    {
        $this->setProperty('recordingOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
