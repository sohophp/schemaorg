<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A series of movies. Included movies can be indicated with the hasPart property.
* @see http://schema.org/MovieSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries

*
*/
class MovieSeries extends CreativeWorkSeries
{

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


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\CreativeWorkSeries\\MovieSeries','Thing\\MovieSeries');

