<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
/**
* A video file.
* @see http://schema.org/VideoObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class VideoObject extends MediaObject
{

     
     /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function actor(?Person $value):self
     {
        $this->setProperty("actor",$value);
        return $this;
     }

     
     /**
     * The frame size of the video.
     * @param string $value
     * @return $this
     */

     public function videoFrameSize(?string $value):self
     {
        $this->setProperty("videoFrameSize",$value);
        return $this;
     }

     
     /**
     * The composer of the soundtrack.
     * @param Person|MusicGroup $value
     * @return $this
     */

     public function musicBy( $value):self
     {
        $this->setProperty("musicBy",$value);
        return $this;
     }

     
     /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function directors(?Person $value):self
     {
        $this->setProperty("directors",$value);
        return $this;
     }

     
     /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function director(?Person $value):self
     {
        $this->setProperty("director",$value);
        return $this;
     }

     
     /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     * @param string $value
     * @return $this
     */

     public function transcript(?string $value):self
     {
        $this->setProperty("transcript",$value);
        return $this;
     }

     
     /**
     * The quality of the video.
     * @param string $value
     * @return $this
     */

     public function videoQuality(?string $value):self
     {
        $this->setProperty("videoQuality",$value);
        return $this;
     }

     
     /**
     * Thumbnail image for an image or video.
     * @param ImageObject $value
     * @return $this
     */

     public function thumbnail(?ImageObject $value):self
     {
        $this->setProperty("thumbnail",$value);
        return $this;
     }

     
     /**
     * The caption for this object.
     * @param string $value
     * @return $this
     */

     public function caption(?string $value):self
     {
        $this->setProperty("caption",$value);
        return $this;
     }

     
     /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     * @param Person $value
     * @return $this
     */

     public function actors(?Person $value):self
     {
        $this->setProperty("actors",$value);
        return $this;
     }

     
}

