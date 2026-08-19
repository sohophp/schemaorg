<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;

  use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
  use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;

/**
  * CreativeWorkSeries dedicated to radio broadcast and associated online
 * delivery.
  * @see schema:RadioSeries
* @package Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries
*/
class RadioSeries extends CreativeWorkSeries
{


  /**
      * An episode of a TV/radio series or season.
    * @param Episode|array $value
  * @return $this
  */
  public function episodes($value)
  {
  $this->setProperty('episodes', $value);
  return $this;
  }

  /**
  * @param Episode|array $value
  * @return $this
  */
  public function setEpisodes($value)
  {
  $this->setProperty('episodes', $value);
  return $this;
  }

  /**
  * @param Episode $value
  * @return $this
  */
  public function addEpisodes($value)
  {
  $current = $this->getProperty('episodes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('episodes', $current);
  return $this;
  }

  /**
  * @return Episode|array
  */
  public function getEpisodes()
  {
  return $this->getProperty('episodes');
  }


  /**
      * The number of seasons in this series.
    * @param int|array $value
  * @return $this
  */
  public function numberOfSeasons($value)
  {
  $this->setProperty('numberOfSeasons', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setNumberOfSeasons($value)
  {
  $this->setProperty('numberOfSeasons', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addNumberOfSeasons($value)
  {
  $current = $this->getProperty('numberOfSeasons');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numberOfSeasons', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getNumberOfSeasons()
  {
  return $this->getProperty('numberOfSeasons');
  }


  /**
      * A season that is part of the media series.
    * @param CreativeWorkSeason|array $value
  * @return $this
  */
  public function containsSeason($value)
  {
  $this->setProperty('containsSeason', $value);
  return $this;
  }

  /**
  * @param CreativeWorkSeason|array $value
  * @return $this
  */
  public function setContainsSeason($value)
  {
  $this->setProperty('containsSeason', $value);
  return $this;
  }

  /**
  * @param CreativeWorkSeason $value
  * @return $this
  */
  public function addContainsSeason($value)
  {
  $current = $this->getProperty('containsSeason');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('containsSeason', $current);
  return $this;
  }

  /**
  * @return CreativeWorkSeason|array
  */
  public function getContainsSeason()
  {
  return $this->getProperty('containsSeason');
  }


  /**
      * An actor (individual or a group), e.g. in TV, radio, movie, video games etc.,
 * or in an event. Actors can be associated with individual items or with a
 * series, episode, clip.
    * @param Person|PerformingGroup|array $value
  * @return $this
  */
  public function actor($value)
  {
  $this->setProperty('actor', $value);
  return $this;
  }

  /**
  * @param Person|PerformingGroup|array $value
  * @return $this
  */
  public function setActor($value)
  {
  $this->setProperty('actor', $value);
  return $this;
  }

  /**
  * @param Person|PerformingGroup $value
  * @return $this
  */
  public function addActor($value)
  {
  $current = $this->getProperty('actor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('actor', $current);
  return $this;
  }

  /**
  * @return Person|PerformingGroup|array
  */
  public function getActor()
  {
  return $this->getProperty('actor');
  }


  /**
      * A season in a media series.
    * @param string|CreativeWorkSeason|array $value
  * @return $this
  */
  public function season($value)
  {
  $this->setProperty('season', $value);
  return $this;
  }

  /**
  * @param string|CreativeWorkSeason|array $value
  * @return $this
  */
  public function setSeason($value)
  {
  $this->setProperty('season', $value);
  return $this;
  }

  /**
  * @param string|CreativeWorkSeason $value
  * @return $this
  */
  public function addSeason($value)
  {
  $current = $this->getProperty('season');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('season', $current);
  return $this;
  }

  /**
  * @return string|CreativeWorkSeason|array
  */
  public function getSeason()
  {
  return $this->getProperty('season');
  }


  /**
      * A director of e.g. TV, radio, movie, video games etc. content. Directors can
 * be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
  * @return $this
  */
  public function directors($value)
  {
  $this->setProperty('directors', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setDirectors($value)
  {
  $this->setProperty('directors', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addDirectors($value)
  {
  $current = $this->getProperty('directors');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('directors', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getDirectors()
  {
  return $this->getProperty('directors');
  }


  /**
      * The production company or studio responsible for the item, e.g. series, video
 * game, episode etc.
    * @param Organization|array $value
  * @return $this
  */
  public function productionCompany($value)
  {
  $this->setProperty('productionCompany', $value);
  return $this;
  }

  /**
  * @param Organization|array $value
  * @return $this
  */
  public function setProductionCompany($value)
  {
  $this->setProperty('productionCompany', $value);
  return $this;
  }

  /**
  * @param Organization $value
  * @return $this
  */
  public function addProductionCompany($value)
  {
  $current = $this->getProperty('productionCompany');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('productionCompany', $current);
  return $this;
  }

  /**
  * @return Organization|array
  */
  public function getProductionCompany()
  {
  return $this->getProperty('productionCompany');
  }


  /**
      * The number of episodes in this season or series.
    * @param int|array $value
  * @return $this
  */
  public function numberOfEpisodes($value)
  {
  $this->setProperty('numberOfEpisodes', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setNumberOfEpisodes($value)
  {
  $this->setProperty('numberOfEpisodes', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addNumberOfEpisodes($value)
  {
  $current = $this->getProperty('numberOfEpisodes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numberOfEpisodes', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getNumberOfEpisodes()
  {
  return $this->getProperty('numberOfEpisodes');
  }


  /**
      * A season in a media series.
    * @param CreativeWorkSeason|array $value
  * @return $this
  */
  public function seasons($value)
  {
  $this->setProperty('seasons', $value);
  return $this;
  }

  /**
  * @param CreativeWorkSeason|array $value
  * @return $this
  */
  public function setSeasons($value)
  {
  $this->setProperty('seasons', $value);
  return $this;
  }

  /**
  * @param CreativeWorkSeason $value
  * @return $this
  */
  public function addSeasons($value)
  {
  $current = $this->getProperty('seasons');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seasons', $current);
  return $this;
  }

  /**
  * @return CreativeWorkSeason|array
  */
  public function getSeasons()
  {
  return $this->getProperty('seasons');
  }


  /**
      * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated
 * with individual items or with a series, episode, clip.
    * @param Person|array $value
  * @return $this
  */
  public function actors($value)
  {
  $this->setProperty('actors', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setActors($value)
  {
  $this->setProperty('actors', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addActors($value)
  {
  $current = $this->getProperty('actors');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('actors', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getActors()
  {
  return $this->getProperty('actors');
  }


  /**
      * An episode of a TV, radio or game media within a series or season.
    * @param Episode|array $value
  * @return $this
  */
  public function episode($value)
  {
  $this->setProperty('episode', $value);
  return $this;
  }

  /**
  * @param Episode|array $value
  * @return $this
  */
  public function setEpisode($value)
  {
  $this->setProperty('episode', $value);
  return $this;
  }

  /**
  * @param Episode $value
  * @return $this
  */
  public function addEpisode($value)
  {
  $current = $this->getProperty('episode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('episode', $current);
  return $this;
  }

  /**
  * @return Episode|array
  */
  public function getEpisode()
  {
  return $this->getProperty('episode');
  }


  /**
      * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
 * event. Directors can be associated with individual items or with a series,
 * episode, clip.
    * @param Person|array $value
  * @return $this
  */
  public function director($value)
  {
  $this->setProperty('director', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setDirector($value)
  {
  $this->setProperty('director', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addDirector($value)
  {
  $current = $this->getProperty('director');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('director', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getDirector()
  {
  return $this->getProperty('director');
  }


  /**
      * The composer of the soundtrack.
    * @param Person|MusicGroup|array $value
  * @return $this
  */
  public function musicBy($value)
  {
  $this->setProperty('musicBy', $value);
  return $this;
  }

  /**
  * @param Person|MusicGroup|array $value
  * @return $this
  */
  public function setMusicBy($value)
  {
  $this->setProperty('musicBy', $value);
  return $this;
  }

  /**
  * @param Person|MusicGroup $value
  * @return $this
  */
  public function addMusicBy($value)
  {
  $current = $this->getProperty('musicBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('musicBy', $current);
  return $this;
  }

  /**
  * @return Person|MusicGroup|array
  */
  public function getMusicBy()
  {
  return $this->getProperty('musicBy');
  }


  /**
      * The trailer of a movie or TV/radio series, season, episode, etc.
    * @param VideoObject|array $value
  * @return $this
  */
  public function trailer($value)
  {
  $this->setProperty('trailer', $value);
  return $this;
  }

  /**
  * @param VideoObject|array $value
  * @return $this
  */
  public function setTrailer($value)
  {
  $this->setProperty('trailer', $value);
  return $this;
  }

  /**
  * @param VideoObject $value
  * @return $this
  */
  public function addTrailer($value)
  {
  $current = $this->getProperty('trailer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('trailer', $current);
  return $this;
  }

  /**
  * @return VideoObject|array
  */
  public function getTrailer()
  {
  return $this->getProperty('trailer');
  }


}
