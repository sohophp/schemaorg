<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries\TVSeries;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
* Season dedicated to TV broadcast and associated online delivery.
* @see http://schema.org/TVSeason
* @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason
*/
class TVSeason extends CreativeWorkSeason
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\CreativeWorkSeason\\TVSeason','Thing\\TVSeason');

