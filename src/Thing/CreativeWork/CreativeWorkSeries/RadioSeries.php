<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

/**
* CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
* @see schema:RadioSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries
*/
class RadioSeries extends CreativeWorkSeries
{
   /**
        * The number of seasons in this series.
        */
    protected $numberOfSeasons = null;

   /**
        * An episode of a TV, radio or game media within a series or season.
        */
    protected $episode = null;

   /**
        * A season in a media series.
        */
    protected $seasons = null;

   /**
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $directors = null;

   /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $director = null;

   /**
        * A season that is part of the media series.
        */
    protected $containsSeason = null;

   /**
        * A season in a media series.
        */
    protected $season = null;

   /**
        * The number of episodes in this season or series.
        */
    protected $numberOfEpisodes = null;

   /**
        * An episode of a TV/radio series or season.
        */
    protected $episodes = null;

   /**
        * The production company or studio responsible for the item, e.g. series, video game, episode etc.
        */
    protected $productionCompany = null;

   /**
        * The trailer of a movie or TV/radio series, season, episode, etc.
        */
    protected $trailer = null;

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
    public function setNumberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfSeasons()
    {
       return $this->getProperty('numberOfSeasons');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEpisode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpisode()
    {
       return $this->getProperty('episode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSeasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeasons()
    {
       return $this->getProperty('seasons');
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
    public function setContainsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContainsSeason()
    {
       return $this->getProperty('containsSeason');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSeason($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeason()
    {
       return $this->getProperty('season');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfEpisodes()
    {
       return $this->getProperty('numberOfEpisodes');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEpisodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpisodes()
    {
       return $this->getProperty('episodes');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
