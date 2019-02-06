<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;
/**
* A blog.
* @see http://schema.org/Blog
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Blog extends CreativeWork
{

     
     /**
     * The postings that are part of this blog.
     * @param BlogPosting $value
     * @return $this
     */

     public function blogPosts(?BlogPosting $value):self
     {
        $this->setProperty("blogPosts",$value);
        return $this;
     }

     
     /**
     * A posting that is part of this blog.
     * @param BlogPosting $value
     * @return $this
     */

     public function blogPost(?BlogPosting $value):self
     {
        $this->setProperty("blogPost",$value);
        return $this;
     }

     
     /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     * @param string $value
     * @return $this
     */

     public function issn(?string $value):self
     {
        $this->setProperty("issn",$value);
        return $this;
     }

     
}

