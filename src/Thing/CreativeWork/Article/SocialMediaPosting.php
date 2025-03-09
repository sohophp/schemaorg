<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* A post to a social media platform, including blog posts, tweets, Facebook posts, etc.
* @see schema:SocialMediaPosting
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class SocialMediaPosting extends Article
{
   /**
        * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
        */
    protected $sharedContent = null;


    /**
    * @param array|string $value
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
