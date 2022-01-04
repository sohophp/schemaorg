<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Game;

use Sohophp\SchemaOrg\Thing\CreativeWork\Game;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\GameServer;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GamePlayMode;

/**
* A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.
* @see http://schema.org/VideoGame
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Game

*
*/
class VideoGame extends Game
{

    /**
    * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
    * @param Thing|string|string|array $value
    * @return $this
    * @deprecated use setGamePlatform
    */
    public function gamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }
   /**
    * @param Thing|string|string|array $value
    * @return $this
    */
    public function setGamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGamePlatform()
    {
       return $this->getProperty('gamePlatform');
    }

    /**
    * The server on which  it is possible to play the game.
    * @param GameServer|array|string $value
    * @return $this
    * @deprecated use setGameServer
    */
    public function gameServer($value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }
   /**
    * @param GameServer|array|string $value
    * @return $this
    */
    public function setGameServer($value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGameServer()
    {
       return $this->getProperty('gameServer');
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setActor
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * The trailer of a movie or tv/radio series, season, episode, etc.
    * @param VideoObject|array|string $value
    * @return $this
    * @deprecated use setTrailer
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
   /**
    * @param VideoObject|array|string $value
    * @return $this
    */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrailer()
    {
       return $this->getProperty('trailer');
    }

    /**
    * Cheat codes to the game.
    * @param CreativeWork|array|string $value
    * @return $this
    * @deprecated use setCheatCode
    */
    public function cheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array|string $value
    * @return $this
    */
    public function setCheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCheatCode()
    {
       return $this->getProperty('cheatCode');
    }

    /**
    * Links to tips, tactics, etc.
    * @param CreativeWork|array|string $value
    * @return $this
    * @deprecated use setGameTip
    */
    public function gameTip($value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array|string $value
    * @return $this
    */
    public function setGameTip($value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGameTip()
    {
       return $this->getProperty('gameTip');
    }

    /**
    * The composer of the soundtrack.
    * @param Person|MusicGroup|array|string $value
    * @return $this
    * @deprecated use setMusicBy
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
   /**
    * @param Person|MusicGroup|array|string $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setDirectors
    */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }

    /**
    * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
    * @param GamePlayMode|array|string $value
    * @return $this
    * @deprecated use setPlayMode
    */
    public function playMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }
   /**
    * @param GamePlayMode|array|string $value
    * @return $this
    */
    public function setPlayMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPlayMode()
    {
       return $this->getProperty('playMode');
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setDirector
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setActors
    */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }


}
