<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\HyperTocEntry;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
 * A HyperToc represents a hypertext table of contents for complex media objects, such as [[VideoObject]], [[AudioObject]]. Items in the table of contents are indicated using the [[tocEntry]] property, and typed [[HyperTocEntry]]. For cases where the same larger work is split into multiple files, [[associatedMedia]] can be used on individual [[HyperTocEntry]] items.
 * @see https://schema.org/HyperToc
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class HyperToc extends CreativeWork
{
    /**
     * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
     * @see https://schema.org/tocEntry
     * @param HyperTocEntry|array $value
     * @return $this
     */
    public function tocEntry($value)
    {
        $this->setProperty('tocEntry', $value);
        return $this;
    }

    /**
     * @param HyperTocEntry|array $value
     * @return $this
     */
    public function setTocEntry($value)
    {
        $this->setProperty('tocEntry', $value);
        return $this;
    }

    /**
     * @param HyperTocEntry $value
     * @return $this
     */
    public function addTocEntry($value)
    {
        $current = $this->getProperty('tocEntry');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('tocEntry', $current);
        return $this;
    }

    /**
     * @return HyperTocEntry|array
     */
    public function getTocEntry()
    {
        return $this->getProperty('tocEntry');
    }
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @see https://schema.org/associatedMedia
     * @param MediaObject|array $value
     * @return $this
     */
    public function associatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject|array $value
     * @return $this
     */
    public function setAssociatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject $value
     * @return $this
     */
    public function addAssociatedMedia($value)
    {
        $current = $this->getProperty('associatedMedia');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('associatedMedia', $current);
        return $this;
    }

    /**
     * @return MediaObject|array
     */
    public function getAssociatedMedia()
    {
        return $this->getProperty('associatedMedia');
    }
}
