<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PurchaseType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\IncentiveType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\IncentiveStatus;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\IncentiveQualifiedExpenseType;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Place;

/**
 * <p>Represents financial incentives for goods/services offered by an organization (or individual).</p> <p>Typically contains the [[name]] of the incentive, the [[incentivizedItem]], the [[incentiveAmount]], the [[incentiveStatus]], [[incentiveType]], the [[provider]] of the incentive, and [[eligibleWithSupplier]].</p> <p>Optionally contains criteria on whether the incentive is limited based on [[purchaseType]], [[purchasePriceLimit]], [[incomeLimit]], and the [[qualifiedExpense]].
 * @see https://schema.org/FinancialIncentive
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class FinancialIncentive extends Intangible
{
    /**
     * Optional. The type of purchase the consumer must make in order to qualify for this incentive.
     * @see https://schema.org/purchaseType
     * @param PurchaseType|array $value
     * @return $this
     */
    public function purchaseType($value)
    {
        $this->setProperty('purchaseType', $value);
        return $this;
    }

    /**
     * @param PurchaseType|array $value
     * @return $this
     */
    public function setPurchaseType($value)
    {
        $this->setProperty('purchaseType', $value);
        return $this;
    }

    /**
     * @param PurchaseType $value
     * @return $this
     */
    public function addPurchaseType($value)
    {
        $current = $this->getProperty('purchaseType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('purchaseType', $current);
        return $this;
    }

    /**
     * @return PurchaseType|array
     */
    public function getPurchaseType()
    {
        return $this->getProperty('purchaseType');
    }
    /**
     * The type of incentive offered (tax credit/rebate, tax deduction, tax waiver, subsidies, etc.).
     * @see https://schema.org/incentiveType
     * @param IncentiveType|array $value
     * @return $this
     */
    public function incentiveType($value)
    {
        $this->setProperty('incentiveType', $value);
        return $this;
    }

    /**
     * @param IncentiveType|array $value
     * @return $this
     */
    public function setIncentiveType($value)
    {
        $this->setProperty('incentiveType', $value);
        return $this;
    }

    /**
     * @param IncentiveType $value
     * @return $this
     */
    public function addIncentiveType($value)
    {
        $current = $this->getProperty('incentiveType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('incentiveType', $current);
        return $this;
    }

    /**
     * @return IncentiveType|array
     */
    public function getIncentiveType()
    {
        return $this->getProperty('incentiveType');
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
     * The status of the incentive (active, on hold, retired, etc.).
     * @see https://schema.org/incentiveStatus
     * @param IncentiveStatus|array $value
     * @return $this
     */
    public function incentiveStatus($value)
    {
        $this->setProperty('incentiveStatus', $value);
        return $this;
    }

    /**
     * @param IncentiveStatus|array $value
     * @return $this
     */
    public function setIncentiveStatus($value)
    {
        $this->setProperty('incentiveStatus', $value);
        return $this;
    }

    /**
     * @param IncentiveStatus $value
     * @return $this
     */
    public function addIncentiveStatus($value)
    {
        $current = $this->getProperty('incentiveStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('incentiveStatus', $current);
        return $this;
    }

    /**
     * @return IncentiveStatus|array
     */
    public function getIncentiveStatus()
    {
        return $this->getProperty('incentiveStatus');
    }
    /**
     * Optional. The maximum price the item can have and still qualify for this offer.
     * @see https://schema.org/purchasePriceLimit
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function purchasePriceLimit($value)
    {
        $this->setProperty('purchasePriceLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|array $value
     * @return $this
     */
    public function setPurchasePriceLimit($value)
    {
        $this->setProperty('purchasePriceLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount $value
     * @return $this
     */
    public function addPurchasePriceLimit($value)
    {
        $current = $this->getProperty('purchasePriceLimit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('purchasePriceLimit', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|array
     */
    public function getPurchasePriceLimit()
    {
        return $this->getProperty('purchasePriceLimit');
    }
    /**
     * The publisher of the article in question.
     * @see https://schema.org/publisher
     * @param Organization|Person|array $value
     * @return $this
     */
    public function publisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setPublisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addPublisher($value)
    {
        $current = $this->getProperty('publisher');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publisher', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getPublisher()
    {
        return $this->getProperty('publisher');
    }
    /**
     * The supplier of the incentivized item/service for which the incentive is valid for such as a utility company, merchant, or contractor.
     * @see https://schema.org/eligibleWithSupplier
     * @param Organization|array $value
     * @return $this
     */
    public function eligibleWithSupplier($value)
    {
        $this->setProperty('eligibleWithSupplier', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setEligibleWithSupplier($value)
    {
        $this->setProperty('eligibleWithSupplier', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addEligibleWithSupplier($value)
    {
        $current = $this->getProperty('eligibleWithSupplier');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleWithSupplier', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getEligibleWithSupplier()
    {
        return $this->getProperty('eligibleWithSupplier');
    }
    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @see https://schema.org/provider
     * @param Organization|Person|array $value
     * @return $this
     */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addProvider($value)
    {
        $current = $this->getProperty('provider');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('provider', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }
    /**
     * Optional. Income limit for which the incentive is applicable for. <p>If MonetaryAmount is specified, this should be based on annualized income (e.g. if an incentive is limited to those making <$114,000 annually):</p> { "@type": "MonetaryAmount", "maxValue": 114000, "currency": "USD", } Use Text for incentives that are limited based on other criteria, for example if an incentive is only available to recipients making 120% of the median poverty income in their area.
     * @see https://schema.org/incomeLimit
     * @param MonetaryAmount|string|array $value
     * @return $this
     */
    public function incomeLimit($value)
    {
        $this->setProperty('incomeLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|string|array $value
     * @return $this
     */
    public function setIncomeLimit($value)
    {
        $this->setProperty('incomeLimit', $value);
        return $this;
    }

    /**
     * @param MonetaryAmount|string $value
     * @return $this
     */
    public function addIncomeLimit($value)
    {
        $current = $this->getProperty('incomeLimit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('incomeLimit', $current);
        return $this;
    }

    /**
     * @return MonetaryAmount|string|array
     */
    public function getIncomeLimit()
    {
        return $this->getProperty('incomeLimit');
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
     * The type or specific product(s) and/or service(s) being incentivized. <p>DefinedTermSets are used for product and service categories such as the United Nations Standard Products and Services Code:</p> { "@type": "DefinedTerm", "inDefinedTermSet": "https://www.unspsc.org/", "termCode": "261315XX", "name": "Photovoltaic module" } <p>For a specific product or service, use the Product type:</p> { "@type": "Product", "name": "Kenmore White 17" Microwave", } For multiple different incentivized items, use multiple [[DefinedTerm]] or [[Product]].
     * @see https://schema.org/incentivizedItem
     * @param Product|DefinedTerm|array $value
     * @return $this
     */
    public function incentivizedItem($value)
    {
        $this->setProperty('incentivizedItem', $value);
        return $this;
    }

    /**
     * @param Product|DefinedTerm|array $value
     * @return $this
     */
    public function setIncentivizedItem($value)
    {
        $this->setProperty('incentivizedItem', $value);
        return $this;
    }

    /**
     * @param Product|DefinedTerm $value
     * @return $this
     */
    public function addIncentivizedItem($value)
    {
        $current = $this->getProperty('incentivizedItem');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('incentivizedItem', $current);
        return $this;
    }

    /**
     * @return Product|DefinedTerm|array
     */
    public function getIncentivizedItem()
    {
        return $this->getProperty('incentivizedItem');
    }
    /**
     * Describes the amount that can be redeemed from this incentive. <p>[[QuantitativeValue]]: Use this for incentives based on price (either raw amount or percentage-based). For a raw amount example, "You can claim $2,500 - $7,500 from the total cost of installation" would be represented as the following:</p> { "@type": "QuantitativeValue", “minValue”: 2500, “maxValue”: 7500, "unitCode": "USD" } <p>[[QuantitativeValue]] can also be used for percentage amounts. In such cases, value is used to represent the incentive’s percentage, while maxValue represents a limit (if one exists) to that incentive. The unitCode should be 'P1' and the unitText should be '%', while valueReference should be used for holding the currency type. For example, "You can claim up to 30% of the total cost of installation, up to a maximum of $7,500" would be:</p> { "@type": "QuantitativeValue", "value": 30, "unitCode": "P1", "unitText": "%", “maxValue”: 7500, “valueReference”: “USD” } <p>[[UnitPriceSpecification]]: Use this for incentives that are based on amounts rather than price. For example, a net metering rebate that pays $10/kWh, up to $1,000:</p> { "@type": "UnitPriceSpecification", "price": 10, "priceCurrency": "USD", "referenceQuantity": 1, "unitCode": "DO3", "unitText": "kw/h", "maxPrice": 1000, "description": "$10 / kwh up to $1000" } <p>[[LoanOrCredit]]: Use for incentives that are loan based. For example, a loan of $4,000 - $50,000 with a repayment term of 10 years, interest free would look like:</p> { "@type": "LoanOrCredit", "loanTerm": { "@type":"QuantitativeValue", "value":"10", "unitCode": "ANN" }, "amount":[ { "@type": "QuantitativeValue", "Name":"fixed interest rate", "value":"0", }, ], "amount":[ { "@type": "MonetaryAmount", "Name":"min loan amount", "value":"4000", "currency":"CAD" }, { "@type": "MonetaryAmount", "Name":"max loan amount", "value":"50000", "currency":"CAD" } ], } In summary: <ul>* Use [[QuantitativeValue]] for absolute/percentage-based incentives applied on the price of a good/service. * Use [[UnitPriceSpecification]] for incentives based on a per-unit basis (e.g. net metering). * Use [[LoanOrCredit]] for loans/credits. .
     * @see https://schema.org/incentiveAmount
     * @param UnitPriceSpecification|QuantitativeValue|LoanOrCredit|array $value
     * @return $this
     */
    public function incentiveAmount($value)
    {
        $this->setProperty('incentiveAmount', $value);
        return $this;
    }

    /**
     * @param UnitPriceSpecification|QuantitativeValue|LoanOrCredit|array $value
     * @return $this
     */
    public function setIncentiveAmount($value)
    {
        $this->setProperty('incentiveAmount', $value);
        return $this;
    }

    /**
     * @param UnitPriceSpecification|QuantitativeValue|LoanOrCredit $value
     * @return $this
     */
    public function addIncentiveAmount($value)
    {
        $current = $this->getProperty('incentiveAmount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('incentiveAmount', $current);
        return $this;
    }

    /**
     * @return UnitPriceSpecification|QuantitativeValue|LoanOrCredit|array
     */
    public function getIncentiveAmount()
    {
        return $this->getProperty('incentiveAmount');
    }
    /**
     * Optional. The types of expenses that are covered by the incentive. For example some incentives are only for the goods (tangible items) but the services (labor) are excluded.
     * @see https://schema.org/qualifiedExpense
     * @param IncentiveQualifiedExpenseType|array $value
     * @return $this
     */
    public function qualifiedExpense($value)
    {
        $this->setProperty('qualifiedExpense', $value);
        return $this;
    }

    /**
     * @param IncentiveQualifiedExpenseType|array $value
     * @return $this
     */
    public function setQualifiedExpense($value)
    {
        $this->setProperty('qualifiedExpense', $value);
        return $this;
    }

    /**
     * @param IncentiveQualifiedExpenseType $value
     * @return $this
     */
    public function addQualifiedExpense($value)
    {
        $current = $this->getProperty('qualifiedExpense');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('qualifiedExpense', $current);
        return $this;
    }

    /**
     * @return IncentiveQualifiedExpenseType|array
     */
    public function getQualifiedExpense()
    {
        return $this->getProperty('qualifiedExpense');
    }
    /**
     * The geographic area where a service or offered item is provided.
     * @see https://schema.org/areaServed
     * @param GeoShape|AdministrativeArea|Place|string|array $value
     * @return $this
     */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place|string|array $value
     * @return $this
     */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place|string $value
     * @return $this
     */
    public function addAreaServed($value)
    {
        $current = $this->getProperty('areaServed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('areaServed', $current);
        return $this;
    }

    /**
     * @return GeoShape|AdministrativeArea|Place|string|array
     */
    public function getAreaServed()
    {
        return $this->getProperty('areaServed');
    }
}
