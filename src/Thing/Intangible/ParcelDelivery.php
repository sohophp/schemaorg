<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* The delivery of a parcel either via the postal service or a commercial
 * service.
* @see schema:ParcelDelivery
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ParcelDelivery extends Intangible
{


    /**
        * The overall order the items in this delivery were included in.
        * @param array|string|mixed $value
    * @return $this
    */
    public function partOfOrder($value)
    {
        $this->setProperty('partOfOrder', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery
 * and flights.
        * @param array|string|mixed $value
    * @return $this
    */
    public function carrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The earliest date the package may arrive.
        * @param array|string|mixed $value
    * @return $this
    */
    public function expectedArrivalFrom($value)
    {
        $this->setProperty('expectedArrivalFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Item(s) being shipped.
        * @param array|string|mixed $value
    * @return $this
    */
    public function itemShipped($value)
    {
        $this->setProperty('itemShipped', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * New entry added as the package passes through each leg of its journey (from
 * shipment to final delivery).
        * @param array|string|mixed $value
    * @return $this
    */
    public function deliveryStatus($value)
    {
        $this->setProperty('deliveryStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Shipper's address.
        * @param array|string|mixed $value
    * @return $this
    */
    public function originAddress($value)
    {
        $this->setProperty('originAddress', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The service provider, service operator, or service performer; the goods
 * producer. Another party (a seller) may offer those services or goods on
 * behalf of the provider. A provider may also serve as the seller.
        * @param array|string|mixed $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Tracking url for the parcel delivery.
        * @param array|string|mixed $value
    * @return $this
    */
    public function trackingUrl($value)
    {
        $this->setProperty('trackingUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The latest date the package may arrive.
        * @param array|string|mixed $value
    * @return $this
    */
    public function expectedArrivalUntil($value)
    {
        $this->setProperty('expectedArrivalUntil', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Destination address.
        * @param array|string|mixed $value
    * @return $this
    */
    public function deliveryAddress($value)
    {
        $this->setProperty('deliveryAddress', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Method used for delivery or shipping.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasDeliveryMethod($value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Shipper tracking number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function trackingNumber($value)
    {
        $this->setProperty('trackingNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
