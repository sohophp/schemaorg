<?php declare(strict_types=1);
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
    * @param GameServer|array $value
    * @return $this
    */
    public function gameServer(?GameServer $value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }
   /**
    * @param GameServer|array $value
    * @return $this
    */
    public function setGameServer(?GameServer $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActor(?Person $value)
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
    * @param VideoObject|array $value
    * @return $this
    */
    public function trailer(?VideoObject $value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
   /**
    * @param VideoObject|array $value
    * @return $this
    */
    public function setTrailer(?VideoObject $value)
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
    * @param CreativeWork|array $value
    * @return $this
    */
    public function cheatCode(?CreativeWork $value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setCheatCode(?CreativeWork $value)
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
    * @param CreativeWork|array $value
    * @return $this
    */
    public function gameTip(?CreativeWork $value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setGameTip(?CreativeWork $value)
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
    * @return $this|string|array
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function directors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirectors(?Person $value)
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
    * @param GamePlayMode|array $value
    * @return $this
    */
    public function playMode(?GamePlayMode $value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }
   /**
    * @param GamePlayMode|array $value
    * @return $this
    */
    public function setPlayMode(?GamePlayMode $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirector(?Person $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function actors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActors(?Person $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Game\\VideoGame','Thing\\VideoGame');

