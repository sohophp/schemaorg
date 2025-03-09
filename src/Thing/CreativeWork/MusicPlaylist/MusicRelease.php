<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist;

/**
* A MusicRelease is a specific release of a music album.
* @see schema:MusicRelease
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist
*/
class MusicRelease extends MusicPlaylist
{
   /**
        * Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).
        */
    protected $musicReleaseFormat = null;

   /**
        * The album this is a release of.
        */
    protected $releaseOf = null;

   /**
        * The label that issued the release.
        */
    protected $recordLabel = null;

   /**
        * The catalog number for the release.
        */
    protected $catalogNumber = null;

   /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $duration = null;

   /**
        * The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
        */
    protected $creditedTo = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setMusicReleaseFormat($value)
    {
        $this->setProperty('musicReleaseFormat', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicReleaseFormat()
    {
       return $this->getProperty('musicReleaseFormat');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReleaseOf($value)
    {
        $this->setProperty('releaseOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReleaseOf()
    {
       return $this->getProperty('releaseOf');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecordLabel($value)
    {
        $this->setProperty('recordLabel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecordLabel()
    {
       return $this->getProperty('recordLabel');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCatalogNumber($value)
    {
        $this->setProperty('catalogNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCatalogNumber()
    {
       return $this->getProperty('catalogNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCreditedTo($value)
    {
        $this->setProperty('creditedTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCreditedTo()
    {
       return $this->getProperty('creditedTo');
    }


}
