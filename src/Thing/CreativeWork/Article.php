<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.\n\nSee also [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
* @see schema:Article
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Article extends CreativeWork
{
   /**
        * The actual body of the article.
        */
    protected $articleBody = null;

   /**
        * The page on which the work ends; for example "138" or "xvi".
        */
    protected $pageEnd = null;

   /**
        * The number of words in the text of the Article.
        */
    protected $wordCount = null;

   /**
        * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
        */
    protected $pagination = null;

   /**
        * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.

The *speakable* property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:

1.) *id-value* URL references - uses *id-value* of an element in the page being annotated. The simplest use of *speakable* has (potentially relative) URL values, referencing identified sections of the document concerned.

2.) CSS Selectors - addresses content in the annotated page, e.g. via class attribute. Use the [[cssSelector]] property.

3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the [[xpath]] property.


For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
we define a supporting type, [[SpeakableSpecification]]  which is defined to be a possible value of the *speakable* property.
         
        */
    protected $speakable = null;

   /**
        * For an [[Article]], typically a [[NewsArticle]], the backstory property provides a textual summary giving a brief explanation of why and how an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
        */
    protected $backstory = null;

   /**
        * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
        */
    protected $articleSection = null;

   /**
        * The page on which the work starts; for example "135" or "xiii".
        */
    protected $pageStart = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setArticleBody($value)
    {
        $this->setProperty('articleBody', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArticleBody()
    {
       return $this->getProperty('articleBody');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPageEnd()
    {
       return $this->getProperty('pageEnd');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWordCount($value)
    {
        $this->setProperty('wordCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWordCount()
    {
       return $this->getProperty('wordCount');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPagination($value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPagination()
    {
       return $this->getProperty('pagination');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSpeakable($value)
    {
        $this->setProperty('speakable', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpeakable()
    {
       return $this->getProperty('speakable');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBackstory($value)
    {
        $this->setProperty('backstory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBackstory()
    {
       return $this->getProperty('backstory');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArticleSection($value)
    {
        $this->setProperty('articleSection', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArticleSection()
    {
       return $this->getProperty('articleSection');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPageStart()
    {
       return $this->getProperty('pageStart');
    }


}
