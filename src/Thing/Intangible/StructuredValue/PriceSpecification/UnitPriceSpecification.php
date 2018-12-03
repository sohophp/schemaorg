<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * The price asked for a given offer by the respective organization or person.
 *
 * @see http://schema.org/UnitPriceSpecification
 */
class UnitPriceSpecification extends PriceSpecification
{
    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
     *
     * @param  $value
     *
     * @return $this
     */
    public function billingIncrement($value): self
    {
        $this->setProperty('billingIncrement', $value);

        return $this;
    }

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
     *
     * @param QuantitativeValue $value
     *
     * @return $this
     */
    public function referenceQuantity(?QuantitativeValue $value): self
    {
        $this->setProperty('referenceQuantity', $value);

        return $this;
    }

    /**
     * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
     *
     * @param string $value
     *
     * @return $this
     */
    public function priceType(?string $value): self
    {
        $this->setProperty('priceType', $value);

        return $this;
    }
}
