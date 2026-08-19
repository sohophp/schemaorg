<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article\NewsArticle;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\CreativeWork\Claim;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\MediaSubscription;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;

/**
 * A media object, such as an image, video, audio, or text object embedded in a web page or a downloadable dataset i.e. DataDownload. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 * @see https://schema.org/MediaObject
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class MediaObject extends CreativeWork
{
    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in [ISO 3166 format](http://en.wikipedia.org/wiki/ISO_3166).
     * @see https://schema.org/regionsAllowed
     * @param Place|array $value
     * @return $this
     */
    public function regionsAllowed($value)
    {
        $this->setProperty('regionsAllowed', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setRegionsAllowed($value)
    {
        $this->setProperty('regionsAllowed', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addRegionsAllowed($value)
    {
        $current = $this->getProperty('regionsAllowed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('regionsAllowed', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getRegionsAllowed()
    {
        return $this->getProperty('regionsAllowed');
    }
    /**
     * A NewsArticle associated with the Media Object.
     * @see https://schema.org/associatedArticle
     * @param NewsArticle|array $value
     * @return $this
     */
    public function associatedArticle($value)
    {
        $this->setProperty('associatedArticle', $value);
        return $this;
    }

    /**
     * @param NewsArticle|array $value
     * @return $this
     */
    public function setAssociatedArticle($value)
    {
        $this->setProperty('associatedArticle', $value);
        return $this;
    }

    /**
     * @param NewsArticle $value
     * @return $this
     */
    public function addAssociatedArticle($value)
    {
        $current = $this->getProperty('associatedArticle');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('associatedArticle', $current);
        return $this;
    }

    /**
     * @return NewsArticle|array
     */
    public function getAssociatedArticle()
    {
        return $this->getProperty('associatedArticle');
    }
    /**
     * The CreativeWork encoded by this media object.
     * @see https://schema.org/encodesCreativeWork
     * @param CreativeWork|array $value
     * @return $this
     */
    public function encodesCreativeWork($value)
    {
        $this->setProperty('encodesCreativeWork', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setEncodesCreativeWork($value)
    {
        $this->setProperty('encodesCreativeWork', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addEncodesCreativeWork($value)
    {
        $current = $this->getProperty('encodesCreativeWork');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('encodesCreativeWork', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getEncodesCreativeWork()
    {
        return $this->getProperty('encodesCreativeWork');
    }
    /**
     * File size in (mega/kilo)bytes.
     * @see https://schema.org/contentSize
     * @param string|array $value
     * @return $this
     */
    public function contentSize($value)
    {
        $this->setProperty('contentSize', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setContentSize($value)
    {
        $this->setProperty('contentSize', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addContentSize($value)
    {
        $current = $this->getProperty('contentSize');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contentSize', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getContentSize()
    {
        return $this->getProperty('contentSize');
    }
    /**
     * Date (including time if available) when this media object was uploaded to this site.
     * @see https://schema.org/uploadDate
     * @param mixed $value
     * @return $this
     */
    public function uploadDate($value)
    {
        $this->setProperty('uploadDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setUploadDate($value)
    {
        $this->setProperty('uploadDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addUploadDate($value)
    {
        $current = $this->getProperty('uploadDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('uploadDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUploadDate()
    {
        return $this->getProperty('uploadDate');
    }
    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @see https://schema.org/endTime
     * @param mixed $value
     * @return $this
     */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setEndTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addEndTime($value)
    {
        $current = $this->getProperty('endTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('endTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }
    /**
     * The bitrate of the media object.
     * @see https://schema.org/bitrate
     * @param string|array $value
     * @return $this
     */
    public function bitrate($value)
    {
        $this->setProperty('bitrate', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBitrate($value)
    {
        $this->setProperty('bitrate', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBitrate($value)
    {
        $current = $this->getProperty('bitrate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bitrate', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBitrate()
    {
        return $this->getProperty('bitrate');
    }
    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]] alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     * @see https://schema.org/encodingFormat
     * @param string|array $value
     * @return $this
     */
    public function encodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEncodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEncodingFormat($value)
    {
        $current = $this->getProperty('encodingFormat');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('encodingFormat', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEncodingFormat()
    {
        return $this->getProperty('encodingFormat');
    }
    /**
     * The width of the item.
     * @see https://schema.org/width
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function setWidth($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance $value
     * @return $this
     */
    public function addWidth($value)
    {
        $current = $this->getProperty('width');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('width', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Distance|array
     */
    public function getWidth()
    {
        return $this->getProperty('width');
    }
    /**
     * The [SHA-2](https://en.wikipedia.org/wiki/SHA-2) SHA256 hash of the content of the item. For example, a zero-length input has value 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'.
     * @see https://schema.org/sha256
     * @param string|array $value
     * @return $this
     */
    public function sha256($value)
    {
        $this->setProperty('sha256', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSha256($value)
    {
        $this->setProperty('sha256', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSha256($value)
    {
        $current = $this->getProperty('sha256');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sha256', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSha256()
    {
        return $this->getProperty('sha256');
    }
    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The interpreting party can be indicated using [[claimInterpreter]].
     * @see https://schema.org/interpretedAsClaim
     * @param Claim|array $value
     * @return $this
     */
    public function interpretedAsClaim($value)
    {
        $this->setProperty('interpretedAsClaim', $value);
        return $this;
    }

    /**
     * @param Claim|array $value
     * @return $this
     */
    public function setInterpretedAsClaim($value)
    {
        $this->setProperty('interpretedAsClaim', $value);
        return $this;
    }

    /**
     * @param Claim $value
     * @return $this
     */
    public function addInterpretedAsClaim($value)
    {
        $current = $this->getProperty('interpretedAsClaim');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('interpretedAsClaim', $current);
        return $this;
    }

    /**
     * @return Claim|array
     */
    public function getInterpretedAsClaim()
    {
        return $this->getProperty('interpretedAsClaim');
    }
    /**
     * Actual bytes of the media object, for example the image file or video file.
     * @see https://schema.org/contentUrl
     * @param string|array $value
     * @return $this
     */
    public function contentUrl($value)
    {
        $this->setProperty('contentUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setContentUrl($value)
    {
        $this->setProperty('contentUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addContentUrl($value)
    {
        $current = $this->getProperty('contentUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contentUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getContentUrl()
    {
        return $this->getProperty('contentUrl');
    }
    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @see https://schema.org/productionCompany
     * @param Organization|array $value
     * @return $this
     */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addProductionCompany($value)
    {
        $current = $this->getProperty('productionCompany');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('productionCompany', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getProductionCompany()
    {
        return $this->getProperty('productionCompany');
    }
    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the ```src``` element of an ```embed``` tag and should not be the same as the content of the ```loc``` tag.
     * @see https://schema.org/embedUrl
     * @param string|array $value
     * @return $this
     */
    public function embedUrl($value)
    {
        $this->setProperty('embedUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEmbedUrl($value)
    {
        $this->setProperty('embedUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEmbedUrl($value)
    {
        $current = $this->getProperty('embedUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('embedUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEmbedUrl()
    {
        return $this->getProperty('embedUrl');
    }
    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     * @see https://schema.org/playerType
     * @param string|array $value
     * @return $this
     */
    public function playerType($value)
    {
        $this->setProperty('playerType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPlayerType($value)
    {
        $this->setProperty('playerType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPlayerType($value)
    {
        $current = $this->getProperty('playerType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('playerType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPlayerType()
    {
        return $this->getProperty('playerType');
    }
    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that an earlier version had 'yes', 'no').
     * @see https://schema.org/requiresSubscription
     * @param MediaSubscription|bool|array $value
     * @return $this
     */
    public function requiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
     * @param MediaSubscription|bool|array $value
     * @return $this
     */
    public function setRequiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
     * @param MediaSubscription|bool $value
     * @return $this
     */
    public function addRequiresSubscription($value)
    {
        $current = $this->getProperty('requiresSubscription');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requiresSubscription', $current);
        return $this;
    }

    /**
     * @return MediaSubscription|bool|array
     */
    public function getRequiresSubscription()
    {
        return $this->getProperty('requiresSubscription');
    }
    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @see https://schema.org/duration
     * @param Duration|QuantitativeValue|array $value
     * @return $this
     */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
     * @param Duration|QuantitativeValue|array $value
     * @return $this
     */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
     * @param Duration|QuantitativeValue $value
     * @return $this
     */
    public function addDuration($value)
    {
        $current = $this->getProperty('duration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('duration', $current);
        return $this;
    }

    /**
     * @return Duration|QuantitativeValue|array
     */
    public function getDuration()
    {
        return $this->getProperty('duration');
    }
    /**
     * The height of the item.
     * @see https://schema.org/height
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance $value
     * @return $this
     */
    public function addHeight($value)
    {
        $current = $this->getProperty('height');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('height', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Distance|array
     */
    public function getHeight()
    {
        return $this->getProperty('height');
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed. See also [[eligibleRegion]].
     * @see https://schema.org/ineligibleRegion
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function ineligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function setIneligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape $value
     * @return $this
     */
    public function addIneligibleRegion($value)
    {
        $current = $this->getProperty('ineligibleRegion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ineligibleRegion', $current);
        return $this;
    }

    /**
     * @return Place|string|GeoShape|array
     */
    public function getIneligibleRegion()
    {
        return $this->getProperty('ineligibleRegion');
    }
    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @see https://schema.org/startTime
     * @param mixed $value
     * @return $this
     */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStartTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addStartTime($value)
    {
        $current = $this->getProperty('startTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('startTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }
}
