<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

/**
* A blog post intended to provide a rolling textual coverage of an ongoing
 * event through continuous updates.
* @see http://schema.org/LiveBlogPosting
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting
*/
class LiveBlogPosting extends BlogPosting
{


    /**
        * The time when the live blog will begin covering the Event. Note that coverage
 * may begin before the Event's start time. The LiveBlogPosting may also be
 * created before coverage begins.
        * @param array|string|mixed $value
    * @return $this
    */
    public function coverageStartTime($value)
    {
        $this->setProperty('coverageStartTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The time when the live blog will stop covering the Event. Note that coverage
 * may continue after the Event concludes.
        * @param array|string|mixed $value
    * @return $this
    */
    public function coverageEndTime($value)
    {
        $this->setProperty('coverageEndTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An update to the LiveBlog.
        * @param BlogPosting|array|string|mixed $value
    * @return $this
    */
    public function liveBlogUpdate($value)
    {
        $this->setProperty('liveBlogUpdate', $value);
        return $this;
    }

    /**
    * @param BlogPosting|array|string|mixed $value
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
