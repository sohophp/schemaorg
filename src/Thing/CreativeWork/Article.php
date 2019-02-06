<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
/**
* An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.<br/><br/>

See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
* @see http://schema.org/Article
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Article extends CreativeWork
{

     
     /**
     * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     * @param string $value
     * @return $this
     */

     public function pagination(?string $value):self
     {
        $this->setProperty("pagination",$value);
        return $this;
     }

     
     /**
     * The page on which the work ends; for example "138" or "xvi".
     * @param int|string $value
     * @return $this
     */

     public function pageEnd( $value):self
     {
        $this->setProperty("pageEnd",$value);
        return $this;
     }

     
     /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     * @param string $value
     * @return $this
     */

     public function articleSection(?string $value):self
     {
        $this->setProperty("articleSection",$value);
        return $this;
     }

     
     /**
     * The actual body of the article.
     * @param string $value
     * @return $this
     */

     public function articleBody(?string $value):self
     {
        $this->setProperty("articleBody",$value);
        return $this;
     }

     
     /**
     * The page on which the work starts; for example "135" or "xiii".
     * @param string|int $value
     * @return $this
     */

     public function pageStart( $value):self
     {
        $this->setProperty("pageStart",$value);
        return $this;
     }

     
     /**
     * The number of words in the text of the Article.
     * @param int $value
     * @return $this
     */

     public function wordCount(?int $value):self
     {
        $this->setProperty("wordCount",$value);
        return $this;
     }

     
}

