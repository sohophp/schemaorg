<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A [blog](https://en.wikipedia.org/wiki/Blog), sometimes known as a "weblog".
 * Note that the individual posts ([[BlogPosting]]s) in a [[Blog]] are often
 * colloquially referred to by the same term.
* @see schema:Blog
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Blog extends CreativeWork
{


    /**
        * A posting that is part of this blog.
        * @param array|string|mixed $value
    * @return $this
    */
    public function blogPost($value)
    {
        $this->setProperty('blogPost', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBlogPost($value)
    {
        $this->setProperty('blogPost', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBlogPost()
    {
       return $this->getProperty('blogPost');
    }


    /**
        * Indicates a post that is part of a [[Blog]]. Note that historically, what we
 * term a "Blog" was once known as a "weblog", and that what we term a
 * "BlogPosting" is now often colloquially referred to as a "blog".
        * @param array|string|mixed $value
    * @return $this
    */
    public function blogPosts($value)
    {
        $this->setProperty('blogPosts', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBlogPosts($value)
    {
        $this->setProperty('blogPosts', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBlogPosts()
    {
       return $this->getProperty('blogPosts');
    }


    /**
        * The International Standard Serial Number (ISSN) that identifies this serial
 * publication. You can repeat this property to identify different formats of,
 * or the linking ISSN (ISSN-L) for, this serial publication.
        * @param array|string|mixed $value
    * @return $this
    */
    public function issn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIssn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssn()
    {
       return $this->getProperty('issn');
    }


}
