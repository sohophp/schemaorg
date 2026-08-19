<?php
namespace Sohophp\SchemaOrg\Thing\Event;

  use Sohophp\SchemaOrg\Thing\Event;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization\SportsTeam;

/**
  * Event type: Sports event.
  * @see schema:SportsEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class SportsEvent extends Event
{


  /**
      * An official who watches a game or match closely to enforce the rules and
 * arbitrate on matters arising from the play such as referees, umpires or
 * judges. The name of the effective function can vary according to the sport.
    * @param Person|array $value
  * @return $this
  */
  public function referee($value)
  {
  $this->setProperty('referee', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setReferee($value)
  {
  $this->setProperty('referee', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addReferee($value)
  {
  $current = $this->getProperty('referee');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('referee', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getReferee()
  {
  return $this->getProperty('referee');
  }


  /**
      * The home team in a sports event.
    * @param SportsTeam|Person|array $value
  * @return $this
  */
  public function homeTeam($value)
  {
  $this->setProperty('homeTeam', $value);
  return $this;
  }

  /**
  * @param SportsTeam|Person|array $value
  * @return $this
  */
  public function setHomeTeam($value)
  {
  $this->setProperty('homeTeam', $value);
  return $this;
  }

  /**
  * @param SportsTeam|Person $value
  * @return $this
  */
  public function addHomeTeam($value)
  {
  $current = $this->getProperty('homeTeam');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('homeTeam', $current);
  return $this;
  }

  /**
  * @return SportsTeam|Person|array
  */
  public function getHomeTeam()
  {
  return $this->getProperty('homeTeam');
  }


  /**
      * The away team in a sports event.
    * @param SportsTeam|Person|array $value
  * @return $this
  */
  public function awayTeam($value)
  {
  $this->setProperty('awayTeam', $value);
  return $this;
  }

  /**
  * @param SportsTeam|Person|array $value
  * @return $this
  */
  public function setAwayTeam($value)
  {
  $this->setProperty('awayTeam', $value);
  return $this;
  }

  /**
  * @param SportsTeam|Person $value
  * @return $this
  */
  public function addAwayTeam($value)
  {
  $current = $this->getProperty('awayTeam');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('awayTeam', $current);
  return $this;
  }

  /**
  * @return SportsTeam|Person|array
  */
  public function getAwayTeam()
  {
  return $this->getProperty('awayTeam');
  }


  /**
      * A competitor in a sports event.
    * @param SportsTeam|Person|array $value
  * @return $this
  */
  public function competitor($value)
  {
  $this->setProperty('competitor', $value);
  return $this;
  }

  /**
  * @param SportsTeam|Person|array $value
  * @return $this
  */
  public function setCompetitor($value)
  {
  $this->setProperty('competitor', $value);
  return $this;
  }

  /**
  * @param SportsTeam|Person $value
  * @return $this
  */
  public function addCompetitor($value)
  {
  $current = $this->getProperty('competitor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('competitor', $current);
  return $this;
  }

  /**
  * @return SportsTeam|Person|array
  */
  public function getCompetitor()
  {
  return $this->getProperty('competitor');
  }


  /**
      * A type of sport (e.g. Baseball).
    * @param string|array $value
  * @return $this
  */
  public function sport($value)
  {
  $this->setProperty('sport', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSport($value)
  {
  $this->setProperty('sport', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSport($value)
  {
  $current = $this->getProperty('sport');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sport', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSport()
  {
  return $this->getProperty('sport');
  }


}
