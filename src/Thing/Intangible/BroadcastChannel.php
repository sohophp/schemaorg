<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Service\CableOrSatelliteService;
use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;

/**
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 *
 * @see http://schema.org/BroadcastChannel
 */
class BroadcastChannel extends Intangible
{
    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     *
     * @param string $value
     *
     * @return $this
     */
    public function broadcastChannelId(?string $value): self
    {
        $this->setProperty('broadcastChannelId', $value);

        return $this;
    }

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     *
     * @param string $value
     *
     * @return $this
     */
    public function broadcastServiceTier(?string $value): self
    {
        $this->setProperty('broadcastServiceTier', $value);

        return $this;
    }

    /**
     * The CableOrSatelliteService offering the channel.
     *
     * @param CableOrSatelliteService $value
     *
     * @return $this
     */
    public function inBroadcastLineup(?CableOrSatelliteService $value): self
    {
        $this->setProperty('inBroadcastLineup', $value);

        return $this;
    }

    /**
     * The BroadcastService offered on this channel.
     *
     * @param BroadcastService $value
     *
     * @return $this
     */
    public function providesBroadcastService(?BroadcastService $value): self
    {
        $this->setProperty('providesBroadcastService', $value);

        return $this;
    }
}
