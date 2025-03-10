<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A movie.
* @see schema:Movie
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Movie extends CreativeWork
{


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
        * Languages in which subtitles/captions are available, in [IETF BCP 47 standard
 * format](http://tools.ietf.org/html/bcp47).
        * @param array|string|mixed $value
    * @return $this
    */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSubtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubtitleLanguage()
    {
       return $this->getProperty('subtitleLanguage');
    }


    /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * duration format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param array|string|mixed $value
    * @return $this
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
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
