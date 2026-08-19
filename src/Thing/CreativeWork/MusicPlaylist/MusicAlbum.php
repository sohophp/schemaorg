<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicRelease;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumProductionType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicAlbumReleaseType;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;

/**
 * A collection of music tracks.
 * @see https://schema.org/MusicAlbum
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist
 */
class MusicAlbum extends MusicPlaylist
{
    /**
     * A release of this album.
     * @see https://schema.org/albumRelease
     * @param MusicRelease|array $value
     * @return $this
     */
    public function albumRelease($value)
    {
        $this->setProperty('albumRelease', $value);
        return $this;
    }

    /**
     * @param MusicRelease|array $value
     * @return $this
     */
    public function setAlbumRelease($value)
    {
        $this->setProperty('albumRelease', $value);
        return $this;
    }

    /**
     * @param MusicRelease $value
     * @return $this
     */
    public function addAlbumRelease($value)
    {
        $current = $this->getProperty('albumRelease');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('albumRelease', $current);
        return $this;
    }

    /**
     * @return MusicRelease|array
     */
    public function getAlbumRelease()
    {
        return $this->getProperty('albumRelease');
    }
    /**
     * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
     * @see https://schema.org/albumProductionType
     * @param MusicAlbumProductionType|array $value
     * @return $this
     */
    public function albumProductionType($value)
    {
        $this->setProperty('albumProductionType', $value);
        return $this;
    }

    /**
     * @param MusicAlbumProductionType|array $value
     * @return $this
     */
    public function setAlbumProductionType($value)
    {
        $this->setProperty('albumProductionType', $value);
        return $this;
    }

    /**
     * @param MusicAlbumProductionType $value
     * @return $this
     */
    public function addAlbumProductionType($value)
    {
        $current = $this->getProperty('albumProductionType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('albumProductionType', $current);
        return $this;
    }

    /**
     * @return MusicAlbumProductionType|array
     */
    public function getAlbumProductionType()
    {
        return $this->getProperty('albumProductionType');
    }
    /**
     * The kind of release which this album is: single, EP or album.
     * @see https://schema.org/albumReleaseType
     * @param MusicAlbumReleaseType|array $value
     * @return $this
     */
    public function albumReleaseType($value)
    {
        $this->setProperty('albumReleaseType', $value);
        return $this;
    }

    /**
     * @param MusicAlbumReleaseType|array $value
     * @return $this
     */
    public function setAlbumReleaseType($value)
    {
        $this->setProperty('albumReleaseType', $value);
        return $this;
    }

    /**
     * @param MusicAlbumReleaseType $value
     * @return $this
     */
    public function addAlbumReleaseType($value)
    {
        $current = $this->getProperty('albumReleaseType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('albumReleaseType', $current);
        return $this;
    }

    /**
     * @return MusicAlbumReleaseType|array
     */
    public function getAlbumReleaseType()
    {
        return $this->getProperty('albumReleaseType');
    }
    /**
     * The artist that performed this album or recording.
     * @see https://schema.org/byArtist
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
     * @param Person|MusicGroup $value
     * @return $this
     */
    public function addByArtist($value)
    {
        $current = $this->getProperty('byArtist');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('byArtist', $current);
        return $this;
    }

    /**
     * @return Person|MusicGroup|array
     */
    public function getByArtist()
    {
        return $this->getProperty('byArtist');
    }
}
