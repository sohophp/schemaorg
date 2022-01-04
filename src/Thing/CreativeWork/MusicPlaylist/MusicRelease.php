<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MusicReleaseFormatType;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A MusicRelease is a specific release of a music album.
* @see http://schema.org/MusicRelease
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist

*
*/
class MusicRelease extends MusicPlaylist
{

    /**
    * The label that issued the release.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setRecordLabel
    */
    public function recordLabel($value)
    {
        $this->setProperty('recordLabel', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setRecordLabel($value)
    {
        $this->setProperty('recordLabel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecordLabel()
    {
       return $this->getProperty('recordLabel');
    }

    /**
    * The catalog number for the release.
    * @param string|array $value
    * @return $this
    * @deprecated use setCatalogNumber
    */
    public function catalogNumber($value)
    {
        $this->setProperty('catalogNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCatalogNumber($value)
    {
        $this->setProperty('catalogNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCatalogNumber()
    {
       return $this->getProperty('catalogNumber');
    }

    /**
    * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
    * @param Organization|Person|array|string $value
    * @return $this
    * @deprecated use setCreditedTo
    */
    public function creditedTo($value)
    {
        $this->setProperty('creditedTo', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array|string $value
    * @return $this
    */
    public function setCreditedTo($value)
    {
        $this->setProperty('creditedTo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCreditedTo()
    {
       return $this->getProperty('creditedTo');
    }

    /**
    * The album this is a release of.
    * @param MusicAlbum|array|string $value
    * @return $this
    * @deprecated use setReleaseOf
    */
    public function releaseOf($value)
    {
        $this->setProperty('releaseOf', $value);
        return $this;
    }
   /**
    * @param MusicAlbum|array|string $value
    * @return $this
    */
    public function setReleaseOf($value)
    {
        $this->setProperty('releaseOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReleaseOf()
    {
       return $this->getProperty('releaseOf');
    }

    /**
    * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
    * @param MusicReleaseFormatType|array|string $value
    * @return $this
    * @deprecated use setMusicReleaseFormat
    */
    public function musicReleaseFormat($value)
    {
        $this->setProperty('musicReleaseFormat', $value);
        return $this;
    }
   /**
    * @param MusicReleaseFormatType|array|string $value
    * @return $this
    */
    public function setMusicReleaseFormat($value)
    {
        $this->setProperty('musicReleaseFormat', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicReleaseFormat()
    {
       return $this->getProperty('musicReleaseFormat');
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration|array|string $value
    * @return $this
    * @deprecated use setDuration
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
   /**
    * @param Duration|array|string $value
    * @return $this
    */
    public function setDuration($value)
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
