<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Episode;

use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries\TVSeries;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
* A TV episode which can be part of a series or season.
* @see http://schema.org/TVEpisode
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Episode
*/
class TVEpisode extends Episode
{


    /**
        * The TV series to which this episode or season belongs.
        * @param TVSeries|array|string|mixed $value
    * @return $this
    */
    public function partOfTVSeries($value)
    {
        $this->setProperty('partOfTVSeries', $value);
        return $this;
    }

    /**
    * @param TVSeries|array|string|mixed $value
    * @return $this
    */
    public function setPartOfTVSeries($value)
    {
        $this->setProperty('partOfTVSeries', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfTVSeries()
    {
       return $this->getProperty('partOfTVSeries');
    }


    /**
        * Languages in which subtitles/captions are available, in [IETF BCP 47 standard
 * format](http://tools.ietf.org/html/bcp47).
        * @param Language|string|array|mixed $value
    * @return $this
    */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * @param Language|string|array|mixed $value
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
        * The country of the principal offices of the production company or individual
 * responsible for the movie or program.
        * @param Country|array|string|mixed $value
    * @return $this
    */
    public function countryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
    * @param Country|array|string|mixed $value
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


}
