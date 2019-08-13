<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A musical composition.
* @see http://schema.org/MusicComposition
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicComposition extends CreativeWork
{

    /**
    * The type of composition (e.g. overture, sonata, symphony, etc.).
    * @param string $value
    * @return $this
    */
    public function musicCompositionForm(?string $value)
    {
        $this->setProperty('musicCompositionForm', $value);
        return $this;
    }

    /**
    * The words in the song.
    * @param CreativeWork $value
    * @return $this
    */
    public function lyrics(?CreativeWork $value)
    {
        $this->setProperty('lyrics', $value);
        return $this;
    }

    /**
    * Smaller compositions included in this work (e.g. a movement in a symphony).
    * @param MusicComposition $value
    * @return $this
    */
    public function includedComposition(?MusicComposition $value)
    {
        $this->setProperty('includedComposition', $value);
        return $this;
    }

    /**
    * The person who wrote the words.
    * @param Person $value
    * @return $this
    */
    public function lyricist(?Person $value)
    {
        $this->setProperty('lyricist', $value);
        return $this;
    }

    /**
    * An audio recording of the work.
    * @param MusicRecording $value
    * @return $this
    */
    public function recordedAs(?MusicRecording $value)
    {
        $this->setProperty('recordedAs', $value);
        return $this;
    }

    /**
    * An arrangement derived from the composition.
    * @param MusicComposition $value
    * @return $this
    */
    public function musicArrangement(?MusicComposition $value)
    {
        $this->setProperty('musicArrangement', $value);
        return $this;
    }

    /**
    * The date and place the work was first performed.
    * @param Event $value
    * @return $this
    */
    public function firstPerformance(?Event $value)
    {
        $this->setProperty('firstPerformance', $value);
        return $this;
    }

    /**
    * The International Standard Musical Work Code for the composition.
    * @param string $value
    * @return $this
    */
    public function iswcCode(?string $value)
    {
        $this->setProperty('iswcCode', $value);
        return $this;
    }

    /**
    * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
    * @param Person|Organization $value
    * @return $this
    */
    public function composer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }

    /**
    * The key, mode, or scale this composition uses.
    * @param string $value
    * @return $this
    */
    public function musicalKey(?string $value)
    {
        $this->setProperty('musicalKey', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MusicComposition','Thing\\MusicComposition');

