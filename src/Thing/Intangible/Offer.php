<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
/**
* An offer to transfer some rights to an item or to provide a service — for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.<br/><br/>

For <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GTIN</a>-related fields, see <a href="http://www.gs1.org/barcodes/support/check_digit_calculator">Check Digit calculator</a> and <a href="http://www.gs1us.org/resources/standards/gtin-validation-guide">validation guide</a> from <a href="http://www.gs1.org/">GS1</a>.
* @see http://schema.org/Offer
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Offer extends Intangible
{

     
     /**
     * The date after which the price is no longer available.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function priceValidUntil(?\DateTimeInterface $value):self
     {
        $this->setProperty("priceValidUntil",$value);
        return $this;
     }

     
     /**
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
     * @param Offer $value
     * @return $this
     */

     public function addOn(?Offer $value):self
     {
        $this->setProperty("addOn",$value);
        return $this;
     }

     
     /**
     * A pointer to the organization or person making the offer.
     * @param Organization|Person $value
     * @return $this
     */

     public function offeredBy( $value):self
     {
        $this->setProperty("offeredBy",$value);
        return $this;
     }

     
}

