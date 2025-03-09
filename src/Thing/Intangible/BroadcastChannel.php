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
        */
    protected $inBroadcastLineup = null;

   /**
        * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequencies of AM and FM radio channels, e.g. "87 FM".
        */
    protected $broadcastFrequency = null;

   /**
        * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
        */
    protected $broadcastChannelId = null;

   /**
        * The type of service required to have access to the channel (e.g. Standard or Premium).
        */
    protected $broadcastServiceTier = null;

   /**
        * The BroadcastService offered on this channel.
        */
    protected $providesBroadcastService = null;

   /**
        * Genre of the creative work, broadcast channel or group.
        */
    protected $genre = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
