<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A CreativeWorkSeries in schema.org is a group of related items, typically but not necessarily of the same kind. CreativeWorkSeries are usually organized into some order, often chronological. Unlike [[ItemList]] which is a general purpose data structure for lists of things, the emphasis with CreativeWorkSeries is on published materials (written e.g. books and periodicals, or media such as TV, radio and games). Specific subtypes are available for describing [[TVSeries]], [[RadioSeries]], [[MovieSeries]], [[BookSeries]], [[Periodical]] and [[VideoGameSeries]]. In each case, the [[hasPart]] / [[isPartOf]] properties can be used to relate the CreativeWorkSeries to its parts. The general CreativeWorkSeries type serves largely just to organize these more specific and practical subtypes. It is common for properties applicable to an item from the series to be usefully applied to the containing group. Schema.org attempts to anticipate some of these cases, but publishers should be free to apply properties of the series parts to the series as a whole wherever they seem appropriate.
 * @see https://schema.org/CreativeWorkSeries
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class CreativeWorkSeries extends CreativeWork
{
    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @see https://schema.org/endDate
     * @param mixed $value
     * @return $this
     */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addEndDate($value)
    {
        $current = $this->getProperty('endDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('endDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }
    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @see https://schema.org/startDate
     * @param mixed $value
     * @return $this
     */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addStartDate($value)
    {
        $current = $this->getProperty('startDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('startDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }
    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     * @see https://schema.org/issn
     * @param string|array $value
     * @return $this
     */
    public function issn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setIssn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addIssn($value)
    {
        $current = $this->getProperty('issn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issn', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIssn()
    {
        return $this->getProperty('issn');
    }
}
