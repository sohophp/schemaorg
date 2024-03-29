<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A media season e.g. tv, radio, video game etc.
* @see http://schema.org/CreativeWorkSeason
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class CreativeWorkSeason extends CreativeWork
{

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setActor
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * The series to which this episode or season belongs.
    * @param CreativeWorkSeries|array|string $value
    * @return $this
    * @deprecated use setPartOfSeries
    */
    public function partOfSeries($value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeries|array|string $value
    * @return $this
    */
    public function setPartOfSeries($value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartOfSeries()
    {
       return $this->getProperty('partOfSeries');
    }

    /**
    * The number of episodes in this season or series.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setNumberOfEpisodes
    */
    public function numberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setNumberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfEpisodes()
    {
       return $this->getProperty('numberOfEpisodes');
    }

    /**
    * The trailer of a movie or tv/radio series, season, episode, etc.
    * @param VideoObject|array|string $value
    * @return $this
    * @deprecated use setTrailer
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
   /**
    * @param VideoObject|array|string $value
    * @return $this
    */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrailer()
    {
       return $this->getProperty('trailer');
    }

    /**
    * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param array|string $value
    * @return $this
    * @deprecated use setEndDate
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
    }

    /**
    * An episode of a TV/radio series or season.
    * @param Episode|array|string $value
    * @return $this
    * @deprecated use setEpisodes
    */
    public function episodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }
   /**
    * @param Episode|array|string $value
    * @return $this
    */
    public function setEpisodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEpisodes()
    {
       return $this->getProperty('episodes');
    }

    /**
    * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param array|string $value
    * @return $this
    * @deprecated use setStartDate
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setDirector
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * The production company or studio responsible for the item e.g. series, video game, episode etc.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setProductionCompany
    */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProductionCompany()
    {
       return $this->getProperty('productionCompany');
    }

    /**
    * An episode of a tv, radio or game media within a series or season.
    * @param Episode|array|string $value
    * @return $this
    * @deprecated use setEpisode
    */
    public function episode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }
   /**
    * @param Episode|array|string $value
    * @return $this
    */
    public function setEpisode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEpisode()
    {
       return $this->getProperty('episode');
    }

    /**
    * Position of the season within an ordered group of seasons.
    * @param int|string|array $value
    * @return $this
    * @deprecated use setSeasonNumber
    */
    public function seasonNumber($value)
    {
        $this->setProperty('seasonNumber', $value);
        return $this;
    }
   /**
    * @param int|string|array $value
    * @return $this
    */
    public function setSeasonNumber($value)
    {
        $this->setProperty('seasonNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeasonNumber()
    {
       return $this->getProperty('seasonNumber');
    }


}
