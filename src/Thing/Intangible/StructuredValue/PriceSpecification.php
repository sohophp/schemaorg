<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
/**
* A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It is recommended to use <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a> to describe independent amounts of money such as a salary, credit card limits, etc.
* @see http://schema.org/PriceSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class PriceSpecification extends StructuredValue
{

     
     /**
     * The lowest price if the price is a range.
     * @param  $value
     * @return $this
     */

     public function minPrice( $value):self
     {
        $this->setProperty("minPrice",$value);
        return $this;
     }

     
     /**
     * The highest price if the price is a range.
     * @param  $value
     * @return $this
     */

     public function maxPrice( $value):self
     {
        $this->setProperty("maxPrice",$value);
        return $this;
     }

     
     /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     * @param bool $value
     * @return $this
     */

     public function valueAddedTaxIncluded(?bool $value):self
     {
        $this->setProperty("valueAddedTaxIncluded",$value);
        return $this;
     }

     
}

