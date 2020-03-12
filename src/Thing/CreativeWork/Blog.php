<?php declare(strict_types=1);
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
    * @param BlogPosting|array $value
    * @return $this
    */
    public function blogPosts(?BlogPosting $value)
    {
        $this->setProperty('blogPosts', $value);
        return $this;
    }
   /**
    * @param BlogPosting|array $value
    * @return $this
    */
    public function setBlogPosts(?BlogPosting $value)
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
    * @param BlogPosting|array $value
    * @return $this
    */
    public function blogPost(?BlogPosting $value)
    {
        $this->setProperty('blogPost', $value);
        return $this;
    }
   /**
    * @param BlogPosting|array $value
    * @return $this
    */
    public function setBlogPost(?BlogPosting $value)
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
    */
    public function issn(?string $value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIssn(?string $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Blog','Thing\\Blog');

