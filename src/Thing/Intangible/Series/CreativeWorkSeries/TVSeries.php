<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;

/**
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 * @see https://schema.org/TVSeries
 * @package Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries
 */
class TVSeries extends CreativeWorkSeries
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
     * The number of seasons in this series.
     * @see https://schema.org/numberOfSeasons
     * @param int|array $value
     * @return $this
     */
    public function numberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setNumberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addNumberOfSeasons($value)
    {
        $current = $this->getProperty('numberOfSeasons');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfSeasons', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getNumberOfSeasons()
    {
        return $this->getProperty('numberOfSeasons');
    }
    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     * @see https://schema.org/countryOfOrigin
     * @param Country|array $value
     * @return $this
     */
    public function countryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country|array $value
     * @return $this
     */
    public function setCountryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country $value
     * @return $this
     */
    public function addCountryOfOrigin($value)
    {
        $current = $this->getProperty('countryOfOrigin');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countryOfOrigin', $current);
        return $this;
    }

    /**
     * @return Country|array
     */
    public function getCountryOfOrigin()
    {
        return $this->getProperty('countryOfOrigin');
    }
    /**
     * A season that is part of the media series.
     * @see https://schema.org/containsSeason
     * @param CreativeWorkSeason|array $value
     * @return $this
     */
    public function containsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeason|array $value
     * @return $this
     */
    public function setContainsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeason $value
     * @return $this
     */
    public function addContainsSeason($value)
    {
        $current = $this->getProperty('containsSeason');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('containsSeason', $current);
        return $this;
    }

    /**
     * @return CreativeWorkSeason|array
     */
    public function getContainsSeason()
    {
        return $this->getProperty('containsSeason');
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
     * A season in a media series.
     * @see https://schema.org/season
     * @param string|CreativeWorkSeason|array $value
     * @return $this
     */
    public function season($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
     * @param string|CreativeWorkSeason|array $value
     * @return $this
     */
    public function setSeason($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
     * @param string|CreativeWorkSeason $value
     * @return $this
     */
    public function addSeason($value)
    {
        $current = $this->getProperty('season');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('season', $current);
        return $this;
    }

    /**
     * @return string|CreativeWorkSeason|array
     */
    public function getSeason()
    {
        return $this->getProperty('season');
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
     * A season in a media series.
     * @see https://schema.org/seasons
     * @param CreativeWorkSeason|array $value
     * @return $this
     */
    public function seasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeason|array $value
     * @return $this
     */
    public function setSeasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
     * @param CreativeWorkSeason $value
     * @return $this
     */
    public function addSeasons($value)
    {
        $current = $this->getProperty('seasons');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('seasons', $current);
        return $this;
    }

    /**
     * @return CreativeWorkSeason|array
     */
    public function getSeasons()
    {
        return $this->getProperty('seasons');
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
    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description.
     * @see https://schema.org/titleEIDR
     * @param string|array $value
     * @return $this
     */
    public function titleEIDR($value)
    {
        $this->setProperty('titleEIDR', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTitleEIDR($value)
    {
        $this->setProperty('titleEIDR', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTitleEIDR($value)
    {
        $current = $this->getProperty('titleEIDR');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('titleEIDR', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTitleEIDR()
    {
        return $this->getProperty('titleEIDR');
    }
}
