<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles. See also [blog post](https://blog-schema.org/2014/09/02/schema-org-support-for-bibliographic-relationships-and-periodicals/).
 * @see https://schema.org/PublicationIssue
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class PublicationIssue extends CreativeWork
{
    /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @see https://schema.org/pagination
     * @param string|array $value
     * @return $this
     */
    public function pagination($value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPagination($value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPagination($value)
    {
        $current = $this->getProperty('pagination');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pagination', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPagination()
    {
        return $this->getProperty('pagination');
    }
    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     * @see https://schema.org/issueNumber
     * @param string|int|array $value
     * @return $this
     */
    public function issueNumber($value)
    {
        $this->setProperty('issueNumber', $value);
        return $this;
    }

    /**
     * @param string|int|array $value
     * @return $this
     */
    public function setIssueNumber($value)
    {
        $this->setProperty('issueNumber', $value);
        return $this;
    }

    /**
     * @param string|int $value
     * @return $this
     */
    public function addIssueNumber($value)
    {
        $current = $this->getProperty('issueNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issueNumber', $current);
        return $this;
    }

    /**
     * @return string|int|array
     */
    public function getIssueNumber()
    {
        return $this->getProperty('issueNumber');
    }
    /**
     * The page on which the work ends; for example "138" or "xvi".
     * @see https://schema.org/pageEnd
     * @param int|string|array $value
     * @return $this
     */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
     * @param int|string|array $value
     * @return $this
     */
    public function setPageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
     * @param int|string $value
     * @return $this
     */
    public function addPageEnd($value)
    {
        $current = $this->getProperty('pageEnd');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pageEnd', $current);
        return $this;
    }

    /**
     * @return int|string|array
     */
    public function getPageEnd()
    {
        return $this->getProperty('pageEnd');
    }
    /**
     * The page on which the work starts; for example "135" or "xiii".
     * @see https://schema.org/pageStart
     * @param int|string|array $value
     * @return $this
     */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }

    /**
     * @param int|string|array $value
     * @return $this
     */
    public function setPageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }

    /**
     * @param int|string $value
     * @return $this
     */
    public function addPageStart($value)
    {
        $current = $this->getProperty('pageStart');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pageStart', $current);
        return $this;
    }

    /**
     * @return int|string|array
     */
    public function getPageStart()
    {
        return $this->getProperty('pageStart');
    }
}
