<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news.<br/><br/>

A more detailed overview of <a href="/docs/news.html">schema.org News markup</a> is also available.
* @see http://schema.org/NewsArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article

*
*/
class NewsArticle extends Article
{

    /**
    * The number of the column in which the NewsArticle appears in the print edition.
    * @param string|array $value
    * @return $this
    * @deprecated use setPrintColumn
    */
    public function printColumn($value)
    {
        $this->setProperty('printColumn', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPrintColumn($value)
    {
        $this->setProperty('printColumn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrintColumn()
    {
       return $this->getProperty('printColumn');
    }

    /**
    * The edition of the print product in which the NewsArticle appears.
    * @param string|array $value
    * @return $this
    * @deprecated use setPrintEdition
    */
    public function printEdition($value)
    {
        $this->setProperty('printEdition', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPrintEdition($value)
    {
        $this->setProperty('printEdition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrintEdition()
    {
       return $this->getProperty('printEdition');
    }

    /**
    * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
    * @param string|array $value
    * @return $this
    * @deprecated use setPrintSection
    */
    public function printSection($value)
    {
        $this->setProperty('printSection', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPrintSection($value)
    {
        $this->setProperty('printSection', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrintSection()
    {
       return $this->getProperty('printSection');
    }

    /**
    * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
    * @param string|array $value
    * @return $this
    * @deprecated use setPrintPage
    */
    public function printPage($value)
    {
        $this->setProperty('printPage', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPrintPage($value)
    {
        $this->setProperty('printPage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrintPage()
    {
       return $this->getProperty('printPage');
    }

    /**
    * A <a href="https://en.wikipedia.org/wiki/Dateline">dateline</a> is a brief piece of text included in news articles that describes where and when the story was written or filed though the date is often omitted. Sometimes only a placename is provided.<br/><br/>

Structured representations of dateline-related information can also be expressed more explicitly using <a class="localLink" href="http://schema.org/locationCreated">locationCreated</a> (which represents where a work was created e.g. where a news report was written).  For location depicted or described in the content, use <a class="localLink" href="http://schema.org/contentLocation">contentLocation</a>.<br/><br/>

Dateline summaries are oriented more towards human readers than towards automated processing, and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
    * @param string|array $value
    * @return $this
    * @deprecated use setDateline
    */
    public function dateline($value)
    {
        $this->setProperty('dateline', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDateline($value)
    {
        $this->setProperty('dateline', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDateline()
    {
       return $this->getProperty('dateline');
    }


}
