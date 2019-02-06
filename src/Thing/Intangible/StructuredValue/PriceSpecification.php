<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
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
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     * @param PriceSpecification $value
     * @return $this
     */

     public function eligibleTransactionVolume(?PriceSpecification $value):self
     {
        $this->setProperty("eligibleTransactionVolume",$value);
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
     * The currency of the price, or a price component when attached to <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     * @param string $value
     * @return $this
     */

     public function priceCurrency(?string $value):self
     {
        $this->setProperty("priceCurrency",$value);
        return $this;
     }

     
     /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function eligibleQuantity(?QuantitativeValue $value):self
     {
        $this->setProperty("eligibleQuantity",$value);
        return $this;
     }

     
     /**
     * The date when the item becomes valid.
     * @param  $value
     * @return $this
     */

     public function validFrom( $value):self
     {
        $this->setProperty("validFrom",$value);
        return $this;
     }

     
     /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @param  $value
     * @return $this
     */

     public function validThrough( $value):self
     {
        $this->setProperty("validThrough",$value);
        return $this;
     }

     
     /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.<br/><br/>

Usage guidelines:<br/><br/>

<ul>
<li>Use the <a class="localLink" href="http://schema.org/priceCurrency">priceCurrency</a> property (with standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR") instead of including <a href="http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign">ambiguous symbols</a> such as '$' in the value.</li>
<li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
<li>Note that both <a href="http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute">RDFa</a> and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.</li>
<li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
</ul>

     * @param string $value
     * @return $this
     */

     public function price(?string $value):self
     {
        $this->setProperty("price",$value);
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

