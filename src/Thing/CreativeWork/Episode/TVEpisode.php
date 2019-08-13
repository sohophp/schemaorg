<?php declare(strict_types=1);
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
    * @param TVSeries $value
    * @return $this
    */
    public function partOfTVSeries(?TVSeries $value)
    {
        $this->setProperty('partOfTVSeries', $value);
        return $this;
    }

    /**
    * Languages in which subtitles/captions are available, in <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard format</a>.
    * @param Language|string $value
    * @return $this
    */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * The country of the principal offices of the production company or individual responsible for the movie or program.
    * @param Country $value
    * @return $this
    */
    public function countryOfOrigin(?Country $value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Episode\\TVEpisode','Thing\\TVEpisode');

