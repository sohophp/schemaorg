<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\CreativeWork\Game\VideoGame;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GameServerStatus;

/**
* Server that provides game interaction in a multiplayer game.
* @see http://schema.org/GameServer
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class GameServer extends Intangible
{


    /**
        * Video game which is played on this server.
        * @param VideoGame|array|string|mixed $value
    * @return $this
    */
    public function game($value)
    {
        $this->setProperty('game', $value);
        return $this;
    }

    /**
    * @param VideoGame|array|string|mixed $value
    * @return $this
    */
    public function setGame($value)
    {
        $this->setProperty('game', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGame()
    {
       return $this->getProperty('game');
    }


    /**
        * Number of players on the server.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function playersOnline($value)
    {
        $this->setProperty('playersOnline', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setPlayersOnline($value)
    {
        $this->setProperty('playersOnline', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPlayersOnline()
    {
       return $this->getProperty('playersOnline');
    }


    /**
        * Status of a game server.
        * @param GameServerStatus|array|string|mixed $value
    * @return $this
    */
    public function serverStatus($value)
    {
        $this->setProperty('serverStatus', $value);
        return $this;
    }

    /**
    * @param GameServerStatus|array|string|mixed $value
    * @return $this
    */
    public function setServerStatus($value)
    {
        $this->setProperty('serverStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServerStatus()
    {
       return $this->getProperty('serverStatus');
    }


}
