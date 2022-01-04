<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicComposition;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A music recording (track), usually a single song.
* @see http://schema.org/MusicRecording
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class MusicRecording extends CreativeWork
{

    /**
    * The composition this track is a recording of.
    * @param MusicComposition|array|string $value
    * @return $this
    * @deprecated use setRecordingOf
    */
    public function recordingOf($value)
    {
        $this->setProperty('recordingOf', $value);
        return $this;
    }
   /**
    * @param MusicComposition|array|string $value
    * @return $this
    */
    public function setRecordingOf($value)
    {
        $this->setProperty('recordingOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecordingOf()
    {
       return $this->getProperty('recordingOf');
    }

    /**
    * The International Standard Recording Code for the recording.
    * @param string|array $value
    * @return $this
    * @deprecated use setIsrcCode
    */
    public function isrcCode($value)
    {
        $this->setProperty('isrcCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIsrcCode($value)
    {
        $this->setProperty('isrcCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsrcCode()
    {
       return $this->getProperty('isrcCode');
    }

    /**
    * The album to which this recording belongs.
    * @param MusicAlbum|array|string $value
    * @return $this
    * @deprecated use setInAlbum
    */
    public function inAlbum($value)
    {
        $this->setProperty('inAlbum', $value);
        return $this;
    }
   /**
    * @param MusicAlbum|array|string $value
    * @return $this
    */
    public function setInAlbum($value)
    {
        $this->setProperty('inAlbum', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInAlbum()
    {
       return $this->getProperty('inAlbum');
    }

    /**
    * The playlist to which this recording belongs.
    * @param MusicPlaylist|array|string $value
    * @return $this
    * @deprecated use setInPlaylist
    */
    public function inPlaylist($value)
    {
        $this->setProperty('inPlaylist', $value);
        return $this;
    }
   /**
    * @param MusicPlaylist|array|string $value
    * @return $this
    */
    public function setInPlaylist($value)
    {
        $this->setProperty('inPlaylist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInPlaylist()
    {
       return $this->getProperty('inPlaylist');
    }

    /**
    * The artist that performed this album or recording.
    * @param Person|MusicGroup|array|string $value
    * @return $this
    * @deprecated use setByArtist
    */
    public function byArtist($value)
    {
        $this->setProperty('byArtist', $value);
        return $this;
    }
   /**
    * @param Person|MusicGroup|array|string $value
    * @return $this
    */
    public function setByArtist($value)
    {
        $this->setProperty('byArtist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getByArtist()
    {
       return $this->getProperty('byArtist');
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration|array|string $value
    * @return $this
    * @deprecated use setDuration
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
   /**
    * @param Duration|array|string $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }


}
