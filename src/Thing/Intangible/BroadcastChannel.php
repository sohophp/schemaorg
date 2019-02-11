<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Service\CableOrSatelliteService;
use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;

/**
* A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
* @see http://schema.org/BroadcastChannel
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BroadcastChannel extends Intangible
{

    /**
    * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
    * @param string $value
    * @return $this
    */
    public function broadcastChannelId(?string $value)
    {
        $this->setProperty('broadcastChannelId', $value);
        return $this;
    }

    /**
    * The type of service required to have access to the channel (e.g. Standard or Premium).
    * @param string $value
    * @return $this
    */
    public function broadcastServiceTier(?string $value)
    {
        $this->setProperty('broadcastServiceTier', $value);
        return $this;
    }

    /**
    * The CableOrSatelliteService offering the channel.
    * @param CableOrSatelliteService $value
    * @return $this
    */
    public function inBroadcastLineup(?CableOrSatelliteService $value)
    {
        $this->setProperty('inBroadcastLineup', $value);
        return $this;
    }

    /**
    * The BroadcastService offered on this channel.
    * @param BroadcastService $value
    * @return $this
    */
    public function providesBroadcastService(?BroadcastService $value)
    {
        $this->setProperty('providesBroadcastService', $value);
        return $this;
    }

    /**
    * Genre of the creative work, broadcast channel or group.
    * @param string|string $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }


}

