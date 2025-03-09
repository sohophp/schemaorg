<?php
namespace Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;

use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;

/**
* A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
* @see schema:MusicGroup
* @package Sohophp\SchemaOrg\Thing\Organization\PerformingGroup
*/
class MusicGroup extends PerformingGroup
{
   /**
        * A music album.
        */
    protected $album = null;

   /**
        * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
        */
    protected $musicGroupMember = null;

   /**
        * A music recording (track)&#x2014;usually a single song.
        */
    protected $tracks = null;

   /**
        * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
        */
    protected $track = null;

   /**
        * A collection of music albums.
        */
    protected $albums = null;

   /**
        * Genre of the creative work, broadcast channel or group.
        */
    protected $genre = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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


}
