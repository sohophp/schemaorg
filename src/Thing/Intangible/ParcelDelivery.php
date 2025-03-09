<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* The delivery of a parcel either via the postal service or a commercial service.
* @see schema:ParcelDelivery
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ParcelDelivery extends Intangible
{
   /**
        * The overall order the items in this delivery were included in.
        */
    protected $partOfOrder = null;

   /**
        * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
        */
    protected $carrier = null;

   /**
        * The earliest date the package may arrive.
        */
    protected $expectedArrivalFrom = null;

   /**
        * Item(s) being shipped.
        */
    protected $itemShipped = null;

   /**
        * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
        */
    protected $deliveryStatus = null;

   /**
        * Shipper's address.
        */
    protected $originAddress = null;

   /**
        * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
        */
    protected $provider = null;

   /**
        * Tracking url for the parcel delivery.
        */
    protected $trackingUrl = null;

   /**
        * The latest date the package may arrive.
        */
    protected $expectedArrivalUntil = null;

   /**
        * Destination address.
        */
    protected $deliveryAddress = null;

   /**
        * Method used for delivery or shipping.
        */
    protected $hasDeliveryMethod = null;

   /**
        * Shipper tracking number.
        */
    protected $trackingNumber = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPartOfOrder($value)
    {
        $this->setProperty('partOfOrder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfOrder()
    {
       return $this->getProperty('partOfOrder');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCarrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCarrier()
    {
       return $this->getProperty('carrier');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setExpectedArrivalFrom($value)
    {
        $this->setProperty('expectedArrivalFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpectedArrivalFrom()
    {
       return $this->getProperty('expectedArrivalFrom');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setItemShipped($value)
    {
        $this->setProperty('itemShipped', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemShipped()
    {
       return $this->getProperty('itemShipped');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDeliveryStatus($value)
    {
        $this->setProperty('deliveryStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeliveryStatus()
    {
       return $this->getProperty('deliveryStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOriginAddress($value)
    {
        $this->setProperty('originAddress', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOriginAddress()
    {
       return $this->getProperty('originAddress');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrackingUrl($value)
    {
        $this->setProperty('trackingUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrackingUrl()
    {
       return $this->getProperty('trackingUrl');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setExpectedArrivalUntil($value)
    {
        $this->setProperty('expectedArrivalUntil', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpectedArrivalUntil()
    {
       return $this->getProperty('expectedArrivalUntil');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDeliveryAddress($value)
    {
        $this->setProperty('deliveryAddress', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeliveryAddress()
    {
       return $this->getProperty('deliveryAddress');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasDeliveryMethod($value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasDeliveryMethod()
    {
       return $this->getProperty('hasDeliveryMethod');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrackingNumber($value)
    {
        $this->setProperty('trackingNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrackingNumber()
    {
       return $this->getProperty('trackingNumber');
    }


}
