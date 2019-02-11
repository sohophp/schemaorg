<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article\NewsArticle;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A media object, such as an image, video, or audio object embedded in a web page or a downloadable dataset i.e. DataDownload. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
* @see http://schema.org/MediaObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MediaObject extends CreativeWork
{

    /**
    * Date when this media object was uploaded to this site.
    * @param  $value
    * @return $this
    */
    public function uploadDate($value)
    {
        $this->setProperty('uploadDate', $value);
        return $this;
    }

    /**
    * Player type required&#x2014;for example, Flash or Silverlight.
    * @param string $value
    * @return $this
    */
    public function playerType(?string $value)
    {
        $this->setProperty('playerType', $value);
        return $this;
    }

    /**
    * The height of the item.
    * @param Distance|QuantitativeValue $value
    * @return $this
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * The bitrate of the media object.
    * @param string $value
    * @return $this
    */
    public function bitrate(?string $value)
    {
        $this->setProperty('bitrate', $value);
        return $this;
    }

    /**
    * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
    * @param bool $value
    * @return $this
    */
    public function requiresSubscription(?bool $value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
    * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in <a href="http://en.wikipedia.org/wiki/ISO_3166">ISO 3166 format</a>.
    * @param Place $value
    * @return $this
    */
    public function regionsAllowed(?Place $value)
    {
        $this->setProperty('regionsAllowed', $value);
        return $this;
    }

    /**
    * File size in (mega/kilo) bytes.
    * @param string $value
    * @return $this
    */
    public function contentSize(?string $value)
    {
        $this->setProperty('contentSize', $value);
        return $this;
    }

    /**
    * A URL pointing to a player for a specific video. In general, this is the information in the <code>src</code> element of an <code>embed</code> tag and should not be the same as the content of the <code>loc</code> tag.
    * @param string $value
    * @return $this
    */
    public function embedUrl(?string $value)
    {
        $this->setProperty('embedUrl', $value);
        return $this;
    }

    /**
    * The width of the item.
    * @param Distance|QuantitativeValue $value
    * @return $this
    */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * Actual bytes of the media object, for example the image file or video file.
    * @param string $value
    * @return $this
    */
    public function contentUrl(?string $value)
    {
        $this->setProperty('contentUrl', $value);
        return $this;
    }

    /**
    * A NewsArticle associated with the Media Object.
    * @param NewsArticle $value
    * @return $this
    */
    public function associatedArticle(?NewsArticle $value)
    {
        $this->setProperty('associatedArticle', $value);
        return $this;
    }

    /**
    * The production company or studio responsible for the item e.g. series, video game, episode etc.
    * @param Organization $value
    * @return $this
    */
    public function productionCompany(?Organization $value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * The CreativeWork encoded by this media object.
    * @param CreativeWork $value
    * @return $this
    */
    public function encodesCreativeWork(?CreativeWork $value)
    {
        $this->setProperty('encodesCreativeWork', $value);
        return $this;
    }

    /**
    * Media type typically expressed using a MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types">MDN reference</a>) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).<br/><br/>

In cases where a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> has several media type representations, <a class="localLink" href="http://schema.org/encoding">encoding</a> can be used to indicate each <a class="localLink" href="http://schema.org/MediaObject">MediaObject</a> alongside particular <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a> information.<br/><br/>

Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
    * @param string|string $value
    * @return $this
    */
    public function encodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }


}

