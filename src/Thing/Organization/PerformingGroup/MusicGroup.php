<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;

use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
 * @see https://schema.org/MusicGroup
 * @package Sohophp\SchemaOrg\Thing\Organization\PerformingGroup
 */
class MusicGroup extends PerformingGroup
{
    /**
     * A music recording (track)&#x2014;usually a single song.
     * @see https://schema.org/tracks
     * @param MusicRecording|array $value
     * @return $this
     */
    public function tracks($value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }

    /**
     * @param MusicRecording|array $value
     * @return $this
     */
    public function setTracks($value)
    {
        $this->setProperty('tracks', $value);
        return $this;
    }

    /**
     * @param MusicRecording $value
     * @return $this
     */
    public function addTracks($value)
    {
        $current = $this->getProperty('tracks');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('tracks', $current);
        return $this;
    }

    /**
     * @return MusicRecording|array
     */
    public function getTracks()
    {
        return $this->getProperty('tracks');
    }
    /**
     * A collection of music albums.
     * @see https://schema.org/albums
     * @param MusicAlbum|array $value
     * @return $this
     */
    public function albums($value)
    {
        $this->setProperty('albums', $value);
        return $this;
    }

    /**
     * @param MusicAlbum|array $value
     * @return $this
     */
    public function setAlbums($value)
    {
        $this->setProperty('albums', $value);
        return $this;
    }

    /**
     * @param MusicAlbum $value
     * @return $this
     */
    public function addAlbums($value)
    {
        $current = $this->getProperty('albums');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('albums', $current);
        return $this;
    }

    /**
     * @return MusicAlbum|array
     */
    public function getAlbums()
    {
        return $this->getProperty('albums');
    }
    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
     * @see https://schema.org/musicGroupMember
     * @param Person|array $value
     * @return $this
     */
    public function musicGroupMember($value)
    {
        $this->setProperty('musicGroupMember', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setMusicGroupMember($value)
    {
        $this->setProperty('musicGroupMember', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addMusicGroupMember($value)
    {
        $current = $this->getProperty('musicGroupMember');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('musicGroupMember', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getMusicGroupMember()
    {
        return $this->getProperty('musicGroupMember');
    }
    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     * @see https://schema.org/track
     * @param ItemList|MusicRecording|array $value
     * @return $this
     */
    public function track($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }

    /**
     * @param ItemList|MusicRecording|array $value
     * @return $this
     */
    public function setTrack($value)
    {
        $this->setProperty('track', $value);
        return $this;
    }

    /**
     * @param ItemList|MusicRecording $value
     * @return $this
     */
    public function addTrack($value)
    {
        $current = $this->getProperty('track');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('track', $current);
        return $this;
    }

    /**
     * @return ItemList|MusicRecording|array
     */
    public function getTrack()
    {
        return $this->getProperty('track');
    }
    /**
     * A music album.
     * @see https://schema.org/album
     * @param MusicAlbum|array $value
     * @return $this
     */
    public function album($value)
    {
        $this->setProperty('album', $value);
        return $this;
    }

    /**
     * @param MusicAlbum|array $value
     * @return $this
     */
    public function setAlbum($value)
    {
        $this->setProperty('album', $value);
        return $this;
    }

    /**
     * @param MusicAlbum $value
     * @return $this
     */
    public function addAlbum($value)
    {
        $current = $this->getProperty('album');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('album', $current);
        return $this;
    }

    /**
     * @return MusicAlbum|array
     */
    public function getAlbum()
    {
        return $this->getProperty('album');
    }
    /**
     * Genre of the creative work, broadcast channel or group.
     * @see https://schema.org/genre
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setGenre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addGenre($value)
    {
        $current = $this->getProperty('genre');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('genre', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getGenre()
    {
        return $this->getProperty('genre');
    }
}
