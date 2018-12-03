<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article\NewsArticle;

/**
 * A media object, such as an image, video, or audio object embedded in a web page or a downloadable dataset i.e. DataDownload. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @see http://schema.org/MediaObject
 */
class MediaObject extends CreativeWork
{
    /**
     * Date when this media object was uploaded to this site.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function uploadDate(?\DateTimeInterface $value): self
    {
        $this->setProperty('uploadDate', $value);

        return $this;
    }

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     *
     * @param string $value
     *
     * @return $this
     */
    public function playerType(?string $value): self
    {
        $this->setProperty('playerType', $value);

        return $this;
    }

    /**
     * The bitrate of the media object.
     *
     * @param string $value
     *
     * @return $this
     */
    public function bitrate(?string $value): self
    {
        $this->setProperty('bitrate', $value);

        return $this;
    }

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
     *
     * @param bool $value
     *
     * @return $this
     */
    public function requiresSubscription(?bool $value): self
    {
        $this->setProperty('requiresSubscription', $value);

        return $this;
    }

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in <a href="http://en.wikipedia.org/wiki/ISO_3166">ISO 3166 format</a>.
     *
     * @param Place $value
     *
     * @return $this
     */
    public function regionsAllowed(?Place $value): self
    {
        $this->setProperty('regionsAllowed', $value);

        return $this;
    }

    /**
     * File size in (mega/kilo) bytes.
     *
     * @param string $value
     *
     * @return $this
     */
    public function contentSize(?string $value): self
    {
        $this->setProperty('contentSize', $value);

        return $this;
    }

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the <code>src</code> element of an <code>embed</code> tag and should not be the same as the content of the <code>loc</code> tag.
     *
     * @param string $value
     *
     * @return $this
     */
    public function embedUrl(?string $value): self
    {
        $this->setProperty('embedUrl', $value);

        return $this;
    }

    /**
     * Actual bytes of the media object, for example the image file or video file.
     *
     * @param string $value
     *
     * @return $this
     */
    public function contentUrl(?string $value): self
    {
        $this->setProperty('contentUrl', $value);

        return $this;
    }

    /**
     * A NewsArticle associated with the Media Object.
     *
     * @param NewsArticle $value
     *
     * @return $this
     */
    public function associatedArticle(?NewsArticle $value): self
    {
        $this->setProperty('associatedArticle', $value);

        return $this;
    }

    /**
     * The CreativeWork encoded by this media object.
     *
     * @param CreativeWork $value
     *
     * @return $this
     */
    public function encodesCreativeWork(?CreativeWork $value): self
    {
        $this->setProperty('encodesCreativeWork', $value);

        return $this;
    }
}
