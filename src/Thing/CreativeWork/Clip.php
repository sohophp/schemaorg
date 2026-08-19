<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\HyperTocEntry;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;

/**
 * A short TV or radio program or a segment/part of a program.
 * @see https://schema.org/Clip
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Clip extends CreativeWork
{
    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @see https://schema.org/startOffset
     * @param HyperTocEntry|array $value
     * @return $this
     */
    public function startOffset($value)
    {
        $this->setProperty('startOffset', $value);
        return $this;
    }

    /**
     * @param HyperTocEntry|array $value
     * @return $this
     */
    public function setStartOffset($value)
    {
        $this->setProperty('startOffset', $value);
        return $this;
    }

    /**
     * @param HyperTocEntry $value
     * @return $this
     */
    public function addStartOffset($value)
    {
        $current = $this->getProperty('startOffset');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('startOffset', $current);
        return $this;
    }

    /**
     * @return HyperTocEntry|array
     */
    public function getStartOffset()
    {
        return $this->getProperty('startOffset');
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
     * Position of the clip within an ordered group of clips.
     * @see https://schema.org/clipNumber
     * @param string|int|array $value
     * @return $this
     */
    public function clipNumber($value)
    {
        $this->setProperty('clipNumber', $value);
        return $this;
    }

    /**
     * @param string|int|array $value
     * @return $this
     */
    public function setClipNumber($value)
    {
        $this->setProperty('clipNumber', $value);
        return $this;
    }

    /**
     * @param string|int $value
     * @return $this
     */
    public function addClipNumber($value)
    {
        $current = $this->getProperty('clipNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('clipNumber', $current);
        return $this;
    }

    /**
     * @return string|int|array
     */
    public function getClipNumber()
    {
        return $this->getProperty('clipNumber');
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
     * The end time of the clip expressed as the number of seconds from the beginning of the work.
     * @see https://schema.org/endOffset
     * @param HyperTocEntry|array $value
     * @return $this
     */
    public function endOffset($value)
    {
        $this->setProperty('endOffset', $value);
        return $this;
    }

    /**
     * @param HyperTocEntry|array $value
     * @return $this
     */
    public function setEndOffset($value)
    {
        $this->setProperty('endOffset', $value);
        return $this;
    }

    /**
     * @param HyperTocEntry $value
     * @return $this
     */
    public function addEndOffset($value)
    {
        $current = $this->getProperty('endOffset');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('endOffset', $current);
        return $this;
    }

    /**
     * @return HyperTocEntry|array
     */
    public function getEndOffset()
    {
        return $this->getProperty('endOffset');
    }
    /**
     * The episode to which this clip belongs.
     * @see https://schema.org/partOfEpisode
     * @param Episode|array $value
     * @return $this
     */
    public function partOfEpisode($value)
    {
        $this->setProperty('partOfEpisode', $value);
        return $this;
    }

    /**
     * @param Episode|array $value
     * @return $this
     */
    public function setPartOfEpisode($value)
    {
        $this->setProperty('partOfEpisode', $value);
        return $this;
    }

    /**
     * @param Episode $value
     * @return $this
     */
    public function addPartOfEpisode($value)
    {
        $current = $this->getProperty('partOfEpisode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('partOfEpisode', $current);
        return $this;
    }

    /**
     * @return Episode|array
     */
    public function getPartOfEpisode()
    {
        return $this->getProperty('partOfEpisode');
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
}
