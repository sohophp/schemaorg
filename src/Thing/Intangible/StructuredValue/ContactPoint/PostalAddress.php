<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
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
     * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
     * @param Country|string $value
     * @return $this
     */

     public function addressCountry( $value):self
     {
        $this->setProperty("addressCountry",$value);
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
     * The postal code. For example, 94043.
     * @param string $value
     * @return $this
     */

     public function postalCode(?string $value):self
     {
        $this->setProperty("postalCode",$value);
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

