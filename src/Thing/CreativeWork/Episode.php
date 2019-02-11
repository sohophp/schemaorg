<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A media episode (e.g. TV, radio, video game) which can be part of a series or season.
* @see http://schema.org/Episode
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Episode extends CreativeWork
{

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * The series to which this episode or season belongs.
    * @param CreativeWorkSeries $value
    * @return $this
    */
    public function partOfSeries(?CreativeWorkSeries $value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }

    /**
    * The trailer of a movie or tv/radio series, season, episode, etc.
    * @param VideoObject $value
    * @return $this
    */
    public function trailer(?VideoObject $value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * The season to which this episode belongs.
    * @param CreativeWorkSeason $value
    * @return $this
    */
    public function partOfSeason(?CreativeWorkSeason $value)
    {
        $this->setProperty('partOfSeason', $value);
        return $this;
    }

    /**
    * The composer of the soundtrack.
    * @param Person|MusicGroup $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function directors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * Position of the episode within an ordered group of episodes.
    * @param string|int $value
    * @return $this
    */
    public function episodeNumber($value)
    {
        $this->setProperty('episodeNumber', $value);
        return $this;
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * The production company or studio responsible for the item e.g. series, video game, episode etc.
    * @param Organization $value
    * @return $this
    */
    public function productionCompany(?Organization $value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function actors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }


}

