<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;

/**
 * A single item within a larger data feed.
 * @see https://schema.org/DataFeedItem
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class DataFeedItem extends Intangible
{
    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
     * @see https://schema.org/item
     * @param Thing|array $value
     * @return $this
     */
    public function item($value)
    {
        $this->setProperty('item', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setItem($value)
    {
        $this->setProperty('item', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addItem($value)
    {
        $current = $this->getProperty('item');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('item', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getItem()
    {
        return $this->getProperty('item');
    }
    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @see https://schema.org/dateCreated
     * @param mixed $value
     * @return $this
     */
    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateCreated($value)
    {
        $current = $this->getProperty('dateCreated');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateCreated', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->getProperty('dateCreated');
    }
    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @see https://schema.org/dateModified
     * @param mixed $value
     * @return $this
     */
    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateModified($value)
    {
        $current = $this->getProperty('dateModified');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateModified', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->getProperty('dateModified');
    }
    /**
     * The datetime the item was removed from the DataFeed.
     * @see https://schema.org/dateDeleted
     * @param mixed $value
     * @return $this
     */
    public function dateDeleted($value)
    {
        $this->setProperty('dateDeleted', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateDeleted($value)
    {
        $this->setProperty('dateDeleted', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateDeleted($value)
    {
        $current = $this->getProperty('dateDeleted');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateDeleted', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateDeleted()
    {
        return $this->getProperty('dateDeleted');
    }
}
