<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Episode;

use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\CreativeWork\TVSeries;
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

     public function partOfTVSeries(?TVSeries $value):self
     {
        $this->setProperty("partOfTVSeries",$value);
        return $this;
     }

     
     /**
     * Languages in which subtitles/captions are available, in <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard format</a>.
     * @param string|Language $value
     * @return $this
     */

     public function subtitleLanguage( $value):self
     {
        $this->setProperty("subtitleLanguage",$value);
        return $this;
     }

     
     /**
     * The country of the principal offices of the production company or individual responsible for the movie or program.
     * @param Country $value
     * @return $this
     */

     public function countryOfOrigin(?Country $value):self
     {
        $this->setProperty("countryOfOrigin",$value);
        return $this;
     }

     
}

