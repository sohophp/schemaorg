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
    * @param MusicComposition|array $value
    * @return $this
    */
    public function recordingOf(?MusicComposition $value)
    {
        $this->setProperty('recordingOf', $value);
        return $this;
    }
   /**
    * @param MusicComposition|array $value
    * @return $this
    */
    public function setRecordingOf(?MusicComposition $value)
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
    */
    public function isrcCode(?string $value)
    {
        $this->setProperty('isrcCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIsrcCode(?string $value)
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
    * @param MusicAlbum|array $value
    * @return $this
    */
    public function inAlbum(?MusicAlbum $value)
    {
        $this->setProperty('inAlbum', $value);
        return $this;
    }
   /**
    * @param MusicAlbum|array $value
    * @return $this
    */
    public function setInAlbum(?MusicAlbum $value)
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
    * @param MusicPlaylist|array $value
    * @return $this
    */
    public function inPlaylist(?MusicPlaylist $value)
    {
        $this->setProperty('inPlaylist', $value);
        return $this;
    }
   /**
    * @param MusicPlaylist|array $value
    * @return $this
    */
    public function setInPlaylist(?MusicPlaylist $value)
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
    * @param Person|MusicGroup|array $value
    * @return $this
    */
    public function byArtist($value)
    {
        $this->setProperty('byArtist', $value);
        return $this;
    }
   /**
    * @param Person|MusicGroup|array $value
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
    * @param Duration|array $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setDuration(?Duration $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MusicRecording','Thing\\MusicRecording');

