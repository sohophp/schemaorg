<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A post to a social media platform, including blog posts, tweets, Facebook
 * posts, etc.
* @see http://schema.org/SocialMediaPosting
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class SocialMediaPosting extends Article
{


    /**
        * A CreativeWork such as an image, video, or audio clip shared as part of this
 * posting.
        * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function sharedContent($value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }

    /**
    * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function setSharedContent($value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSharedContent()
    {
       return $this->getProperty('sharedContent');
    }


}
