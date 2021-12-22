<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\SpeakableSpecification;

/**
* An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.<br/><br/>

See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
* @see http://schema.org/Article
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Article extends CreativeWork
{

    /**
    * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
    * @param string|array $value
    * @return $this
    */
    public function pagination(?string $value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPagination(?string $value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPagination()
    {
       return $this->getProperty('pagination');
    }

    /**
    * The number of words in the text of the Article.
    * @param int|array $value
    * @return $this
    */
    public function wordCount(?int $value)
    {
        $this->setProperty('wordCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setWordCount(?int $value)
    {
        $this->setProperty('wordCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWordCount()
    {
       return $this->getProperty('wordCount');
    }

    /**
    * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.<br/><br/>

The <em>speakable</em> property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:<br/><br/>

1.) <em>id-value</em> URL references - uses <em>id-value</em> of an element in the page being annotated. The simplest use of <em>speakable</em> has (potentially relative) URL values, referencing identified sections of the document concerned.<br/><br/>

2.) CSS Selectors - addresses content in the annotated page, eg. via class attribute. Use the <a class="localLink" href="http://schema.org/cssSelector">cssSelector</a> property.<br/><br/>

3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the <a class="localLink" href="http://schema.org/xpath">xpath</a> property.<br/><br/>

For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
we define a supporting type, <a class="localLink" href="http://schema.org/SpeakableSpecification">SpeakableSpecification</a>  which is defined to be a possible value of the <em>speakable</em> property.
    * @param SpeakableSpecification|string|array $value
    * @return $this
    */
    public function speakable($value)
    {
        $this->setProperty('speakable', $value);
        return $this;
    }
   /**
    * @param SpeakableSpecification|string|array $value
    * @return $this
    */
    public function setSpeakable($value)
    {
        $this->setProperty('speakable', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSpeakable()
    {
       return $this->getProperty('speakable');
    }

    /**
    * The page on which the work ends; for example "138" or "xvi".
    * @param string|int|array $value
    * @return $this
    */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }
   /**
    * @param string|int|array $value
    * @return $this
    */
    public function setPageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPageEnd()
    {
       return $this->getProperty('pageEnd');
    }

    /**
    * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
    * @param string|array $value
    * @return $this
    */
    public function articleSection(?string $value)
    {
        $this->setProperty('articleSection', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setArticleSection(?string $value)
    {
        $this->setProperty('articleSection', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArticleSection()
    {
       return $this->getProperty('articleSection');
    }

    /**
    * For an <a class="localLink" href="http://schema.org/Article">Article</a>, typically a <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a>, the backstory property provides a textual summary giving a brief explanation of why and how an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function backstory($value)
    {
        $this->setProperty('backstory', $value);
        return $this;
    }
   /**
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function setBackstory($value)
    {
        $this->setProperty('backstory', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBackstory()
    {
       return $this->getProperty('backstory');
    }

    /**
    * The page on which the work starts; for example "135" or "xiii".
    * @param string|int|array $value
    * @return $this
    */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }
   /**
    * @param string|int|array $value
    * @return $this
    */
    public function setPageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPageStart()
    {
       return $this->getProperty('pageStart');
    }

    /**
    * The actual body of the article.
    * @param string|array $value
    * @return $this
    */
    public function articleBody(?string $value)
    {
        $this->setProperty('articleBody', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setArticleBody(?string $value)
    {
        $this->setProperty('articleBody', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArticleBody()
    {
       return $this->getProperty('articleBody');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Article','Thing\\Article');

