<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* The term "story" is any indivisible, re-printable
    	unit of a comic, including the interior stories, covers, and backmatter. Most
    	comics have at least two stories: a cover (ComicCoverArt) and an interior story.
* @see schema:ComicStory
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class ComicStory extends CreativeWork
{
   /**
        * The individual who traces over the pencil drawings in ink after pencils are complete.
        */
    protected $inker = null;

   /**
        * The individual who adds lettering, including speech balloons and sound effects, to artwork.
        */
    protected $letterer = null;

   /**
        * The individual who adds color to inked drawings.
        */
    protected $colorist = null;

   /**
        * The individual who draws the primary narrative artwork.
        */
    protected $penciler = null;

   /**
        * The primary artist for a work
    	in a medium other than pencils or digital line art--for example, if the
    	primary artwork is done in watercolors or digital paints.
        */
    protected $artist = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setInker($value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInker()
    {
       return $this->getProperty('inker');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLetterer($value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLetterer()
    {
       return $this->getProperty('letterer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setColorist($value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getColorist()
    {
       return $this->getProperty('colorist');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPenciler($value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPenciler()
    {
       return $this->getProperty('penciler');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArtist($value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArtist()
    {
       return $this->getProperty('artist');
    }


}
