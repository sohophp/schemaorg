<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumProductionType;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicRelease;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumReleaseType;

/**
* A collection of music tracks.
* @see http://schema.org/MusicAlbum
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist

*
*/
class MusicAlbum extends MusicPlaylist
{

    /**
    * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
    * @param MusicAlbumProductionType|array $value
    * @return $this
    */
    public function albumProductionType(?MusicAlbumProductionType $value)
    {
        $this->setProperty('albumProductionType', $value);
        return $this;
    }
   /**
    * @param MusicAlbumProductionType|array $value
    * @return $this
    */
    public function setAlbumProductionType(?MusicAlbumProductionType $value)
    {
        $this->setProperty('albumProductionType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAlbumProductionType()
    {
       return $this->getProperty('albumProductionType');
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
    * A release of this album.
    * @param MusicRelease|array $value
    * @return $this
    */
    public function albumRelease(?MusicRelease $value)
    {
        $this->setProperty('albumRelease', $value);
        return $this;
    }
   /**
    * @param MusicRelease|array $value
    * @return $this
    */
    public function setAlbumRelease(?MusicRelease $value)
    {
        $this->setProperty('albumRelease', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAlbumRelease()
    {
       return $this->getProperty('albumRelease');
    }

    /**
    * The kind of release which this album is: single, EP or album.
    * @param MusicAlbumReleaseType|array $value
    * @return $this
    */
    public function albumReleaseType(?MusicAlbumReleaseType $value)
    {
        $this->setProperty('albumReleaseType', $value);
        return $this;
    }
   /**
    * @param MusicAlbumReleaseType|array $value
    * @return $this
    */
    public function setAlbumReleaseType(?MusicAlbumReleaseType $value)
    {
        $this->setProperty('albumReleaseType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAlbumReleaseType()
    {
       return $this->getProperty('albumReleaseType');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MusicPlaylist\\MusicAlbum','Thing\\MusicAlbum');

