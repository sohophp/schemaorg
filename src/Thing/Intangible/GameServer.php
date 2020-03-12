<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\CreativeWork\Game\VideoGame;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GameServerStatus;

/**
* Server that provides game interaction in a multiplayer game.
* @see http://schema.org/GameServer
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class GameServer extends Intangible
{

    /**
    * Video game which is played on this server.
    * @param VideoGame|array $value
    * @return $this
    */
    public function game(?VideoGame $value)
    {
        $this->setProperty('game', $value);
        return $this;
    }
   /**
    * @param VideoGame|array $value
    * @return $this
    */
    public function setGame(?VideoGame $value)
    {
        $this->setProperty('game', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGame()
    {
       return $this->getProperty('game');
    }

    /**
    * Number of players on the server.
    * @param int|array $value
    * @return $this
    */
    public function playersOnline(?int $value)
    {
        $this->setProperty('playersOnline', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setPlayersOnline(?int $value)
    {
        $this->setProperty('playersOnline', $value);
        return $this;
    }
    /**
    * @return $this|string|array
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
    public function serverStatus(?GameServerStatus $value)
    {
        $this->setProperty('serverStatus', $value);
        return $this;
    }
   /**
    * @param GameServerStatus|array $value
    * @return $this
    */
    public function setServerStatus(?GameServerStatus $value)
    {
        $this->setProperty('serverStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServerStatus()
    {
       return $this->getProperty('serverStatus');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\GameServer','Thing\\GameServer');

