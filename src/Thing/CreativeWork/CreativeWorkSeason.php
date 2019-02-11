<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A media season e.g. tv, radio, video game etc.
* @see http://schema.org/CreativeWorkSeason
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class CreativeWorkSeason extends CreativeWork
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
    * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param  $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
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
    * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param  $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
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
    * An episode of a tv, radio or game media within a series or season.
    * @param Episode $value
    * @return $this
    */
    public function episode(?Episode $value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
    * Position of the season within an ordered group of seasons.
    * @param string|int $value
    * @return $this
    */
    public function seasonNumber($value)
    {
        $this->setProperty('seasonNumber', $value);
        return $this;
    }


}

