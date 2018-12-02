<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ContactPointOption;
use Sohophp\SchemaOrg\Thing\Product;
/**
* A contact point&#x2014;for example, a Customer Complaints department.
* @see http://schema.org/ContactPoint
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ContactPoint extends StructuredValue
{

     
     /**
     * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
     * @param ContactPointOption $value
     * @return $this
     */

     public function contactOption(?ContactPointOption $value):self
     {
        $this->setProperty("contactOption",$value);
        return $this;
     }

     
     /**
     * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
     * @param string $value
     * @return $this
     */

     public function contactType(?string $value):self
     {
        $this->setProperty("contactType",$value);
        return $this;
     }

     
     /**
     * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
     * @param Product|string $value
     * @return $this
     */

     public function productSupported( $value):self
     {
        $this->setProperty("productSupported",$value);
        return $this;
     }

     
}

