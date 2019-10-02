<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;

/**
* The term "story" is any indivisible, re-printable
    unit of a comic, including the interior stories, covers, and backmatter. Most
    comics have at least two stories: a cover (ComicCoverArt) and an interior story.
* @see http://schema.org/ComicStory
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class ComicStory extends CreativeWork
{

    /**
    * The individual who traces over the pencil drawings in ink after pencils are complete.
    * @param Person $value
    * @return $this
    */
    public function inker(?Person $value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }

    /**
    * The primary artist for a work
    in a medium other than pencils or digital line art--for example, if the
    primary artwork is done in watercolors or digital paints.
    * @param Person $value
    * @return $this
    */
    public function artist(?Person $value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }

    /**
    * The individual who draws the primary narrative artwork.
    * @param Person $value
    * @return $this
    */
    public function penciler(?Person $value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }

    /**
    * The individual who adds color to inked drawings.
    * @param Person $value
    * @return $this
    */
    public function colorist(?Person $value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }

    /**
    * The individual who adds lettering, including speech balloons and sound effects, to artwork.
    * @param Person $value
    * @return $this
    */
    public function letterer(?Person $value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\ComicStory','Thing\\ComicStory');

