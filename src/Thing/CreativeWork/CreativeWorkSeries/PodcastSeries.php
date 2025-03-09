<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

/**
* A podcast is an episodic series of digital audio or video files which a user can download and listen to.
* @see schema:PodcastSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries
*/
class PodcastSeries extends CreativeWorkSeries
{
   /**
        * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
        */
    protected $webFeed = null;

   /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actor = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setWebFeed($value)
    {
        $this->setProperty('webFeed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWebFeed()
    {
       return $this->getProperty('webFeed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }


}
