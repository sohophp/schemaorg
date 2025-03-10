<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Clip;

use Sohophp\SchemaOrg\Thing\CreativeWork\Clip;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries\TVSeries;

/**
* A short TV program or a segment/part of a TV program.
* @see http://schema.org/TVClip
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Clip
*/
class TVClip extends Clip
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


}
