<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news.

A more detailed overview of [schema.org News markup](/docs/news.html) is also available.

* @see schema:NewsArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class NewsArticle extends Article
{
   /**
        * The edition of the print product in which the NewsArticle appears.
        */
    protected $printEdition = null;

   /**
        * The number of the column in which the NewsArticle appears in the print edition.
        */
    protected $printColumn = null;

   /**
        * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
        */
    protected $printSection = null;

   /**
        * A [dateline](https://en.wikipedia.org/wiki/Dateline) is a brief piece of text included in news articles that describes where and when the story was written or filed though the date is often omitted. Sometimes only a placename is provided.

Structured representations of dateline-related information can also be expressed more explicitly using [[locationCreated]] (which represents where a work was created, e.g. where a news report was written).  For location depicted or described in the content, use [[contentLocation]].

Dateline summaries are oriented more towards human readers than towards automated processing, and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
      
        */
    protected $dateline = null;

   /**
        * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
        */
    protected $printPage = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPrintEdition($value)
    {
        $this->setProperty('printEdition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrintEdition()
    {
       return $this->getProperty('printEdition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPrintColumn($value)
    {
        $this->setProperty('printColumn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrintColumn()
    {
       return $this->getProperty('printColumn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPrintSection($value)
    {
        $this->setProperty('printSection', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrintSection()
    {
       return $this->getProperty('printSection');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDateline($value)
    {
        $this->setProperty('dateline', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateline()
    {
       return $this->getProperty('dateline');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPrintPage($value)
    {
        $this->setProperty('printPage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrintPage()
    {
       return $this->getProperty('printPage');
    }


}
