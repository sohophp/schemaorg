<?php
namespace Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;

use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;

/**
* A musical group, such as a band, an orchestra, or a choir. Can also be a solo
 * musician.
* @see http://schema.org/MusicGroup
* @package Sohophp\SchemaOrg\Thing\Organization\PerformingGroup
*/
class MusicGroup extends PerformingGroup
{


    /**
        * A music recording (track)&#x2014;usually a single song. If an ItemList is
 * given, the list should contain items of type MusicRecording.
        * @param ItemList|MusicRecording|array|string|mixed $value
    * @return $this
    */
    public function track($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }

    /**
    * @param ItemList|MusicRecording|array|string|mixed $value
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
        * Genre of the creative work, broadcast channel or group.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setGenre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGenre()
    {
       return $this->getProperty('genre');
    }


    /**
        * A music recording (track)&#x2014;usually a single song.
        * @param MusicRecording|array|string|mixed $value
    * @return $this
    */
    public function tracks($value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }

    /**
    * @param MusicRecording|array|string|mixed $value
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
        * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function musicGroupMember($value)
    {
        $this->setProperty('musicGroupMember', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setMusicGroupMember($value)
    {
        $this->setProperty('musicGroupMember', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicGroupMember()
    {
       return $this->getProperty('musicGroupMember');
    }


    /**
        * A collection of music albums.
        * @param MusicAlbum|array|string|mixed $value
    * @return $this
    */
    public function albums($value)
    {
        $this->setProperty('albums', $value);
        return $this;
    }

    /**
    * @param MusicAlbum|array|string|mixed $value
    * @return $this
    */
    public function setAlbums($value)
    {
        $this->setProperty('albums', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlbums()
    {
       return $this->getProperty('albums');
    }


    /**
        * A music album.
        * @param MusicAlbum|array|string|mixed $value
    * @return $this
    */
    public function album($value)
    {
        $this->setProperty('album', $value);
        return $this;
    }

    /**
    * @param MusicAlbum|array|string|mixed $value
    * @return $this
    */
    public function setAlbum($value)
    {
        $this->setProperty('album', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlbum()
    {
       return $this->getProperty('album');
    }


}
