<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A media episode (e.g. TV, radio, video game) which can be part of a series or
 * season.
* @see http://schema.org/Episode
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Episode extends CreativeWork
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
        * The trailer of a movie or tv/radio series, season, episode, etc.
        * @param VideoObject|array|string|mixed $value
    * @return $this
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @param VideoObject|array|string|mixed $value
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
        * Position of the episode within an ordered group of episodes.
        * @param string|int|array|mixed $value
    * @return $this
    */
    public function episodeNumber($value)
    {
        $this->setProperty('episodeNumber', $value);
        return $this;
    }

    /**
    * @param string|int|array|mixed $value
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
        * The production company or studio responsible for the item e.g. series, video
 * game, episode etc.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
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


}
