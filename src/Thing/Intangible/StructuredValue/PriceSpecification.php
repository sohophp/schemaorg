<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A structured value representing a price or price range. Typically, only the
 * subclasses of this type are used for markup. It is recommended to use
 * [[MonetaryAmount]] to describe independent amounts of money such as a salary,
 * credit card limits, etc.
* @see http://schema.org/PriceSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class PriceSpecification extends StructuredValue
{


    /**
        * The lowest price if the price is a range.
        * @param array|string|mixed $value
    * @return $this
    */
    public function minPrice($value)
    {
        $this->setProperty('minPrice', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMinPrice($value)
    {
        $this->setProperty('minPrice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMinPrice()
    {
       return $this->getProperty('minPrice');
    }


    /**
        * The transaction volume, in a monetary unit, for which the offer or price
 * specification is valid, e.g. for indicating a minimal purchasing volume, to
 * express free shipping above a certain order volume, or to limit the
 * acceptance of credit cards to purchases to a certain minimal amount.
        * @param PriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function eligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
    * @param PriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function setEligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleTransactionVolume()
    {
       return $this->getProperty('eligibleTransactionVolume');
    }


    /**
        * The highest price if the price is a range.
        * @param array|string|mixed $value
    * @return $this
    */
    public function maxPrice($value)
    {
        $this->setProperty('maxPrice', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMaxPrice($value)
    {
        $this->setProperty('maxPrice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaxPrice()
    {
       return $this->getProperty('maxPrice');
    }


    /**
        * The currency of the price, or a price component when attached to
 * [[PriceSpecification]] and its subtypes.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types e.g. "Ithaca HOUR".
        * @param string|array|mixed $value
    * @return $this
    */
    public function priceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPriceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceCurrency()
    {
       return $this->getProperty('priceCurrency');
    }


    /**
        * The interval and unit of measurement of ordering quantities for which the
 * offer or price specification is valid. This allows e.g. specifying that a
 * certain freight charge is valid only for a certain quantity.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function eligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function setEligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleQuantity()
    {
       return $this->getProperty('eligibleQuantity');
    }


    /**
        * The date when the item becomes valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }


    /**
        * The date after when the item is not valid. For example the end of an offer,
 * salary period, or a period of opening hours.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }


    /**
        * The offer price of a product, or of a price component when attached to
 * PriceSpecification and its subtypes.
 * 
 * Usage guidelines:
 * 
 * * Use the [[priceCurrency]] property (with standard formats: [ISO 4217
 * currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types e.g. "Ithaca HOUR") instead of including [ambiguous
 * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
 * such as '$' in the value.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
 * * Note that both
 * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute)
 * and Microdata syntax allow the use of a "content=" attribute for publishing
 * simple machine-readable values alongside more human-friendly formatting.
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similiar Unicode symbols.
        * @param string|array|mixed $value
    * @return $this
    */
    public function price($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPrice($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrice()
    {
       return $this->getProperty('price');
    }


    /**
        * Specifies whether the applicable value-added tax (VAT) is included in the
 * price specification or not.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function valueAddedTaxIncluded($value)
    {
        $this->setProperty('valueAddedTaxIncluded', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setValueAddedTaxIncluded($value)
    {
        $this->setProperty('valueAddedTaxIncluded', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValueAddedTaxIncluded()
    {
       return $this->getProperty('valueAddedTaxIncluded');
    }


}
