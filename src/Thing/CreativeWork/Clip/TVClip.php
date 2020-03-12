<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Clip;

use Sohophp\SchemaOrg\Thing\CreativeWork\Clip;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries\TVSeries;

/**
* A short TV program or a segment/part of a TV program.
* @see http://schema.org/TVClip
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Clip

*
*/
class TVClip extends Clip
{

    /**
    * The TV series to which this episode or season belongs.
    * @param TVSeries|array $value
    * @return $this
    */
    public function partOfTVSeries(?TVSeries $value)
    {
        $this->setProperty('partOfTVSeries', $value);
        return $this;
    }
   /**
    * @param TVSeries|array $value
    * @return $this
    */
    public function setPartOfTVSeries(?TVSeries $value)
    {
        $this->setProperty('partOfTVSeries', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartOfTVSeries()
    {
       return $this->getProperty('partOfTVSeries');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Clip\\TVClip','Thing\\TVClip');

