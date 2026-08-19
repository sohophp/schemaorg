<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue;

use Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * Individual comic issues are serially published as part of a larger series. For the sake of consistency, even one-shot issues belong to a series comprised of a single issue. All comic issues can be uniquely identified by: the combination of the name and volume number of the series to which the issue belongs; the issue number; and the variant description of the issue (if any).
 * @see https://schema.org/ComicIssue
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue
 */
class ComicIssue extends PublicationIssue
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
    /**
     * A description of the variant cover for the issue, if the issue is a variant printing. For example, "Bryan Hitch Variant Cover" or "2nd Printing Variant".
     * @see https://schema.org/variantCover
     * @param string|array $value
     * @return $this
     */
    public function variantCover($value)
    {
        $this->setProperty('variantCover', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setVariantCover($value)
    {
        $this->setProperty('variantCover', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addVariantCover($value)
    {
        $current = $this->getProperty('variantCover');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('variantCover', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getVariantCover()
    {
        return $this->getProperty('variantCover');
    }
}
