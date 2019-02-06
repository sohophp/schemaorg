<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Offer;

use Sohophp\SchemaOrg\Thing\Intangible\Offer;
/**
* When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.
* @see http://schema.org/AggregateOffer
* @package Sohophp\SchemaOrg\Thing\Intangible\Offer
*/
class AggregateOffer extends Offer
{

     
     /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     * @param Offer $value
     * @return $this
     */

     public function offers(?Offer $value):self
     {
        $this->setProperty("offers",$value);
        return $this;
     }

     
     /**
     * The number of offers for the product.
     * @param int $value
     * @return $this
     */

     public function offerCount(?int $value):self
     {
        $this->setProperty("offerCount",$value);
        return $this;
     }

     
     /**
     * The lowest price of all offers available.
     * @param string $value
     * @return $this
     */

     public function lowPrice(?string $value):self
     {
        $this->setProperty("lowPrice",$value);
        return $this;
     }

     
     /**
     * The highest price of all offers available.
     * @param string $value
     * @return $this
     */

     public function highPrice(?string $value):self
     {
        $this->setProperty("highPrice",$value);
        return $this;
     }

     
}

