<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
* @see http://schema.org/TVSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries

*
*/
class TVSeries extends CreativeWorkSeries
{

    /**
    * A season in a media series.
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function seasons(?CreativeWorkSeason $value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function setSeasons(?CreativeWorkSeason $value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeasons()
    {
       return $this->getProperty('seasons');
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActor(?Person $value)
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
    * The number of episodes in this season or series.
    * @param int|array $value
    * @return $this
    */
    public function numberOfEpisodes(?int $value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setNumberOfEpisodes(?int $value)
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
    * @param VideoObject|array $value
    * @return $this
    */
    public function trailer(?VideoObject $value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
   /**
    * @param VideoObject|array $value
    * @return $this
    */
    public function setTrailer(?VideoObject $value)
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
    * A season in a media series.
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function season(?CreativeWorkSeason $value)
    {
        $this->setProperty('season', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function setSeason(?CreativeWorkSeason $value)
    {
        $this->setProperty('season', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeason()
    {
       return $this->getProperty('season');
    }

    /**
    * An episode of a TV/radio series or season.
    * @param Episode|array $value
    * @return $this
    */
    public function episodes(?Episode $value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }
   /**
    * @param Episode|array $value
    * @return $this
    */
    public function setEpisodes(?Episode $value)
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
    * The country of the principal offices of the production company or individual responsible for the movie or program.
    * @param Country|array $value
    * @return $this
    */
    public function countryOfOrigin(?Country $value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }
   /**
    * @param Country|array $value
    * @return $this
    */
    public function setCountryOfOrigin(?Country $value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCountryOfOrigin()
    {
       return $this->getProperty('countryOfOrigin');
    }

    /**
    * The composer of the soundtrack.
    * @param Person|MusicGroup|array $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
   /**
    * @param Person|MusicGroup|array $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }

    /**
    * A season that is part of the media series.
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function containsSeason(?CreativeWorkSeason $value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function setContainsSeason(?CreativeWorkSeason $value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContainsSeason()
    {
       return $this->getProperty('containsSeason');
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function directors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirectors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }

    /**
    * The number of seasons in this series.
    * @param int|array $value
    * @return $this
    */
    public function numberOfSeasons(?int $value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setNumberOfSeasons(?int $value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfSeasons()
    {
       return $this->getProperty('numberOfSeasons');
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirector(?Person $value)
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
    * @param Organization|array $value
    * @return $this
    */
    public function productionCompany(?Organization $value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setProductionCompany(?Organization $value)
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
    * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function actors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }

    /**
    * An episode of a tv, radio or game media within a series or season.
    * @param Episode|array $value
    * @return $this
    */
    public function episode(?Episode $value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }
   /**
    * @param Episode|array $value
    * @return $this
    */
    public function setEpisode(?Episode $value)
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


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\CreativeWorkSeries\\TVSeries','Thing\\TVSeries');

