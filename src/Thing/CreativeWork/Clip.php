<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;

/**
* A short TV or radio program or a segment/part of a program.
* @see http://schema.org/Clip
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Clip extends CreativeWork
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
    * The episode to which this clip belongs.
    * @param Episode $value
    * @return $this
    */
    public function partOfEpisode(?Episode $value)
    {
        $this->setProperty('partOfEpisode', $value);
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
    * Position of the clip within an ordered group of clips.
    * @param int|string $value
    * @return $this
    */
    public function clipNumber($value)
    {
        $this->setProperty('clipNumber', $value);
        return $this;
    }


}

