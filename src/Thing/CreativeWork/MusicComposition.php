<?php
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

*
*/
class MusicComposition extends CreativeWork
{

    /**
    * The type of composition (e.g. overture, sonata, symphony, etc.).
    * @param string|array $value
    * @return $this
    */
    public function musicCompositionForm(?string $value)
    {
        $this->setProperty('musicCompositionForm', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMusicCompositionForm(?string $value)
    {
        $this->setProperty('musicCompositionForm', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicCompositionForm()
    {
       return $this->getProperty('musicCompositionForm');
    }

    /**
    * The words in the song.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function lyrics(?CreativeWork $value)
    {
        $this->setProperty('lyrics', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setLyrics(?CreativeWork $value)
    {
        $this->setProperty('lyrics', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLyrics()
    {
       return $this->getProperty('lyrics');
    }

    /**
    * Smaller compositions included in this work (e.g. a movement in a symphony).
    * @param MusicComposition|array $value
    * @return $this
    */
    public function includedComposition(?MusicComposition $value)
    {
        $this->setProperty('includedComposition', $value);
        return $this;
    }
   /**
    * @param MusicComposition|array $value
    * @return $this
    */
    public function setIncludedComposition(?MusicComposition $value)
    {
        $this->setProperty('includedComposition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIncludedComposition()
    {
       return $this->getProperty('includedComposition');
    }

    /**
    * The person who wrote the words.
    * @param Person|array $value
    * @return $this
    */
    public function lyricist(?Person $value)
    {
        $this->setProperty('lyricist', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setLyricist(?Person $value)
    {
        $this->setProperty('lyricist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLyricist()
    {
       return $this->getProperty('lyricist');
    }

    /**
    * An audio recording of the work.
    * @param MusicRecording|array $value
    * @return $this
    */
    public function recordedAs(?MusicRecording $value)
    {
        $this->setProperty('recordedAs', $value);
        return $this;
    }
   /**
    * @param MusicRecording|array $value
    * @return $this
    */
    public function setRecordedAs(?MusicRecording $value)
    {
        $this->setProperty('recordedAs', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecordedAs()
    {
       return $this->getProperty('recordedAs');
    }

    /**
    * An arrangement derived from the composition.
    * @param MusicComposition|array $value
    * @return $this
    */
    public function musicArrangement(?MusicComposition $value)
    {
        $this->setProperty('musicArrangement', $value);
        return $this;
    }
   /**
    * @param MusicComposition|array $value
    * @return $this
    */
    public function setMusicArrangement(?MusicComposition $value)
    {
        $this->setProperty('musicArrangement', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicArrangement()
    {
       return $this->getProperty('musicArrangement');
    }

    /**
    * The date and place the work was first performed.
    * @param Event|array $value
    * @return $this
    */
    public function firstPerformance(?Event $value)
    {
        $this->setProperty('firstPerformance', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setFirstPerformance(?Event $value)
    {
        $this->setProperty('firstPerformance', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFirstPerformance()
    {
       return $this->getProperty('firstPerformance');
    }

    /**
    * The International Standard Musical Work Code for the composition.
    * @param string|array $value
    * @return $this
    */
    public function iswcCode(?string $value)
    {
        $this->setProperty('iswcCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIswcCode(?string $value)
    {
        $this->setProperty('iswcCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIswcCode()
    {
       return $this->getProperty('iswcCode');
    }

    /**
    * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function composer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setComposer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getComposer()
    {
       return $this->getProperty('composer');
    }

    /**
    * The key, mode, or scale this composition uses.
    * @param string|array $value
    * @return $this
    */
    public function musicalKey(?string $value)
    {
        $this->setProperty('musicalKey', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMusicalKey(?string $value)
    {
        $this->setProperty('musicalKey', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicalKey()
    {
       return $this->getProperty('musicalKey');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MusicComposition','Thing\\MusicComposition');

