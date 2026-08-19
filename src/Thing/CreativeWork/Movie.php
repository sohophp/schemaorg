<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;

/**
 * A movie.
 * @see https://schema.org/Movie
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Movie extends CreativeWork
{
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
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @see https://schema.org/subtitleLanguage
     * @param string|Language|array $value
     * @return $this
     */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language|array $value
     * @return $this
     */
    public function setSubtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language $value
     * @return $this
     */
    public function addSubtitleLanguage($value)
    {
        $current = $this->getProperty('subtitleLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('subtitleLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getSubtitleLanguage()
    {
        return $this->getProperty('subtitleLanguage');
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
