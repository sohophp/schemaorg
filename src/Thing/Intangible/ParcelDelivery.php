<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Event\DeliveryEvent;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Order;

/**
* The delivery of a parcel either via the postal service or a commercial service.
* @see http://schema.org/ParcelDelivery
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ParcelDelivery extends Intangible
{

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * Tracking url for the parcel delivery.
    * @param string $value
    * @return $this
    */
    public function trackingUrl(?string $value)
    {
        $this->setProperty('trackingUrl', $value);
        return $this;
    }

    /**
    * Destination address.
    * @param PostalAddress $value
    * @return $this
    */
    public function deliveryAddress(?PostalAddress $value)
    {
        $this->setProperty('deliveryAddress', $value);
        return $this;
    }

    /**
    * Shipper tracking number.
    * @param string $value
    * @return $this
    */
    public function trackingNumber(?string $value)
    {
        $this->setProperty('trackingNumber', $value);
        return $this;
    }

    /**
    * Method used for delivery or shipping.
    * @param DeliveryMethod $value
    * @return $this
    */
    public function hasDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }

    /**
    * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
    * @param DeliveryEvent $value
    * @return $this
    */
    public function deliveryStatus(?DeliveryEvent $value)
    {
        $this->setProperty('deliveryStatus', $value);
        return $this;
    }

    /**
    * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
    * @param Organization $value
    * @return $this
    */
    public function carrier(?Organization $value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
    * Shipper's address.
    * @param PostalAddress $value
    * @return $this
    */
    public function originAddress(?PostalAddress $value)
    {
        $this->setProperty('originAddress', $value);
        return $this;
    }

    /**
    * Item(s) being shipped.
    * @param Product $value
    * @return $this
    */
    public function itemShipped(?Product $value)
    {
        $this->setProperty('itemShipped', $value);
        return $this;
    }

    /**
    * The overall order the items in this delivery were included in.
    * @param Order $value
    * @return $this
    */
    public function partOfOrder(?Order $value)
    {
        $this->setProperty('partOfOrder', $value);
        return $this;
    }

    /**
    * The earliest date the package may arrive.
    * @param  $value
    * @return $this
    */
    public function expectedArrivalFrom($value)
    {
        $this->setProperty('expectedArrivalFrom', $value);
        return $this;
    }

    /**
    * The latest date the package may arrive.
    * @param  $value
    * @return $this
    */
    public function expectedArrivalUntil($value)
    {
        $this->setProperty('expectedArrivalUntil', $value);
        return $this;
    }


}

