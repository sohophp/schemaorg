<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\ArchiveOrganization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;

/**
 * An intangible type to be applied to any archive content, carrying with it a set of properties required to describe archival items and collections.
 * @see https://schema.org/ArchiveComponent
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class ArchiveComponent extends CreativeWork
{
    /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
     * @see https://schema.org/holdingArchive
     * @param ArchiveOrganization|array $value
     * @return $this
     */
    public function holdingArchive($value)
    {
        $this->setProperty('holdingArchive', $value);
        return $this;
    }

    /**
     * @param ArchiveOrganization|array $value
     * @return $this
     */
    public function setHoldingArchive($value)
    {
        $this->setProperty('holdingArchive', $value);
        return $this;
    }

    /**
     * @param ArchiveOrganization $value
     * @return $this
     */
    public function addHoldingArchive($value)
    {
        $current = $this->getProperty('holdingArchive');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('holdingArchive', $current);
        return $this;
    }

    /**
     * @return ArchiveOrganization|array
     */
    public function getHoldingArchive()
    {
        return $this->getProperty('holdingArchive');
    }
    /**
     * Current location of the item.
     * @see https://schema.org/itemLocation
     * @param string|PostalAddress|Place|array $value
     * @return $this
     */
    public function itemLocation($value)
    {
        $this->setProperty('itemLocation', $value);
        return $this;
    }

    /**
     * @param string|PostalAddress|Place|array $value
     * @return $this
     */
    public function setItemLocation($value)
    {
        $this->setProperty('itemLocation', $value);
        return $this;
    }

    /**
     * @param string|PostalAddress|Place $value
     * @return $this
     */
    public function addItemLocation($value)
    {
        $current = $this->getProperty('itemLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('itemLocation', $current);
        return $this;
    }

    /**
     * @return string|PostalAddress|Place|array
     */
    public function getItemLocation()
    {
        return $this->getProperty('itemLocation');
    }
}
