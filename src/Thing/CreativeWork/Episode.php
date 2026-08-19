<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;

/**
 * A media episode (e.g. TV, radio, video game) which can be part of a series or season.
 * @see https://schema.org/Episode
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Episode extends CreativeWork
{
    /**
     * Position of the episode within an ordered group of episodes.
     * @see https://schema.org/episodeNumber
     * @param string|int|array $value
     * @return $this
     */
    public function episodeNumber($value)
    {
        $this->setProperty('episodeNumber', $value);
        return $this;
    }

    /**
     * @param string|int|array $value
     * @return $this
     */
    public function setEpisodeNumber($value)
    {
        $this->setProperty('episodeNumber', $value);
        return $this;
    }

    /**
     * @param string|int $value
     * @return $this
     */
    public function addEpisodeNumber($value)
    {
        $current = $this->getProperty('episodeNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('episodeNumber', $current);
        return $this;
    }

    /**
     * @return string|int|array
     */
    public function getEpisodeNumber()
    {
        return $this->getProperty('episodeNumber');
    }
    /**
     * The season to which this episode belongs.
     * @see https://schema.org/partOfSeason
     * @param CreativeWorkSeason|array $value
     * @return $this
     */
    public function partOfSeason($value)
    {
        $this->setProperty('partOfSeason', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeason|array $value
     * @return $this
     */
    public function setPartOfSeason($value)
    {
        $this->setProperty('partOfSeason', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeason $value
     * @return $this
     */
    public function addPartOfSeason($value)
    {
        $current = $this->getProperty('partOfSeason');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('partOfSeason', $current);
        return $this;
    }

    /**
     * @return CreativeWorkSeason|array
     */
    public function getPartOfSeason()
    {
        return $this->getProperty('partOfSeason');
    }
    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/actor
     * @param Person|PerformingGroup|array $value
     * @return $this
     */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
     * @param Person|PerformingGroup|array $value
     * @return $this
     */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
     * @param Person|PerformingGroup $value
     * @return $this
     */
    public function addActor($value)
    {
        $current = $this->getProperty('actor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actor', $current);
        return $this;
    }

    /**
     * @return Person|PerformingGroup|array
     */
    public function getActor()
    {
        return $this->getProperty('actor');
    }
    /**
     * The series to which this episode or season belongs.
     * @see https://schema.org/partOfSeries
     * @param CreativeWorkSeries|array $value
     * @return $this
     */
    public function partOfSeries($value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeries|array $value
     * @return $this
     */
    public function setPartOfSeries($value)
    {
        $this->setProperty('partOfSeries', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeries $value
     * @return $this
     */
    public function addPartOfSeries($value)
    {
        $current = $this->getProperty('partOfSeries');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('partOfSeries', $current);
        return $this;
    }

    /**
     * @return CreativeWorkSeries|array
     */
    public function getPartOfSeries()
    {
        return $this->getProperty('partOfSeries');
    }
    /**
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/directors
     * @param Person|array $value
     * @return $this
     */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addDirectors($value)
    {
        $current = $this->getProperty('directors');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('directors', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getDirectors()
    {
        return $this->getProperty('directors');
    }
    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @see https://schema.org/productionCompany
     * @param Organization|array $value
     * @return $this
     */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addProductionCompany($value)
    {
        $current = $this->getProperty('productionCompany');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('productionCompany', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getProductionCompany()
    {
        return $this->getProperty('productionCompany');
    }
    /**
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/actors
     * @param Person|array $value
     * @return $this
     */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addActors($value)
    {
        $current = $this->getProperty('actors');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actors', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getActors()
    {
        return $this->getProperty('actors');
    }
    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/director
     * @param Person|array $value
     * @return $this
     */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addDirector($value)
    {
        $current = $this->getProperty('director');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('director', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getDirector()
    {
        return $this->getProperty('director');
    }
    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @see https://schema.org/duration
     * @param Duration|QuantitativeValue|array $value
     * @return $this
     */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
     * @param Duration|QuantitativeValue|array $value
     * @return $this
     */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
     * @param Duration|QuantitativeValue $value
     * @return $this
     */
    public function addDuration($value)
    {
        $current = $this->getProperty('duration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('duration', $current);
        return $this;
    }

    /**
     * @return Duration|QuantitativeValue|array
     */
    public function getDuration()
    {
        return $this->getProperty('duration');
    }
    /**
     * The composer of the soundtrack.
     * @see https://schema.org/musicBy
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
     * @param Person|MusicGroup $value
     * @return $this
     */
    public function addMusicBy($value)
    {
        $current = $this->getProperty('musicBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('musicBy', $current);
        return $this;
    }

    /**
     * @return Person|MusicGroup|array
     */
    public function getMusicBy()
    {
        return $this->getProperty('musicBy');
    }
    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @see https://schema.org/trailer
     * @param VideoObject|array $value
     * @return $this
     */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
     * @param VideoObject|array $value
     * @return $this
     */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
     * @param VideoObject $value
     * @return $this
     */
    public function addTrailer($value)
    {
        $current = $this->getProperty('trailer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('trailer', $current);
        return $this;
    }

    /**
     * @return VideoObject|array
     */
    public function getTrailer()
    {
        return $this->getProperty('trailer');
    }
}
