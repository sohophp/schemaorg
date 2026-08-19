<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Clip;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Clip;
  use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries\TVSeries;

/**
  * A short TV program or a segment/part of a TV program.
  * @see schema:TVClip
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Clip
*/
class TVClip extends Clip
{


  /**
      * The TV series to which this episode or season belongs.
    * @param TVSeries|array $value
  * @return $this
  */
  public function partOfTVSeries($value)
  {
  $this->setProperty('partOfTVSeries', $value);
  return $this;
  }

  /**
  * @param TVSeries|array $value
  * @return $this
  */
  public function setPartOfTVSeries($value)
  {
  $this->setProperty('partOfTVSeries', $value);
  return $this;
  }

  /**
  * @param TVSeries $value
  * @return $this
  */
  public function addPartOfTVSeries($value)
  {
  $current = $this->getProperty('partOfTVSeries');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('partOfTVSeries', $current);
  return $this;
  }

  /**
  * @return TVSeries|array
  */
  public function getPartOfTVSeries()
  {
  return $this->getProperty('partOfTVSeries');
  }


}
