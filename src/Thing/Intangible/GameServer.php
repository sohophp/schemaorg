<?php

declare (strict_types=1);

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
     * @param VideoGame $value
     * @return $this
     */

     public function game(?VideoGame $value):self
     {
        $this->setProperty("game",$value);
        return $this;
     }

     
     /**
     * Number of players on the server.
     * @param int $value
     * @return $this
     */

     public function playersOnline(?int $value):self
     {
        $this->setProperty("playersOnline",$value);
        return $this;
     }

     
     /**
     * Status of a game server.
     * @param GameServerStatus $value
     * @return $this
     */

     public function serverStatus(?GameServerStatus $value):self
     {
        $this->setProperty("serverStatus",$value);
        return $this;
     }

     
}

