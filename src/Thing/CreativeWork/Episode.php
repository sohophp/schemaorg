<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A media episode (e.g. TV, radio, video game) which can be part of a series or
 * season.
* @see schema:Episode
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Episode extends CreativeWork
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
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * duration format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param array|string|mixed $value
    * @return $this
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }


    /**
        * Position of the episode within an ordered group of episodes.
        * @param array|string|mixed $value
    * @return $this
    */
    public function episodeNumber($value)
    {
        $this->setProperty('episodeNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEpisodeNumber($value)
    {
        $this->setProperty('episodeNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpisodeNumber()
    {
       return $this->getProperty('episodeNumber');
    }


    /**
        * The production company or studio responsible for the item, e.g. series, video
 * game, episode etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductionCompany()
    {
       return $this->getProperty('productionCompany');
    }


    /**
        * The trailer of a movie or TV/radio series, season, episode, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrailer()
    {
       return $this->getProperty('trailer');
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
