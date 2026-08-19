<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Order;
use Sohophp\SchemaOrg\Thing\Event\DeliveryEvent;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The delivery of a parcel either via the postal service or a commercial service.
 * @see https://schema.org/ParcelDelivery
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class ParcelDelivery extends Intangible
{
    /**
     * Tracking url for the parcel delivery.
     * @see https://schema.org/trackingUrl
     * @param string|array $value
     * @return $this
     */
    public function trackingUrl($value)
    {
        $this->setProperty('trackingUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTrackingUrl($value)
    {
        $this->setProperty('trackingUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTrackingUrl($value)
    {
        $current = $this->getProperty('trackingUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('trackingUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTrackingUrl()
    {
        return $this->getProperty('trackingUrl');
    }
    /**
     * The earliest date the package may arrive.
     * @see https://schema.org/expectedArrivalFrom
     * @param mixed $value
     * @return $this
     */
    public function expectedArrivalFrom($value)
    {
        $this->setProperty('expectedArrivalFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setExpectedArrivalFrom($value)
    {
        $this->setProperty('expectedArrivalFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addExpectedArrivalFrom($value)
    {
        $current = $this->getProperty('expectedArrivalFrom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('expectedArrivalFrom', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpectedArrivalFrom()
    {
        return $this->getProperty('expectedArrivalFrom');
    }
    /**
     * The overall order the items in this delivery were included in.
     * @see https://schema.org/partOfOrder
     * @param Order|array $value
     * @return $this
     */
    public function partOfOrder($value)
    {
        $this->setProperty('partOfOrder', $value);
        return $this;
    }

    /**
     * @param Order|array $value
     * @return $this
     */
    public function setPartOfOrder($value)
    {
        $this->setProperty('partOfOrder', $value);
        return $this;
    }

    /**
     * @param Order $value
     * @return $this
     */
    public function addPartOfOrder($value)
    {
        $current = $this->getProperty('partOfOrder');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('partOfOrder', $current);
        return $this;
    }

    /**
     * @return Order|array
     */
    public function getPartOfOrder()
    {
        return $this->getProperty('partOfOrder');
    }
    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     * @see https://schema.org/deliveryStatus
     * @param DeliveryEvent|array $value
     * @return $this
     */
    public function deliveryStatus($value)
    {
        $this->setProperty('deliveryStatus', $value);
        return $this;
    }

    /**
     * @param DeliveryEvent|array $value
     * @return $this
     */
    public function setDeliveryStatus($value)
    {
        $this->setProperty('deliveryStatus', $value);
        return $this;
    }

    /**
     * @param DeliveryEvent $value
     * @return $this
     */
    public function addDeliveryStatus($value)
    {
        $current = $this->getProperty('deliveryStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('deliveryStatus', $current);
        return $this;
    }

    /**
     * @return DeliveryEvent|array
     */
    public function getDeliveryStatus()
    {
        return $this->getProperty('deliveryStatus');
    }
    /**
     * Item(s) being shipped.
     * @see https://schema.org/itemShipped
     * @param Product|array $value
     * @return $this
     */
    public function itemShipped($value)
    {
        $this->setProperty('itemShipped', $value);
        return $this;
    }

    /**
     * @param Product|array $value
     * @return $this
     */
    public function setItemShipped($value)
    {
        $this->setProperty('itemShipped', $value);
        return $this;
    }

    /**
     * @param Product $value
     * @return $this
     */
    public function addItemShipped($value)
    {
        $current = $this->getProperty('itemShipped');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('itemShipped', $current);
        return $this;
    }

    /**
     * @return Product|array
     */
    public function getItemShipped()
    {
        return $this->getProperty('itemShipped');
    }
    /**
     * Destination address.
     * @see https://schema.org/deliveryAddress
     * @param PostalAddress|array $value
     * @return $this
     */
    public function deliveryAddress($value)
    {
        $this->setProperty('deliveryAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress|array $value
     * @return $this
     */
    public function setDeliveryAddress($value)
    {
        $this->setProperty('deliveryAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress $value
     * @return $this
     */
    public function addDeliveryAddress($value)
    {
        $current = $this->getProperty('deliveryAddress');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('deliveryAddress', $current);
        return $this;
    }

    /**
     * @return PostalAddress|array
     */
    public function getDeliveryAddress()
    {
        return $this->getProperty('deliveryAddress');
    }
    /**
     * Method used for delivery or shipping.
     * @see https://schema.org/hasDeliveryMethod
     * @param DeliveryMethod|array $value
     * @return $this
     */
    public function hasDeliveryMethod($value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }

    /**
     * @param DeliveryMethod|array $value
     * @return $this
     */
    public function setHasDeliveryMethod($value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }

    /**
     * @param DeliveryMethod $value
     * @return $this
     */
    public function addHasDeliveryMethod($value)
    {
        $current = $this->getProperty('hasDeliveryMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasDeliveryMethod', $current);
        return $this;
    }

    /**
     * @return DeliveryMethod|array
     */
    public function getHasDeliveryMethod()
    {
        return $this->getProperty('hasDeliveryMethod');
    }
    /**
     * Shipper tracking number.
     * @see https://schema.org/trackingNumber
     * @param string|array $value
     * @return $this
     */
    public function trackingNumber($value)
    {
        $this->setProperty('trackingNumber', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTrackingNumber($value)
    {
        $this->setProperty('trackingNumber', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTrackingNumber($value)
    {
        $current = $this->getProperty('trackingNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('trackingNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTrackingNumber()
    {
        return $this->getProperty('trackingNumber');
    }
    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @see https://schema.org/provider
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
     * @param Organization|Person $value
     * @return $this
     */
    public function addProvider($value)
    {
        $current = $this->getProperty('provider');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('provider', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }
    /**
     * Shipper's address.
     * @see https://schema.org/originAddress
     * @param PostalAddress|array $value
     * @return $this
     */
    public function originAddress($value)
    {
        $this->setProperty('originAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress|array $value
     * @return $this
     */
    public function setOriginAddress($value)
    {
        $this->setProperty('originAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress $value
     * @return $this
     */
    public function addOriginAddress($value)
    {
        $current = $this->getProperty('originAddress');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('originAddress', $current);
        return $this;
    }

    /**
     * @return PostalAddress|array
     */
    public function getOriginAddress()
    {
        return $this->getProperty('originAddress');
    }
    /**
     * The latest date the package may arrive.
     * @see https://schema.org/expectedArrivalUntil
     * @param mixed $value
     * @return $this
     */
    public function expectedArrivalUntil($value)
    {
        $this->setProperty('expectedArrivalUntil', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setExpectedArrivalUntil($value)
    {
        $this->setProperty('expectedArrivalUntil', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addExpectedArrivalUntil($value)
    {
        $current = $this->getProperty('expectedArrivalUntil');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('expectedArrivalUntil', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpectedArrivalUntil()
    {
        return $this->getProperty('expectedArrivalUntil');
    }
    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     * @see https://schema.org/carrier
     * @param Organization|array $value
     * @return $this
     */
    public function carrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setCarrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addCarrier($value)
    {
        $current = $this->getProperty('carrier');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('carrier', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getCarrier()
    {
        return $this->getProperty('carrier');
    }
}
