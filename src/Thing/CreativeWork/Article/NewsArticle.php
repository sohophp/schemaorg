<?php

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
 * Class NewsArticle
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
 * @see https://schema.org/NewsArticle
 */
class NewsArticle extends Article
{
    /**
     * @param string $value
     * @return $this
     */
    public function dateline(string $value)
    {
        $this->setProperty('dateline', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function printColumn(string $value)
    {
        $this->setProperty('printColumn', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function printEdition(string $value)
    {
        $this->setProperty('printEdition', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function printPage(string $value)
    {
        $this->setProperty('printPage', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */

    public function printSection(string $value)
    {
        $this->setProperty('printSection', $value);
        return $this;
    }

}
