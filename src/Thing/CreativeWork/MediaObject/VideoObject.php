<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
 * A video file.
 *
 * @see http://schema.org/VideoObject
 */
class VideoObject extends MediaObject
{
    /**
     * The frame size of the video.
     *
     * @param string $value
     *
     * @return $this
     */
    public function videoFrameSize(?string $value): self
    {
        $this->setProperty('videoFrameSize', $value);

        return $this;
    }

    /**
     * The quality of the video.
     *
     * @param string $value
     *
     * @return $this
     */
    public function videoQuality(?string $value): self
    {
        $this->setProperty('videoQuality', $value);

        return $this;
    }
}
