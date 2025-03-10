<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Game;

use Sohophp\SchemaOrg\Thing\CreativeWork\Game;

/**
* A video game is an electronic game that involves human interaction with a
 * user interface to generate visual feedback on a video device.
* @see schema:VideoGame
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Game
*/
class VideoGame extends Game
{


    /**
        * The server on which  it is possible to play the game.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gameServer($value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGameServer($value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameServer()
    {
       return $this->getProperty('gameServer');
    }


    /**
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can
 * be associated with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }


    /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
 * event. Directors can be associated with individual items or with a series,
 * episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }


    /**
        * Links to tips, tactics, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gameTip($value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGameTip($value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameTip()
    {
       return $this->getProperty('gameTip');
    }


    /**
        * The electronic systems used to play [video
 * games](http://en.wikipedia.org/wiki/Category:Video_game_platforms).
        * @param array|string|mixed $value
    * @return $this
    */
    public function gamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGamePlatform()
    {
       return $this->getProperty('gamePlatform');
    }


    /**
        * Cheat codes to the game.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCheatCode()
    {
       return $this->getProperty('cheatCode');
    }


    /**
        * Indicates whether this game is multi-player, co-op or single-player.  The
 * game can be marked as multi-player, co-op and single-player at the same time.
        * @param array|string|mixed $value
    * @return $this
    */
    public function playMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPlayMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPlayMode()
    {
       return $this->getProperty('playMode');
    }


    /**
        * The trailer of a movie or TV/radio series, season, episode, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrailer()
    {
       return $this->getProperty('trailer');
    }


    /**
        * The composer of the soundtrack.
        * @param array|string|mixed $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }


    /**
        * The edition of a video game.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gameEdition($value)
    {
        $this->setProperty('gameEdition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGameEdition($value)
    {
        $this->setProperty('gameEdition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameEdition()
    {
       return $this->getProperty('gameEdition');
    }


    /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc.,
 * or in an event. Actors can be associated with individual items or with a
 * series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }


    /**
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated
 * with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }


}
