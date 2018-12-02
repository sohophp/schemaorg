<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
/**
* The mailing address.
* @see http://schema.org/PostalAddress
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
*/
class PostalAddress extends ContactPoint
{

     
     /**
     * The post office box number for PO box addresses.
     * @param string $value
     * @return $this
     */

     public function postOfficeBoxNumber(?string $value):self
     {
        $this->setProperty("postOfficeBoxNumber",$value);
        return $this;
     }

     
     /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @param string $value
     * @return $this
     */

     public function streetAddress(?string $value):self
     {
        $this->setProperty("streetAddress",$value);
        return $this;
     }

     
     /**
     * The region. For example, CA.
     * @param string $value
     * @return $this
     */

     public function addressRegion(?string $value):self
     {
        $this->setProperty("addressRegion",$value);
        return $this;
     }

     
     /**
     * The locality. For example, Mountain View.
     * @param string $value
     * @return $this
     */

     public function addressLocality(?string $value):self
     {
        $this->setProperty("addressLocality",$value);
        return $this;
     }

     
}

