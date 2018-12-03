<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;

use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
 *
 * @see http://schema.org/MusicGroup
 */
class MusicGroup extends PerformingGroup
{
    /**
     * A collection of music albums.
     *
     * @param MusicAlbum $value
     *
     * @return $this
     */
    public function albums(?MusicAlbum $value): self
    {
        $this->setProperty('albums', $value);

        return $this;
    }

    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function musicGroupMember(?Person $value): self
    {
        $this->setProperty('musicGroupMember', $value);

        return $this;
    }

    /**
     * A music album.
     *
     * @param MusicAlbum $value
     *
     * @return $this
     */
    public function album(?MusicAlbum $value): self
    {
        $this->setProperty('album', $value);

        return $this;
    }
}
