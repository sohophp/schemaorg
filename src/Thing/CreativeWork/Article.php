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

