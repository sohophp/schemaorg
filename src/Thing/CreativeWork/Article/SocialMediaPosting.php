<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A post to a social media platform, including blog posts, tweets, Facebook posts, etc.
* @see http://schema.org/SocialMediaPosting
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article

*
*/
class SocialMediaPosting extends Article
{

    /**
    * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function sharedContent(?CreativeWork $value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setSharedContent(?CreativeWork $value)
    {
        $this->setProperty('sharedContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSharedContent()
    {
       return $this->getProperty('sharedContent');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Article\\SocialMediaPosting','Thing\\SocialMediaPosting');

