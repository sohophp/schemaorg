<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumProductionType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumReleaseType;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicRelease;
/**
* A collection of music tracks.
* @see http://schema.org/MusicAlbum
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist
*/
class MusicAlbum extends MusicPlaylist
{

     
     /**
     * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
     * @param MusicAlbumProductionType $value
     * @return $this
     */

     public function albumProductionType(?MusicAlbumProductionType $value):self
     {
        $this->setProperty("albumProductionType",$value);
        return $this;
     }

     
     /**
     * The kind of release which this album is: single, EP or album.
     * @param MusicAlbumReleaseType $value
     * @return $this
     */

     public function albumReleaseType(?MusicAlbumReleaseType $value):self
     {
        $this->setProperty("albumReleaseType",$value);
        return $this;
     }

     
     /**
     * The artist that performed this album or recording.
     * @param MusicGroup $value
     * @return $this
     */

     public function byArtist(?MusicGroup $value):self
     {
        $this->setProperty("byArtist",$value);
        return $this;
     }

     
     /**
     * A release of this album.
     * @param MusicRelease $value
     * @return $this
     */

     public function albumRelease(?MusicRelease $value):self
     {
        $this->setProperty("albumRelease",$value);
        return $this;
     }

     
}

