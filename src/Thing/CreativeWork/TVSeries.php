<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
* @see schema:TVSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class TVSeries extends CreativeWork
{


    /**
        * The number of seasons in this series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfSeasons()
    {
       return $this->getProperty('numberOfSeasons');
    }


    /**
        * An episode of a TV, radio or game media within a series or season.
        * @param array|string|mixed $value
    * @return $this
    */
    public function episode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEpisode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpisode()
    {
       return $this->getProperty('episode');
    }


    /**
        * A season in a media series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSeasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeasons()
    {
       return $this->getProperty('seasons');
    }


    /**
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can
 * be associated with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }


    /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
 * event. Directors can be associated with individual items or with a series,
 * episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }


    /**
        * A season that is part of the media series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function containsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContainsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContainsSeason()
    {
       return $this->getProperty('containsSeason');
    }


    /**
        * A season in a media series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function season($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSeason($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeason()
    {
       return $this->getProperty('season');
    }


    /**
        * The number of episodes in this season or series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfEpisodes()
    {
       return $this->getProperty('numberOfEpisodes');
    }


    /**
        * An episode of a TV/radio series or season.
        * @param array|string|mixed $value
    * @return $this
    */
    public function episodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEpisodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpisodes()
    {
       return $this->getProperty('episodes');
    }


    /**
        * The production company or studio responsible for the item, e.g. series, video
 * game, episode etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductionCompany()
    {
       return $this->getProperty('productionCompany');
    }


    /**
        * The trailer of a movie or TV/radio series, season, episode, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrailer()
    {
       return $this->getProperty('trailer');
    }


    /**
        * The country of origin of something, including products as well as creative 
 * works such as movie and TV content.
 * 
 * In the case of TV and movie, this would be the country of the principle
 * offices of the production company or individual responsible for the movie.
 * For other kinds of [[CreativeWork]] it is difficult to provide fully general
 * guidance, and properties such as [[contentLocation]] and [[locationCreated]]
 * may be more applicable.
 * 
 * In the case of products, the country of origin of the product. The exact
 * interpretation of this may vary by context and product type, and cannot be
 * fully enumerated here.
        * @param array|string|mixed $value
    * @return $this
    */
    public function countryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCountryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCountryOfOrigin()
    {
       return $this->getProperty('countryOfOrigin');
    }


    /**
        * The composer of the soundtrack.
        * @param array|string|mixed $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }


    /**
        * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry)
 * [[identifier]] representing at the most general/abstract level, a work of
 * film or television.
 * 
 * For example, the motion picture known as "Ghostbusters" has a titleEIDR of 
 * "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several
 * variants, which EIDR calls "edits". See [[editEIDR]].
 * 
 * Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and
 * [[TVSeries]] can be used for both works and their multiple expressions, it is
 * possible to use [[titleEIDR]] alone (for a general description), or alongside
 * [[editEIDR]] for a more edit-specific description.
        * @param array|string|mixed $value
    * @return $this
    */
    public function titleEIDR($value)
    {
        $this->setProperty('titleEIDR', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTitleEIDR($value)
    {
        $this->setProperty('titleEIDR', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTitleEIDR()
    {
       return $this->getProperty('titleEIDR');
    }


    /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc.,
 * or in an event. Actors can be associated with individual items or with a
 * series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }


    /**
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated
 * with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }


}
