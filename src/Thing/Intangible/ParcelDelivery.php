<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Event\DeliveryEvent;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Order;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;

/**
* The delivery of a parcel either via the postal service or a commercial service.
* @see http://schema.org/ParcelDelivery
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class ParcelDelivery extends Intangible
{

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * Tracking url for the parcel delivery.
    * @param string|array $value
    * @return $this
    */
    public function trackingUrl(?string $value)
    {
        $this->setProperty('trackingUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTrackingUrl(?string $value)
    {
        $this->setProperty('trackingUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrackingUrl()
    {
       return $this->getProperty('trackingUrl');
    }

    /**
    * Shipper tracking number.
    * @param string|array $value
    * @return $this
    */
    public function trackingNumber(?string $value)
    {
        $this->setProperty('trackingNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTrackingNumber(?string $value)
    {
        $this->setProperty('trackingNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrackingNumber()
    {
       return $this->getProperty('trackingNumber');
    }

    /**
    * Method used for delivery or shipping.
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function hasDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }
   /**
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function setHasDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasDeliveryMethod()
    {
       return $this->getProperty('hasDeliveryMethod');
    }

    /**
    * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
    * @param DeliveryEvent|array $value
    * @return $this
    */
    public function deliveryStatus(?DeliveryEvent $value)
    {
        $this->setProperty('deliveryStatus', $value);
        return $this;
    }
   /**
    * @param DeliveryEvent|array $value
    * @return $this
    */
    public function setDeliveryStatus(?DeliveryEvent $value)
    {
        $this->setProperty('deliveryStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeliveryStatus()
    {
       return $this->getProperty('deliveryStatus');
    }

    /**
    * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
    * @param Organization|array $value
    * @return $this
    */
    public function carrier(?Organization $value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setCarrier(?Organization $value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCarrier()
    {
       return $this->getProperty('carrier');
    }

    /**
    * Item(s) being shipped.
    * @param Product|array $value
    * @return $this
    */
    public function itemShipped(?Product $value)
    {
        $this->setProperty('itemShipped', $value);
        return $this;
    }
   /**
    * @param Product|array $value
    * @return $this
    */
    public function setItemShipped(?Product $value)
    {
        $this->setProperty('itemShipped', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getItemShipped()
    {
       return $this->getProperty('itemShipped');
    }

    /**
    * The overall order the items in this delivery were included in.
    * @param Order|array $value
    * @return $this
    */
    public function partOfOrder(?Order $value)
    {
        $this->setProperty('partOfOrder', $value);
        return $this;
    }
   /**
    * @param Order|array $value
    * @return $this
    */
    public function setPartOfOrder(?Order $value)
    {
        $this->setProperty('partOfOrder', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartOfOrder()
    {
       return $this->getProperty('partOfOrder');
    }

    /**
    * The earliest date the package may arrive.
    * @param |array $value
    * @return $this
    */
    public function expectedArrivalFrom($value)
    {
        $this->setProperty('expectedArrivalFrom', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setExpectedArrivalFrom($value)
    {
        $this->setProperty('expectedArrivalFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExpectedArrivalFrom()
    {
       return $this->getProperty('expectedArrivalFrom');
    }

    /**
    * Shipper's address.
    * @param PostalAddress|array $value
    * @return $this
    */
    public function originAddress(?PostalAddress $value)
    {
        $this->setProperty('originAddress', $value);
        return $this;
    }
   /**
    * @param PostalAddress|array $value
    * @return $this
    */
    public function setOriginAddress(?PostalAddress $value)
    {
        $this->setProperty('originAddress', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOriginAddress()
    {
       return $this->getProperty('originAddress');
    }

    /**
    * Destination address.
    * @param PostalAddress|array $value
    * @return $this
    */
    public function deliveryAddress(?PostalAddress $value)
    {
        $this->setProperty('deliveryAddress', $value);
        return $this;
    }
   /**
    * @param PostalAddress|array $value
    * @return $this
    */
    public function setDeliveryAddress(?PostalAddress $value)
    {
        $this->setProperty('deliveryAddress', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeliveryAddress()
    {
       return $this->getProperty('deliveryAddress');
    }

    /**
    * The latest date the package may arrive.
    * @param |array $value
    * @return $this
    */
    public function expectedArrivalUntil($value)
    {
        $this->setProperty('expectedArrivalUntil', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setExpectedArrivalUntil($value)
    {
        $this->setProperty('expectedArrivalUntil', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExpectedArrivalUntil()
    {
       return $this->getProperty('expectedArrivalUntil');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\ParcelDelivery','Thing\\ParcelDelivery');

