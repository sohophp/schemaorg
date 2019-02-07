<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
/**
* The price for the delivery of an offer using a particular delivery method.
* @see http://schema.org/DeliveryChargeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class DeliveryChargeSpecification extends PriceSpecification
{

     
     /**
     * The geographic area where a service or offered item is provided.
     * @param AdministrativeArea|string|Place|GeoShape $value
     * @return $this
     */

     public function areaServed( $value):self
     {
        $this->setProperty("areaServed",$value);
        return $this;
     }

     
     /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br/><br/>

See also <a class="localLink" href="http://schema.org/eligibleRegion">eligibleRegion</a>.
     * @param Place|string|GeoShape $value
     * @return $this
     */

     public function ineligibleRegion( $value):self
     {
        $this->setProperty("ineligibleRegion",$value);
        return $this;
     }

     
     /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     * @param DeliveryMethod $value
     * @return $this
     */

     public function appliesToDeliveryMethod(?DeliveryMethod $value):self
     {
        $this->setProperty("appliesToDeliveryMethod",$value);
        return $this;
     }

     
     /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>

See also <a class="localLink" href="http://schema.org/ineligibleRegion">ineligibleRegion</a>.
     * @param string|Place|GeoShape $value
     * @return $this
     */

     public function eligibleRegion( $value):self
     {
        $this->setProperty("eligibleRegion",$value);
        return $this;
     }

     
}
