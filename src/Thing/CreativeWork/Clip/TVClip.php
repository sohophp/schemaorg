<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Clip;

use Sohophp\SchemaOrg\Thing\CreativeWork\Clip;

/**
* A short TV program or a segment/part of a TV program.
* @see schema:TVClip
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Clip
*/
class TVClip extends Clip
{
   /**
        * The TV series to which this episode or season belongs.
        */
    protected $partOfTVSeries = null;


    /**
    * @param array|string $value
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
