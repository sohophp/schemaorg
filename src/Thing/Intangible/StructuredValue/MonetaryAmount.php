<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
/**
* A monetary value or range. This type can be used to describe an amount of money such as $50 USD, or a range as in describing a bank account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It is recommended to use <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> Types to describe the price of an Offer, Invoice, etc.
* @see http://schema.org/MonetaryAmount
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class MonetaryAmount extends StructuredValue
{

     
     /**
     * The value of the quantitative value or property value node.<br/><br/>

<ul>
<li>For <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
<li>For <a class="localLink" href="http://schema.org/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
</ul>

     * @param bool|string|StructuredValue $value
     * @return $this
     */

     public function value( $value):self
     {
        $this->setProperty("value",$value);
        return $this;
     }

     
     /**
     * The currency in which the monetary amount is expressed.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     * @param string $value
     * @return $this
     */

     public function currency(?string $value):self
     {
        $this->setProperty("currency",$value);
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
     * The upper value of some characteristic or property.
     * @param  $value
     * @return $this
     */

     public function maxValue( $value):self
     {
        $this->setProperty("maxValue",$value);
        return $this;
     }

     
     /**
     * The lower value of some characteristic or property.
     * @param  $value
     * @return $this
     */

     public function minValue( $value):self
     {
        $this->setProperty("minValue",$value);
        return $this;
     }

     
}
