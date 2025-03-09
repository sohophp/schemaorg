<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

/**
* A collection of music tracks.
* @see schema:MusicAlbum
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist
*/
class MusicAlbum extends MusicPlaylist
{
   /**
        * A release of this album.
        */
    protected $albumRelease = null;

   /**
        * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
        */
    protected $albumProductionType = null;

   /**
        * The artist that performed this album or recording.
        */
    protected $byArtist = null;

   /**
        * The kind of release which this album is: single, EP or album.
        */
    protected $albumReleaseType = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAlbumRelease($value)
    {
        $this->setProperty('albumRelease', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlbumRelease()
    {
       return $this->getProperty('albumRelease');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAlbumProductionType($value)
    {
        $this->setProperty('albumProductionType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlbumProductionType()
    {
       return $this->getProperty('albumProductionType');
    }

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
    public function setAlbumReleaseType($value)
    {
        $this->setProperty('albumReleaseType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlbumReleaseType()
    {
       return $this->getProperty('albumReleaseType');
    }


}
