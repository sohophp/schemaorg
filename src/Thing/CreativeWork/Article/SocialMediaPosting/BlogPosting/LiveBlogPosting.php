<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

/**
* A [[LiveBlogPosting]] is a [[BlogPosting]] intended to provide a rolling textual coverage of an ongoing event through continuous updates.
* @see schema:LiveBlogPosting
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting
*/
class LiveBlogPosting extends BlogPosting
{
   /**
        * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
        */
    protected $coverageStartTime = null;

   /**
        * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
        */
    protected $coverageEndTime = null;

   /**
        * An update to the LiveBlog.
        */
    protected $liveBlogUpdate = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setCoverageStartTime($value)
    {
        $this->setProperty('coverageStartTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCoverageStartTime()
    {
       return $this->getProperty('coverageStartTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCoverageEndTime($value)
    {
        $this->setProperty('coverageEndTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCoverageEndTime()
    {
       return $this->getProperty('coverageEndTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLiveBlogUpdate($value)
    {
        $this->setProperty('liveBlogUpdate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLiveBlogUpdate()
    {
       return $this->getProperty('liveBlogUpdate');
    }


}
