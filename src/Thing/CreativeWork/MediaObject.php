<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\MediaSubscription;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article\NewsArticle;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A media object, such as an image, video, or audio object embedded in a web
 * page or a downloadable dataset i.e. DataDownload. Note that a creative work
 * may have many media objects associated with it on the same web page. For
 * example, a page about a single song (MusicRecording) may have a music video
 * (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
* @see http://schema.org/MediaObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MediaObject extends CreativeWork
{


    /**
        * The startTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to start. For
 * actions that span a period of time, when the action was performed. e.g. John
 * wrote a book from *January* to December. For media, including audio and
 * video, it's the time offset of the start of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStartTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartTime()
    {
       return $this->getProperty('startTime');
    }


    /**
        * Date when this media object was uploaded to this site.
        * @param array|string|mixed $value
    * @return $this
    */
    public function uploadDate($value)
    {
        $this->setProperty('uploadDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUploadDate($value)
    {
        $this->setProperty('uploadDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUploadDate()
    {
       return $this->getProperty('uploadDate');
    }


    /**
        * Player type required&#x2014;for example, Flash or Silverlight.
        * @param string|array|mixed $value
    * @return $this
    */
    public function playerType($value)
    {
        $this->setProperty('playerType', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPlayerType($value)
    {
        $this->setProperty('playerType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPlayerType()
    {
       return $this->getProperty('playerType');
    }


    /**
        * The height of the item.
        * @param Distance|QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @param Distance|QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHeight()
    {
       return $this->getProperty('height');
    }


    /**
        * The bitrate of the media object.
        * @param string|array|mixed $value
    * @return $this
    */
    public function bitrate($value)
    {
        $this->setProperty('bitrate', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setBitrate($value)
    {
        $this->setProperty('bitrate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBitrate()
    {
       return $this->getProperty('bitrate');
    }


    /**
        * Indicates if use of the media require a subscription  (either paid or free).
 * Allowed values are ```true``` or ```false``` (note that an earlier version
 * had 'yes', 'no').
        * @param MediaSubscription|bool|array|string|mixed $value
    * @return $this
    */
    public function requiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
    * @param MediaSubscription|bool|array|string|mixed $value
    * @return $this
    */
    public function setRequiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequiresSubscription()
    {
       return $this->getProperty('requiresSubscription');
    }


    /**
        * The regions where the media is allowed. If not specified, then it's assumed
 * to be allowed everywhere. Specify the countries in [ISO 3166
 * format](http://en.wikipedia.org/wiki/ISO_3166).
        * @param Place|array|string|mixed $value
    * @return $this
    */
    public function regionsAllowed($value)
    {
        $this->setProperty('regionsAllowed', $value);
        return $this;
    }

    /**
    * @param Place|array|string|mixed $value
    * @return $this
    */
    public function setRegionsAllowed($value)
    {
        $this->setProperty('regionsAllowed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRegionsAllowed()
    {
       return $this->getProperty('regionsAllowed');
    }


    /**
        * File size in (mega/kilo) bytes.
        * @param string|array|mixed $value
    * @return $this
    */
    public function contentSize($value)
    {
        $this->setProperty('contentSize', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setContentSize($value)
    {
        $this->setProperty('contentSize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContentSize()
    {
       return $this->getProperty('contentSize');
    }


    /**
        * A URL pointing to a player for a specific video. In general, this is the
 * information in the ```src``` element of an ```embed``` tag and should not be
 * the same as the content of the ```loc``` tag.
        * @param string|array|mixed $value
    * @return $this
    */
    public function embedUrl($value)
    {
        $this->setProperty('embedUrl', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setEmbedUrl($value)
    {
        $this->setProperty('embedUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmbedUrl()
    {
       return $this->getProperty('embedUrl');
    }


    /**
        * The width of the item.
        * @param QuantitativeValue|Distance|array|string|mixed $value
    * @return $this
    */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|Distance|array|string|mixed $value
    * @return $this
    */
    public function setWidth($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWidth()
    {
       return $this->getProperty('width');
    }


    /**
        * Actual bytes of the media object, for example the image file or video file.
        * @param string|array|mixed $value
    * @return $this
    */
    public function contentUrl($value)
    {
        $this->setProperty('contentUrl', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setContentUrl($value)
    {
        $this->setProperty('contentUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContentUrl()
    {
       return $this->getProperty('contentUrl');
    }


    /**
        * The endTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to end. For
 * actions that span a period of time, when the action was performed. e.g. John
 * wrote a book from January to *December*. For media, including audio and
 * video, it's the time offset of the end of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEndTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndTime()
    {
       return $this->getProperty('endTime');
    }


    /**
        * A NewsArticle associated with the Media Object.
        * @param NewsArticle|array|string|mixed $value
    * @return $this
    */
    public function associatedArticle($value)
    {
        $this->setProperty('associatedArticle', $value);
        return $this;
    }

    /**
    * @param NewsArticle|array|string|mixed $value
    * @return $this
    */
    public function setAssociatedArticle($value)
    {
        $this->setProperty('associatedArticle', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedArticle()
    {
       return $this->getProperty('associatedArticle');
    }


    /**
        * The production company or studio responsible for the item e.g. series, video
 * game, episode etc.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductionCompany()
    {
       return $this->getProperty('productionCompany');
    }


    /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * date format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }


    /**
        * The CreativeWork encoded by this media object.
        * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function encodesCreativeWork($value)
    {
        $this->setProperty('encodesCreativeWork', $value);
        return $this;
    }

    /**
    * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function setEncodesCreativeWork($value)
    {
        $this->setProperty('encodesCreativeWork', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEncodesCreativeWork()
    {
       return $this->getProperty('encodesCreativeWork');
    }


    /**
        * Media type typically expressed using a MIME format (see [IANA
 * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN
 * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types))
 * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3
 * etc.).
 * 
 * In cases where a [[CreativeWork]] has several media type representations,
 * [[encoding]] can be used to indicate each [[MediaObject]] alongside
 * particular [[encodingFormat]] information.
 * 
 * Unregistered or niche encoding and file formats can be indicated instead via
 * the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata
 * entry.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function encodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setEncodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEncodingFormat()
    {
       return $this->getProperty('encodingFormat');
    }


}
