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
        * @param array|string|mixed $value
    * @return $this
    */
    public function musicCompositionForm($value)
    {
        $this->setProperty('musicCompositionForm', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An audio recording of the work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recordedAs($value)
    {
        $this->setProperty('recordedAs', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The words in the song.
        * @param array|string|mixed $value
    * @return $this
    */
    public function lyrics($value)
    {
        $this->setProperty('lyrics', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The person or organization who wrote a composition, or who is the composer of
 * a work performed at some event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function composer($value)
    {
        $this->setProperty('composer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The person who wrote the words.
        * @param array|string|mixed $value
    * @return $this
    */
    public function lyricist($value)
    {
        $this->setProperty('lyricist', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The date and place the work was first performed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function firstPerformance($value)
    {
        $this->setProperty('firstPerformance', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Smaller compositions included in this work (e.g. a movement in a symphony).
        * @param array|string|mixed $value
    * @return $this
    */
    public function includedComposition($value)
    {
        $this->setProperty('includedComposition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The key, mode, or scale this composition uses.
        * @param array|string|mixed $value
    * @return $this
    */
    public function musicalKey($value)
    {
        $this->setProperty('musicalKey', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An arrangement derived from the composition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function musicArrangement($value)
    {
        $this->setProperty('musicArrangement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The International Standard Musical Work Code for the composition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function iswcCode($value)
    {
        $this->setProperty('iswcCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
