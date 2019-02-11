<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;

use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\Person;

/**
* A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
* @see http://schema.org/MusicGroup
* @package Sohophp\SchemaOrg\Thing\Organization\PerformingGroup
*/
class MusicGroup extends PerformingGroup
{

    /**
    * A collection of music albums.
    * @param MusicAlbum $value
    * @return $this
    */
    public function albums(?MusicAlbum $value)
    {
        $this->setProperty('albums', $value);
        return $this;
    }

    /**
    * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
    * @param MusicRecording|ItemList $value
    * @return $this
    */
    public function track($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }

    /**
    * Genre of the creative work, broadcast channel or group.
    * @param string|string $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * A music recording (track)&#x2014;usually a single song.
    * @param MusicRecording $value
    * @return $this
    */
    public function tracks(?MusicRecording $value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }

    /**
    * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
    * @param Person $value
    * @return $this
    */
    public function musicGroupMember(?Person $value)
    {
        $this->setProperty('musicGroupMember', $value);
        return $this;
    }

    /**
    * A music album.
    * @param MusicAlbum $value
    * @return $this
    */
    public function album(?MusicAlbum $value)
    {
        $this->setProperty('album', $value);
        return $this;
    }


}

