<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
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
     * Tracking url for the parcel delivery.
     * @param string $value
     * @return $this
     */

     public function trackingUrl(?string $value):self
     {
        $this->setProperty("trackingUrl",$value);
        return $this;
     }

     
     /**
     * Destination address.
     * @param PostalAddress $value
     * @return $this
     */

     public function deliveryAddress(?PostalAddress $value):self
     {
        $this->setProperty("deliveryAddress",$value);
        return $this;
     }

     
     /**
     * Shipper tracking number.
     * @param string $value
     * @return $this
     */

     public function trackingNumber(?string $value):self
     {
        $this->setProperty("trackingNumber",$value);
        return $this;
     }

     
     /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     * @param DeliveryEvent $value
     * @return $this
     */

     public function deliveryStatus(?DeliveryEvent $value):self
     {
        $this->setProperty("deliveryStatus",$value);
        return $this;
     }

     
     /**
     * Shipper's address.
     * @param PostalAddress $value
     * @return $this
     */

     public function originAddress(?PostalAddress $value):self
     {
        $this->setProperty("originAddress",$value);
        return $this;
     }

     
     /**
     * Item(s) being shipped.
     * @param Product $value
     * @return $this
     */

     public function itemShipped(?Product $value):self
     {
        $this->setProperty("itemShipped",$value);
        return $this;
     }

     
     /**
     * The overall order the items in this delivery were included in.
     * @param Order $value
     * @return $this
     */

     public function partOfOrder(?Order $value):self
     {
        $this->setProperty("partOfOrder",$value);
        return $this;
     }

     
     /**
     * The earliest date the package may arrive.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function expectedArrivalFrom(?\DateTimeInterface $value):self
     {
        $this->setProperty("expectedArrivalFrom",$value);
        return $this;
     }

     
     /**
     * The latest date the package may arrive.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function expectedArrivalUntil(?\DateTimeInterface $value):self
     {
        $this->setProperty("expectedArrivalUntil",$value);
        return $this;
     }

     
}

