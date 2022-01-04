<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;

/**
* The term "story" is any indivisible, re-printable
    unit of a comic, including the interior stories, covers, and backmatter. Most
    comics have at least two stories: a cover (ComicCoverArt) and an interior story.
* @see http://schema.org/ComicStory
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class ComicStory extends CreativeWork
{

    /**
    * The individual who traces over the pencil drawings in ink after pencils are complete.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setInker
    */
    public function inker($value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setInker($value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInker()
    {
       return $this->getProperty('inker');
    }

    /**
    * The primary artist for a work
    in a medium other than pencils or digital line art--for example, if the
    primary artwork is done in watercolors or digital paints.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setArtist
    */
    public function artist($value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setArtist($value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArtist()
    {
       return $this->getProperty('artist');
    }

    /**
    * The individual who draws the primary narrative artwork.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setPenciler
    */
    public function penciler($value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setPenciler($value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPenciler()
    {
       return $this->getProperty('penciler');
    }

    /**
    * The individual who adds color to inked drawings.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setColorist
    */
    public function colorist($value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setColorist($value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getColorist()
    {
       return $this->getProperty('colorist');
    }

    /**
    * The individual who adds lettering, including speech balloons and sound effects, to artwork.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setLetterer
    */
    public function letterer($value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setLetterer($value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLetterer()
    {
       return $this->getProperty('letterer');
    }


}
