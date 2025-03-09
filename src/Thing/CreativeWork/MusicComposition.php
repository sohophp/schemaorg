<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A musical composition.
* @see schema:MusicComposition
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MusicComposition extends CreativeWork
{
   /**
        * The type of composition (e.g. overture, sonata, symphony, etc.).
        */
    protected $musicCompositionForm = null;

   /**
        * An audio recording of the work.
        */
    protected $recordedAs = null;

   /**
        * The words in the song.
        */
    protected $lyrics = null;

   /**
        * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
        */
    protected $composer = null;

   /**
        * The person who wrote the words.
        */
    protected $lyricist = null;

   /**
        * The date and place the work was first performed.
        */
    protected $firstPerformance = null;

   /**
        * Smaller compositions included in this work (e.g. a movement in a symphony).
        */
    protected $includedComposition = null;

   /**
        * The key, mode, or scale this composition uses.
        */
    protected $musicalKey = null;

   /**
        * An arrangement derived from the composition.
        */
    protected $musicArrangement = null;

   /**
        * The International Standard Musical Work Code for the composition.
        */
    protected $iswcCode = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setMusicCompositionForm($value)
    {
        $this->setProperty('musicCompositionForm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicCompositionForm()
    {
       return $this->getProperty('musicCompositionForm');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecordedAs($value)
    {
        $this->setProperty('recordedAs', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecordedAs()
    {
       return $this->getProperty('recordedAs');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLyrics($value)
    {
        $this->setProperty('lyrics', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLyrics()
    {
       return $this->getProperty('lyrics');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setComposer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getComposer()
    {
       return $this->getProperty('composer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLyricist($value)
    {
        $this->setProperty('lyricist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLyricist()
    {
       return $this->getProperty('lyricist');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFirstPerformance($value)
    {
        $this->setProperty('firstPerformance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFirstPerformance()
    {
       return $this->getProperty('firstPerformance');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIncludedComposition($value)
    {
        $this->setProperty('includedComposition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludedComposition()
    {
       return $this->getProperty('includedComposition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMusicalKey($value)
    {
        $this->setProperty('musicalKey', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicalKey()
    {
       return $this->getProperty('musicalKey');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMusicArrangement($value)
    {
        $this->setProperty('musicArrangement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicArrangement()
    {
       return $this->getProperty('musicArrangement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIswcCode($value)
    {
        $this->setProperty('iswcCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIswcCode()
    {
       return $this->getProperty('iswcCode');
    }


}
