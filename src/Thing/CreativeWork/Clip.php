<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A short TV or radio program or a segment/part of a program.
* @see schema:Clip
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Clip extends CreativeWork
{
   /**
        * The series to which this episode or season belongs.
        */
    protected $partOfSeries = null;

   /**
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $directors = null;

   /**
        * The episode to which this clip belongs.
        */
    protected $partOfEpisode = null;

   /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $director = null;

   /**
        * The season to which this episode belongs.
        */
    protected $partOfSeason = null;

   /**
        * The end time of the clip expressed as the number of seconds from the beginning of the work.
        */
    protected $endOffset = null;

   /**
        * The start time of the clip expressed as the number of seconds from the beginning of the work.
        */
    protected $startOffset = null;

   /**
        * Position of the clip within an ordered group of clips.
        */
    protected $clipNumber = null;

   /**
        * The composer of the soundtrack.
        */
    protected $musicBy = null;

   /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actor = null;

   /**
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actors = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPartOfSeries($value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfSeries()
    {
       return $this->getProperty('partOfSeries');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPartOfEpisode($value)
    {
        $this->setProperty('partOfEpisode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfEpisode()
    {
       return $this->getProperty('partOfEpisode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPartOfSeason($value)
    {
        $this->setProperty('partOfSeason', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfSeason()
    {
       return $this->getProperty('partOfSeason');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEndOffset($value)
    {
        $this->setProperty('endOffset', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndOffset()
    {
       return $this->getProperty('endOffset');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStartOffset($value)
    {
        $this->setProperty('startOffset', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartOffset()
    {
       return $this->getProperty('startOffset');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setClipNumber($value)
    {
        $this->setProperty('clipNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getClipNumber()
    {
       return $this->getProperty('clipNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
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

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }


}
