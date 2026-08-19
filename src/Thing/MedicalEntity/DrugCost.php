<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugCostCategory;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
 * The cost per unit of a medical drug. Note that this type is not meant to represent the price in an offer of a drug for sale; see the Offer type for that. This type will typically be used to tag wholesale or average retail cost of a drug, or maximum reimbursable cost. Costs of medical drugs vary widely depending on how and where they are paid for, so while this type captures some of the variables, costs should be used with caution by consumers of this schema's markup.
 * @see https://schema.org/DrugCost
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity
 */
class DrugCost extends MedicalEntity
{
    /**
     * The currency (in 3-letter) of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217.
     * @see https://schema.org/costCurrency
     * @param string|array $value
     * @return $this
     */
    public function costCurrency($value)
    {
        $this->setProperty('costCurrency', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCostCurrency($value)
    {
        $this->setProperty('costCurrency', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCostCurrency($value)
    {
        $current = $this->getProperty('costCurrency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('costCurrency', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCostCurrency()
    {
        return $this->getProperty('costCurrency');
    }
    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     * @see https://schema.org/costCategory
     * @param DrugCostCategory|array $value
     * @return $this
     */
    public function costCategory($value)
    {
        $this->setProperty('costCategory', $value);
        return $this;
    }

    /**
     * @param DrugCostCategory|array $value
     * @return $this
     */
    public function setCostCategory($value)
    {
        $this->setProperty('costCategory', $value);
        return $this;
    }

    /**
     * @param DrugCostCategory $value
     * @return $this
     */
    public function addCostCategory($value)
    {
        $current = $this->getProperty('costCategory');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('costCategory', $current);
        return $this;
    }

    /**
     * @return DrugCostCategory|array
     */
    public function getCostCategory()
    {
        return $this->getProperty('costCategory');
    }
    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @see https://schema.org/drugUnit
     * @param string|array $value
     * @return $this
     */
    public function drugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDrugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDrugUnit($value)
    {
        $current = $this->getProperty('drugUnit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('drugUnit', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDrugUnit()
    {
        return $this->getProperty('drugUnit');
    }
    /**
     * The location in which the status applies.
     * @see https://schema.org/applicableLocation
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function applicableLocation($value)
    {
        $this->setProperty('applicableLocation', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function setApplicableLocation($value)
    {
        $this->setProperty('applicableLocation', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea $value
     * @return $this
     */
    public function addApplicableLocation($value)
    {
        $current = $this->getProperty('applicableLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicableLocation', $current);
        return $this;
    }

    /**
     * @return AdministrativeArea|array
     */
    public function getApplicableLocation()
    {
        return $this->getProperty('applicableLocation');
    }
    /**
     * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
     * @see https://schema.org/costOrigin
     * @param string|array $value
     * @return $this
     */
    public function costOrigin($value)
    {
        $this->setProperty('costOrigin', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCostOrigin($value)
    {
        $this->setProperty('costOrigin', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCostOrigin($value)
    {
        $current = $this->getProperty('costOrigin');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('costOrigin', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCostOrigin()
    {
        return $this->getProperty('costOrigin');
    }
    /**
     * The cost per unit of the drug.
     * @see https://schema.org/costPerUnit
     * @param QualitativeValue|string|array $value
     * @return $this
     */
    public function costPerUnit($value)
    {
        $this->setProperty('costPerUnit', $value);
        return $this;
    }

    /**
     * @param QualitativeValue|string|array $value
     * @return $this
     */
    public function setCostPerUnit($value)
    {
        $this->setProperty('costPerUnit', $value);
        return $this;
    }

    /**
     * @param QualitativeValue|string $value
     * @return $this
     */
    public function addCostPerUnit($value)
    {
        $current = $this->getProperty('costPerUnit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('costPerUnit', $current);
        return $this;
    }

    /**
     * @return QualitativeValue|string|array
     */
    public function getCostPerUnit()
    {
        return $this->getProperty('costPerUnit');
    }
}
