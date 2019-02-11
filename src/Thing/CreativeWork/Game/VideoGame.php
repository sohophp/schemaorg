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
*/
class VideoGame extends Game
{

    /**
    * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
    * @param string|Thing|string $value
    * @return $this
    */
    public function gamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
    * The server on which  it is possible to play the game.
    * @param GameServer $value
    * @return $this
    */
    public function gameServer(?GameServer $value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * The trailer of a movie or tv/radio series, season, episode, etc.
    * @param VideoObject $value
    * @return $this
    */
    public function trailer(?VideoObject $value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * Cheat codes to the game.
    * @param CreativeWork $value
    * @return $this
    */
    public function cheatCode(?CreativeWork $value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
    * Links to tips, tactics, etc.
    * @param CreativeWork $value
    * @return $this
    */
    public function gameTip(?CreativeWork $value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }

    /**
    * The composer of the soundtrack.
    * @param Person|MusicGroup $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function directors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
    * @param GamePlayMode $value
    * @return $this
    */
    public function playMode(?GamePlayMode $value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function actors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }


}

