<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * A monetary value or range. This type can be used to describe an amount of money such as $50 USD, or a range as in describing a bank account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It is recommended to use <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> Types to describe the price of an Offer, Invoice, etc.
 *
 * @see http://schema.org/MonetaryAmount
 */
class MonetaryAmount extends StructuredValue
{
}
