<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;

/**
* A short TV or radio program or a segment/part of a program.
* @see http://schema.org/Clip
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Clip extends CreativeWork
{


    /**
        * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors
 * can be associated with individual items or with a series, episode, clip.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
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
        * The series to which this episode or season belongs.
        * @param CreativeWorkSeries|array|string|mixed $value
    * @return $this
    */
    public function partOfSeries($value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }

    /**
    * @param CreativeWorkSeries|array|string|mixed $value
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
        * The episode to which this clip belongs.
        * @param Episode|array|string|mixed $value
    * @return $this
    */
    public function partOfEpisode($value)
    {
        $this->setProperty('partOfEpisode', $value);
        return $this;
    }

    /**
    * @param Episode|array|string|mixed $value
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
        * The season to which this episode belongs.
        * @param CreativeWorkSeason|array|string|mixed $value
    * @return $this
    */
    public function partOfSeason($value)
    {
        $this->setProperty('partOfSeason', $value);
        return $this;
    }

    /**
    * @param CreativeWorkSeason|array|string|mixed $value
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
        * The composer of the soundtrack.
        * @param Person|MusicGroup|array|string|mixed $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @param Person|MusicGroup|array|string|mixed $value
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
        * A director of e.g. tv, radio, movie, video games etc. content. Directors can
 * be associated with individual items or with a series, episode, clip.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
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
        * The end time of the clip expressed as the number of seconds from the
 * beginning of the work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function endOffset($value)
    {
        $this->setProperty('endOffset', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
 * event. Directors can be associated with individual items or with a series,
 * episode, clip.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
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
        * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated
 * with individual items or with a series, episode, clip.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
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


    /**
        * The start time of the clip expressed as the number of seconds from the
 * beginning of the work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function startOffset($value)
    {
        $this->setProperty('startOffset', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Position of the clip within an ordered group of clips.
        * @param string|int|array|mixed $value
    * @return $this
    */
    public function clipNumber($value)
    {
        $this->setProperty('clipNumber', $value);
        return $this;
    }

    /**
    * @param string|int|array|mixed $value
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


}
