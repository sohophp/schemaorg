<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A media season, e.g. TV, radio, video game etc.
* @see schema:CreativeWorkSeason
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class CreativeWorkSeason extends CreativeWork
{


    /**
        * An episode of a TV, radio or game media within a series or season.
        * @param array|string|mixed $value
    * @return $this
    */
    public function episode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The end date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
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
        * The start date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }


    /**
        * The number of episodes in this season or series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An episode of a TV/radio series or season.
        * @param array|string|mixed $value
    * @return $this
    */
    public function episodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Position of the season within an ordered group of seasons.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seasonNumber($value)
    {
        $this->setProperty('seasonNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSeasonNumber($value)
    {
        $this->setProperty('seasonNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeasonNumber()
    {
       return $this->getProperty('seasonNumber');
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


}
