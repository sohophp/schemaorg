<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicReleaseFormatType;

/**
* A MusicRelease is a specific release of a music album.
* @see http://schema.org/MusicRelease
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist
*/
class MusicRelease extends MusicPlaylist
{

    /**
    * The label that issued the release.
    * @param Organization $value
    * @return $this
    */
    public function recordLabel(?Organization $value)
    {
        $this->setProperty('recordLabel', $value);
        return $this;
    }

    /**
    * The catalog number for the release.
    * @param string $value
    * @return $this
    */
    public function catalogNumber(?string $value)
    {
        $this->setProperty('catalogNumber', $value);
        return $this;
    }

    /**
    * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
    * @param Person|Organization $value
    * @return $this
    */
    public function creditedTo($value)
    {
        $this->setProperty('creditedTo', $value);
        return $this;
    }

    /**
    * The album this is a release of.
    * @param MusicAlbum $value
    * @return $this
    */
    public function releaseOf(?MusicAlbum $value)
    {
        $this->setProperty('releaseOf', $value);
        return $this;
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
    * @param MusicReleaseFormatType $value
    * @return $this
    */
    public function musicReleaseFormat(?MusicReleaseFormatType $value)
    {
        $this->setProperty('musicReleaseFormat', $value);
        return $this;
    }


}

