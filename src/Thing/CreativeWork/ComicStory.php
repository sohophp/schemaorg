<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The term "story" is any indivisible, re-printable unit of a comic, including the interior stories, covers, and backmatter. Most comics have at least two stories: a cover (ComicCoverArt) and an interior story.
 * @see https://schema.org/ComicStory
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class ComicStory extends CreativeWork
{
    /**
     * The individual who traces over the pencil drawings in ink after pencils are complete.
     * @see https://schema.org/inker
     * @param Person|array $value
     * @return $this
     */
    public function inker($value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setInker($value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addInker($value)
    {
        $current = $this->getProperty('inker');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inker', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getInker()
    {
        return $this->getProperty('inker');
    }
    /**
     * The individual who draws the primary narrative artwork.
     * @see https://schema.org/penciler
     * @param Person|array $value
     * @return $this
     */
    public function penciler($value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setPenciler($value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addPenciler($value)
    {
        $current = $this->getProperty('penciler');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('penciler', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getPenciler()
    {
        return $this->getProperty('penciler');
    }
    /**
     * The primary artist for a work in a medium other than pencils or digital line art--for example, if the primary artwork is done in watercolors or digital paints.
     * @see https://schema.org/artist
     * @param Person|array $value
     * @return $this
     */
    public function artist($value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setArtist($value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addArtist($value)
    {
        $current = $this->getProperty('artist');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('artist', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getArtist()
    {
        return $this->getProperty('artist');
    }
    /**
     * The individual who adds color to inked drawings.
     * @see https://schema.org/colorist
     * @param Person|array $value
     * @return $this
     */
    public function colorist($value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setColorist($value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addColorist($value)
    {
        $current = $this->getProperty('colorist');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('colorist', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getColorist()
    {
        return $this->getProperty('colorist');
    }
    /**
     * The individual who adds lettering, including speech balloons and sound effects, to artwork.
     * @see https://schema.org/letterer
     * @param Person|array $value
     * @return $this
     */
    public function letterer($value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setLetterer($value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addLetterer($value)
    {
        $current = $this->getProperty('letterer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('letterer', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getLetterer()
    {
        return $this->getProperty('letterer');
    }
}
