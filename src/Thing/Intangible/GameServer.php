<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\GameServerStatus;
  use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication\VideoGame;

/**
  * Server that provides game interaction in a multiplayer game.
  * @see schema:GameServer
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class GameServer extends Intangible
{


  /**
      * Number of players on the server.
    * @param int|array $value
  * @return $this
  */
  public function playersOnline($value)
  {
  $this->setProperty('playersOnline', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setPlayersOnline($value)
  {
  $this->setProperty('playersOnline', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addPlayersOnline($value)
  {
  $current = $this->getProperty('playersOnline');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('playersOnline', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getPlayersOnline()
  {
  return $this->getProperty('playersOnline');
  }


  /**
      * Status of a game server.
    * @param GameServerStatus|array $value
  * @return $this
  */
  public function serverStatus($value)
  {
  $this->setProperty('serverStatus', $value);
  return $this;
  }

  /**
  * @param GameServerStatus|array $value
  * @return $this
  */
  public function setServerStatus($value)
  {
  $this->setProperty('serverStatus', $value);
  return $this;
  }

  /**
  * @param GameServerStatus $value
  * @return $this
  */
  public function addServerStatus($value)
  {
  $current = $this->getProperty('serverStatus');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('serverStatus', $current);
  return $this;
  }

  /**
  * @return GameServerStatus|array
  */
  public function getServerStatus()
  {
  return $this->getProperty('serverStatus');
  }


  /**
      * Video game which is played on this server.
    * @param VideoGame|array $value
  * @return $this
  */
  public function game($value)
  {
  $this->setProperty('game', $value);
  return $this;
  }

  /**
  * @param VideoGame|array $value
  * @return $this
  */
  public function setGame($value)
  {
  $this->setProperty('game', $value);
  return $this;
  }

  /**
  * @param VideoGame $value
  * @return $this
  */
  public function addGame($value)
  {
  $current = $this->getProperty('game');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('game', $current);
  return $this;
  }

  /**
  * @return VideoGame|array
  */
  public function getGame()
  {
  return $this->getProperty('game');
  }


}
