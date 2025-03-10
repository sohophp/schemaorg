<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
* @see schema:BroadcastChannel
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BroadcastChannel extends Intangible
{


    /**
        * The CableOrSatelliteService offering the channel.
        * @param array|string|mixed $value
    * @return $this
    */
    public function inBroadcastLineup($value)
    {
        $this->setProperty('inBroadcastLineup', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInBroadcastLineup($value)
    {
        $this->setProperty('inBroadcastLineup', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInBroadcastLineup()
    {
       return $this->getProperty('inBroadcastLineup');
    }


    /**
        * The frequency used for over-the-air broadcasts. Numeric values or simple
 * ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequencies
 * of AM and FM radio channels, e.g. "87 FM".
        * @param array|string|mixed $value
    * @return $this
    */
    public function broadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBroadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastFrequency()
    {
       return $this->getProperty('broadcastFrequency');
    }


    /**
        * The unique address by which the BroadcastService can be identified in a
 * provider lineup. In US, this is typically a number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function broadcastChannelId($value)
    {
        $this->setProperty('broadcastChannelId', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBroadcastChannelId($value)
    {
        $this->setProperty('broadcastChannelId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastChannelId()
    {
       return $this->getProperty('broadcastChannelId');
    }


    /**
        * The type of service required to have access to the channel (e.g. Standard or
 * Premium).
        * @param array|string|mixed $value
    * @return $this
    */
    public function broadcastServiceTier($value)
    {
        $this->setProperty('broadcastServiceTier', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBroadcastServiceTier($value)
    {
        $this->setProperty('broadcastServiceTier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastServiceTier()
    {
       return $this->getProperty('broadcastServiceTier');
    }


    /**
        * The BroadcastService offered on this channel.
        * @param array|string|mixed $value
    * @return $this
    */
    public function providesBroadcastService($value)
    {
        $this->setProperty('providesBroadcastService', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProvidesBroadcastService($value)
    {
        $this->setProperty('providesBroadcastService', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvidesBroadcastService()
    {
       return $this->getProperty('providesBroadcastService');
    }


    /**
        * Genre of the creative work, broadcast channel or group.
        * @param array|string|mixed $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGenre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGenre()
    {
       return $this->getProperty('genre');
    }


}
