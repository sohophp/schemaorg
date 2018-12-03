<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Event;

/**
 * A musical composition.
 *
 * @see http://schema.org/MusicComposition
 */
class MusicComposition extends CreativeWork
{
    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     * @param string $value
     *
     * @return $this
     */
    public function musicCompositionForm(?string $value): self
    {
        $this->setProperty('musicCompositionForm', $value);

        return $this;
    }

    /**
     * Smaller compositions included in this work (e.g. a movement in a symphony).
     *
     * @param MusicComposition $value
     *
     * @return $this
     */
    public function includedComposition(?MusicComposition $value): self
    {
        $this->setProperty('includedComposition', $value);

        return $this;
    }

    /**
     * The person who wrote the words.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function lyricist(?Person $value): self
    {
        $this->setProperty('lyricist', $value);

        return $this;
    }

    /**
     * An audio recording of the work.
     *
     * @param MusicRecording $value
     *
     * @return $this
     */
    public function recordedAs(?MusicRecording $value): self
    {
        $this->setProperty('recordedAs', $value);

        return $this;
    }

    /**
     * The date and place the work was first performed.
     *
     * @param Event $value
     *
     * @return $this
     */
    public function firstPerformance(?Event $value): self
    {
        $this->setProperty('firstPerformance', $value);

        return $this;
    }

    /**
     * An arrangement derived from the composition.
     *
     * @param MusicComposition $value
     *
     * @return $this
     */
    public function musicArrangement(?MusicComposition $value): self
    {
        $this->setProperty('musicArrangement', $value);

        return $this;
    }

    /**
     * The words in the song.
     *
     * @param CreativeWork $value
     *
     * @return $this
     */
    public function lyrics(?CreativeWork $value): self
    {
        $this->setProperty('lyrics', $value);

        return $this;
    }

    /**
     * The International Standard Musical Work Code for the composition.
     *
     * @param string $value
     *
     * @return $this
     */
    public function iswcCode(?string $value): self
    {
        $this->setProperty('iswcCode', $value);

        return $this;
    }

    /**
     * The key, mode, or scale this composition uses.
     *
     * @param string $value
     *
     * @return $this
     */
    public function musicalKey(?string $value): self
    {
        $this->setProperty('musicalKey', $value);

        return $this;
    }
}
