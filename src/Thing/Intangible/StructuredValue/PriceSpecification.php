<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\MemberProgramTier;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It is recommended to use [[MonetaryAmount]] to describe independent amounts of money such as a salary, credit card limits, etc.
 * @see https://schema.org/PriceSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class PriceSpecification extends StructuredValue
{
    /**
     * The lowest price if the price is a range.
     * @see https://schema.org/minPrice
     * @param mixed $value
     * @return $this
     */
    public function minPrice($value)
    {
        $this->setProperty('minPrice', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setMinPrice($value)
    {
        $this->setProperty('minPrice', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addMinPrice($value)
    {
        $current = $this->getProperty('minPrice');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('minPrice', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinPrice()
    {
        return $this->getProperty('minPrice');
    }
    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     * @see https://schema.org/valueAddedTaxIncluded
     * @param bool|array $value
     * @return $this
     */
    public function valueAddedTaxIncluded($value)
    {
        $this->setProperty('valueAddedTaxIncluded', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setValueAddedTaxIncluded($value)
    {
        $this->setProperty('valueAddedTaxIncluded', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addValueAddedTaxIncluded($value)
    {
        $current = $this->getProperty('valueAddedTaxIncluded');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('valueAddedTaxIncluded', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getValueAddedTaxIncluded()
    {
        return $this->getProperty('valueAddedTaxIncluded');
    }
    /**
     * The membership program tier(s) an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     * @see https://schema.org/validForMemberTier
     * @param MemberProgramTier|array $value
     * @return $this
     */
    public function validForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
     * @param MemberProgramTier|array $value
     * @return $this
     */
    public function setValidForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
     * @param MemberProgramTier $value
     * @return $this
     */
    public function addValidForMemberTier($value)
    {
        $current = $this->getProperty('validForMemberTier');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validForMemberTier', $current);
        return $this;
    }

    /**
     * @return MemberProgramTier|array
     */
    public function getValidForMemberTier()
    {
        return $this->getProperty('validForMemberTier');
    }
    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @see https://schema.org/validThrough
     * @param mixed $value
     * @return $this
     */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidThrough($value)
    {
        $current = $this->getProperty('validThrough');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validThrough', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidThrough()
    {
        return $this->getProperty('validThrough');
    }
    /**
     * The highest price if the price is a range.
     * @see https://schema.org/maxPrice
     * @param mixed $value
     * @return $this
     */
    public function maxPrice($value)
    {
        $this->setProperty('maxPrice', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setMaxPrice($value)
    {
        $this->setProperty('maxPrice', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addMaxPrice($value)
    {
        $current = $this->getProperty('maxPrice');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('maxPrice', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxPrice()
    {
        return $this->getProperty('maxPrice');
    }
    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
     * @see https://schema.org/membershipPointsEarned
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function membershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setMembershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addMembershipPointsEarned($value)
    {
        $current = $this->getProperty('membershipPointsEarned');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('membershipPointsEarned', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getMembershipPointsEarned()
    {
        return $this->getProperty('membershipPointsEarned');
    }
    /**
     * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes. Use standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
     * @see https://schema.org/priceCurrency
     * @param string|array $value
     * @return $this
     */
    public function priceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPriceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPriceCurrency($value)
    {
        $current = $this->getProperty('priceCurrency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceCurrency', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPriceCurrency()
    {
        return $this->getProperty('priceCurrency');
    }
    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     * @see https://schema.org/eligibleTransactionVolume
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function eligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function setEligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
     * @param PriceSpecification $value
     * @return $this
     */
    public function addEligibleTransactionVolume($value)
    {
        $current = $this->getProperty('eligibleTransactionVolume');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleTransactionVolume', $current);
        return $this;
    }

    /**
     * @return PriceSpecification|array
     */
    public function getEligibleTransactionVolume()
    {
        return $this->getProperty('eligibleTransactionVolume');
    }
    /**
     * The date when the item becomes valid.
     * @see https://schema.org/validFrom
     * @param mixed $value
     * @return $this
     */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidFrom($value)
    {
        $current = $this->getProperty('validFrom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validFrom', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidFrom()
    {
        return $this->getProperty('validFrom');
    }
    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes. Usage guidelines: * Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in the value. * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator. * Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting. * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.
     * @see https://schema.org/price
     * @param string|array $value
     * @return $this
     */
    public function price($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPrice($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPrice($value)
    {
        $current = $this->getProperty('price');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('price', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPrice()
    {
        return $this->getProperty('price');
    }
    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     * @see https://schema.org/eligibleQuantity
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function eligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setEligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addEligibleQuantity($value)
    {
        $current = $this->getProperty('eligibleQuantity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleQuantity', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getEligibleQuantity()
    {
        return $this->getProperty('eligibleQuantity');
    }
}
