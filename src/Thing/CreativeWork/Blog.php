<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

/**
* A blog.
* @see http://schema.org/Blog
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Blog extends CreativeWork
{

    /**
    * The postings that are part of this blog.
    * @param BlogPosting|array|string $value
    * @return $this
    * @deprecated use setBlogPosts
    */
    public function blogPosts($value)
    {
        $this->setProperty('blogPosts', $value);
        return $this;
    }
   /**
    * @param BlogPosting|array|string $value
    * @return $this
    */
    public function setBlogPosts($value)
    {
        $this->setProperty('blogPosts', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBlogPosts()
    {
       return $this->getProperty('blogPosts');
    }

    /**
    * A posting that is part of this blog.
    * @param BlogPosting|array|string $value
    * @return $this
    * @deprecated use setBlogPost
    */
    public function blogPost($value)
    {
        $this->setProperty('blogPost', $value);
        return $this;
    }
   /**
    * @param BlogPosting|array|string $value
    * @return $this
    */
    public function setBlogPost($value)
    {
        $this->setProperty('blogPost', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBlogPost()
    {
       return $this->getProperty('blogPost');
    }

    /**
    * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
    * @param string|array $value
    * @return $this
    * @deprecated use setIssn
    */
    public function issn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIssn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIssn()
    {
       return $this->getProperty('issn');
    }


}
