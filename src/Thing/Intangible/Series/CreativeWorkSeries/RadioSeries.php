<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
* @see http://schema.org/RadioSeries
* @package Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries
*/
class RadioSeries extends CreativeWorkSeries
{

    /**
    * A season in a media series.
    * @param CreativeWorkSeason $value
    * @return $this
    */
    public function seasons(?CreativeWorkSeason $value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

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
    * The number of episodes in this season or series.
    * @param int $value
    * @return $this
    */
    public function numberOfEpisodes(?int $value)
    {
        $this->setProperty('numberOfEpisodes', $value);
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
    * A season in a media series.
    * @param CreativeWorkSeason $value
    * @return $this
    */
    public function season(?CreativeWorkSeason $value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
    * An episode of a TV/radio series or season.
    * @param Episode $value
    * @return $this
    */
    public function episodes(?Episode $value)
    {
        $this->setProperty('episodes', $value);
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
    * A season that is part of the media series.
    * @param CreativeWorkSeason $value
    * @return $this
    */
    public function containsSeason(?CreativeWorkSeason $value)
    {
        $this->setProperty('containsSeason', $value);
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
    * The number of seasons in this series.
    * @param int $value
    * @return $this
    */
    public function numberOfSeasons(?int $value)
    {
        $this->setProperty('numberOfSeasons', $value);
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

    /**
    * An episode of a tv, radio or game media within a series or season.
    * @param Episode $value
    * @return $this
    */
    public function episode(?Episode $value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }


}

