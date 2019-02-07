<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Organization;
/**
* CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
* @see http://schema.org/TVSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class TVSeries extends CreativeWork
{

     
     /**
     * A season in a media series.
     * @param CreativeWorkSeason $value
     * @return $this
     */

     public function seasons(?CreativeWorkSeason $value):self
     {
        $this->setProperty("seasons",$value);
        return $this;
     }

     
     /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function actor(?Person $value):self
     {
        $this->setProperty("actor",$value);
        return $this;
     }

     
     /**
     * The number of episodes in this season or series.
     * @param int $value
     * @return $this
     */

     public function numberOfEpisodes(?int $value):self
     {
        $this->setProperty("numberOfEpisodes",$value);
        return $this;
     }

     
     /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     * @param VideoObject $value
     * @return $this
     */

     public function trailer(?VideoObject $value):self
     {
        $this->setProperty("trailer",$value);
        return $this;
     }

     
     /**
     * A season in a media series.
     * @param CreativeWorkSeason $value
     * @return $this
     */

     public function season(?CreativeWorkSeason $value):self
     {
        $this->setProperty("season",$value);
        return $this;
     }

     
     /**
     * An episode of a TV/radio series or season.
     * @param Episode $value
     * @return $this
     */

     public function episodes(?Episode $value):self
     {
        $this->setProperty("episodes",$value);
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

     
     /**
     * The composer of the soundtrack.
     * @param Person|MusicGroup $value
     * @return $this
     */

     public function musicBy( $value):self
     {
        $this->setProperty("musicBy",$value);
        return $this;
     }

     
     /**
     * A season that is part of the media series.
     * @param CreativeWorkSeason $value
     * @return $this
     */

     public function containsSeason(?CreativeWorkSeason $value):self
     {
        $this->setProperty("containsSeason",$value);
        return $this;
     }

     
     /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function directors(?Person $value):self
     {
        $this->setProperty("directors",$value);
        return $this;
     }

     
     /**
     * The number of seasons in this series.
     * @param int $value
     * @return $this
     */

     public function numberOfSeasons(?int $value):self
     {
        $this->setProperty("numberOfSeasons",$value);
        return $this;
     }

     
     /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function director(?Person $value):self
     {
        $this->setProperty("director",$value);
        return $this;
     }

     
     /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     * @param Organization $value
     * @return $this
     */

     public function productionCompany(?Organization $value):self
     {
        $this->setProperty("productionCompany",$value);
        return $this;
     }

     
     /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function actors(?Person $value):self
     {
        $this->setProperty("actors",$value);
        return $this;
     }

     
     /**
     * An episode of a tv, radio or game media within a series or season.
     * @param Episode $value
     * @return $this
     */

     public function episode(?Episode $value):self
     {
        $this->setProperty("episode",$value);
        return $this;
     }

     
}
