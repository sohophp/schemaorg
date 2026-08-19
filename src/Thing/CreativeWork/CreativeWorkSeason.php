<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;

/**
 * A media season, e.g. TV, radio, video game etc.
 * @see https://schema.org/CreativeWorkSeason
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class CreativeWorkSeason extends CreativeWork
{
    /**
     * An episode of a TV/radio series or season.
     * @see https://schema.org/episodes
     * @param Episode|array $value
     * @return $this
     */
    public function episodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
     * @param Episode|array $value
     * @return $this
     */
    public function setEpisodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
     * @param Episode $value
     * @return $this
     */
    public function addEpisodes($value)
    {
        $current = $this->getProperty('episodes');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('episodes', $current);
        return $this;
    }

    /**
     * @return Episode|array
     */
    public function getEpisodes()
    {
        return $this->getProperty('episodes');
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
     * The number of episodes in this season or series.
     * @see https://schema.org/numberOfEpisodes
     * @param int|array $value
     * @return $this
     */
    public function numberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setNumberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addNumberOfEpisodes($value)
    {
        $current = $this->getProperty('numberOfEpisodes');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfEpisodes', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getNumberOfEpisodes()
    {
        return $this->getProperty('numberOfEpisodes');
    }
    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @see https://schema.org/endDate
     * @param mixed $value
     * @return $this
     */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addEndDate($value)
    {
        $current = $this->getProperty('endDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('endDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }
    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @see https://schema.org/startDate
     * @param mixed $value
     * @return $this
     */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addStartDate($value)
    {
        $current = $this->getProperty('startDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('startDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }
    /**
     * Position of the season within an ordered group of seasons.
     * @see https://schema.org/seasonNumber
     * @param int|string|array $value
     * @return $this
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
     * @param int|string $value
     * @return $this
     */
    public function addSeasonNumber($value)
    {
        $current = $this->getProperty('seasonNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('seasonNumber', $current);
        return $this;
    }

    /**
     * @return int|string|array
     */
    public function getSeasonNumber()
    {
        return $this->getProperty('seasonNumber');
    }
    /**
     * An episode of a TV, radio or game media within a series or season.
     * @see https://schema.org/episode
     * @param Episode|array $value
     * @return $this
     */
    public function episode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
     * @param Episode|array $value
     * @return $this
     */
    public function setEpisode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
     * @param Episode $value
     * @return $this
     */
    public function addEpisode($value)
    {
        $current = $this->getProperty('episode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('episode', $current);
        return $this;
    }

    /**
     * @return Episode|array
     */
    public function getEpisode()
    {
        return $this->getProperty('episode');
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
