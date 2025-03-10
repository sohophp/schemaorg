<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\BroadcastFrequencySpecification;
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
        * The frequency used for over-the-air broadcasts. Numeric values or simple
 * ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences
 * of AM and FM radio channels, e.g. "87 FM".
        * @param string|BroadcastFrequencySpecification|array|mixed $value
    * @return $this
    */
    public function broadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }

    /**
    * @param string|BroadcastFrequencySpecification|array|mixed $value
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
        * @param string|array|mixed $value
    * @return $this
    */
    public function broadcastChannelId($value)
    {
        $this->setProperty('broadcastChannelId', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * @param string|array|mixed $value
    * @return $this
    */
    public function broadcastServiceTier($value)
    {
        $this->setProperty('broadcastServiceTier', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The CableOrSatelliteService offering the channel.
        * @param CableOrSatelliteService|array|string|mixed $value
    * @return $this
    */
    public function inBroadcastLineup($value)
    {
        $this->setProperty('inBroadcastLineup', $value);
        return $this;
    }

    /**
    * @param CableOrSatelliteService|array|string|mixed $value
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
        * The BroadcastService offered on this channel.
        * @param BroadcastService|array|string|mixed $value
    * @return $this
    */
    public function providesBroadcastService($value)
    {
        $this->setProperty('providesBroadcastService', $value);
        return $this;
    }

    /**
    * @param BroadcastService|array|string|mixed $value
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
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
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
