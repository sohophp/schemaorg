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
        * @param array|string|mixed $value
    * @return $this
    */
    public function partOfSeries($value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can
 * be associated with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The episode to which this clip belongs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function partOfEpisode($value)
    {
        $this->setProperty('partOfEpisode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
 * event. Directors can be associated with individual items or with a series,
 * episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The season to which this episode belongs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function partOfSeason($value)
    {
        $this->setProperty('partOfSeason', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function clipNumber($value)
    {
        $this->setProperty('clipNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The composer of the soundtrack.
        * @param array|string|mixed $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc.,
 * or in an event. Actors can be associated with individual items or with a
 * series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated
 * with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
