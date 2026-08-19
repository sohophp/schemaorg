<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
  use Sohophp\SchemaOrg\Thing;

/**
  * The Game type represents things which are games. These are typically
 * rule-governed recreational activities, e.g. role-playing games in which
 * players assume the role of characters in a fictional setting.
  * @see schema:Game
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Game extends CreativeWork
{


  /**
      * Indicate how many people can play this game (minimum, maximum, or range).
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function numberOfPlayers($value)
  {
  $this->setProperty('numberOfPlayers', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setNumberOfPlayers($value)
  {
  $this->setProperty('numberOfPlayers', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addNumberOfPlayers($value)
  {
  $current = $this->getProperty('numberOfPlayers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numberOfPlayers', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getNumberOfPlayers()
  {
  return $this->getProperty('numberOfPlayers');
  }


  /**
      * Real or fictional location of the game (or part of game).
    * @param Place|string|PostalAddress|array $value
  * @return $this
  */
  public function gameLocation($value)
  {
  $this->setProperty('gameLocation', $value);
  return $this;
  }

  /**
  * @param Place|string|PostalAddress|array $value
  * @return $this
  */
  public function setGameLocation($value)
  {
  $this->setProperty('gameLocation', $value);
  return $this;
  }

  /**
  * @param Place|string|PostalAddress $value
  * @return $this
  */
  public function addGameLocation($value)
  {
  $current = $this->getProperty('gameLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('gameLocation', $current);
  return $this;
  }

  /**
  * @return Place|string|PostalAddress|array
  */
  public function getGameLocation()
  {
  return $this->getProperty('gameLocation');
  }


  /**
      * A piece of data that represents a particular aspect of a fictional character
 * (skill, power, character points, advantage, disadvantage).
    * @param Thing|array $value
  * @return $this
  */
  public function characterAttribute($value)
  {
  $this->setProperty('characterAttribute', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setCharacterAttribute($value)
  {
  $this->setProperty('characterAttribute', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addCharacterAttribute($value)
  {
  $current = $this->getProperty('characterAttribute');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('characterAttribute', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getCharacterAttribute()
  {
  return $this->getProperty('characterAttribute');
  }


  /**
      * The task that a player-controlled character, or group of characters may
 * complete in order to gain a reward.
    * @param Thing|array $value
  * @return $this
  */
  public function quest($value)
  {
  $this->setProperty('quest', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setQuest($value)
  {
  $this->setProperty('quest', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addQuest($value)
  {
  $current = $this->getProperty('quest');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('quest', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getQuest()
  {
  return $this->getProperty('quest');
  }


  /**
      * An item is an object within the game world that can be collected by a player
 * or, occasionally, a non-player character.
    * @param Thing|array $value
  * @return $this
  */
  public function gameItem($value)
  {
  $this->setProperty('gameItem', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setGameItem($value)
  {
  $this->setProperty('gameItem', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addGameItem($value)
  {
  $current = $this->getProperty('gameItem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('gameItem', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getGameItem()
  {
  return $this->getProperty('gameItem');
  }


}
