<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news.<br/><br/>

A more detailed overview of <a href="/docs/news.html">schema.org News markup</a> is also available.
* @see http://schema.org/NewsArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class NewsArticle extends Article
{

    /**
    * The number of the column in which the NewsArticle appears in the print edition.
    * @param string $value
    * @return $this
    */
    public function printColumn(?string $value)
    {
        $this->setProperty('printColumn', $value);
        return $this;
    }

    /**
    * The edition of the print product in which the NewsArticle appears.
    * @param string $value
    * @return $this
    */
    public function printEdition(?string $value)
    {
        $this->setProperty('printEdition', $value);
        return $this;
    }

    /**
    * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
    * @param string $value
    * @return $this
    */
    public function printSection(?string $value)
    {
        $this->setProperty('printSection', $value);
        return $this;
    }

    /**
    * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
    * @param string $value
    * @return $this
    */
    public function printPage(?string $value)
    {
        $this->setProperty('printPage', $value);
        return $this;
    }

    /**
    * A <a href="https://en.wikipedia.org/wiki/Dateline">dateline</a> is a brief piece of text included in news articles that describes where and when the story was written or filed though the date is often omitted. Sometimes only a placename is provided.<br/><br/>

Structured representations of dateline-related information can also be expressed more explicitly using <a class="localLink" href="http://schema.org/locationCreated">locationCreated</a> (which represents where a work was created e.g. where a news report was written).  For location depicted or described in the content, use <a class="localLink" href="http://schema.org/contentLocation">contentLocation</a>.<br/><br/>

Dateline summaries are oriented more towards human readers than towards automated processing, and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
    * @param string $value
    * @return $this
    */
    public function dateline(?string $value)
    {
        $this->setProperty('dateline', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Article\\NewsArticle','Thing\\NewsArticle');

