<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugCostCategory;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* The cost per unit of a medical drug. Note that this type is not meant to
 * represent the price in an offer of a drug for sale; see the Offer type for
 * that. This type will typically be used to tag wholesale or average retail
 * cost of a drug, or maximum reimbursable cost. Costs of medical drugs vary
 * widely depending on how and where they are paid for, so while this type
 * captures some of the variables, costs should be used with caution by
 * consumers of this schema's markup.
* @see http://schema.org/DrugCost
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration
*/
class DrugCost extends MedicalEnumeration
{


    /**
        * The currency (in 3-letter of the drug cost. See:
 * http://en.wikipedia.org/wiki/ISO_4217
        * @param string|array|mixed $value
    * @return $this
    */
    public function costCurrency($value)
    {
        $this->setProperty('costCurrency', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCostCurrency($value)
    {
        $this->setProperty('costCurrency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCostCurrency()
    {
       return $this->getProperty('costCurrency');
    }


    /**
        * The cost per unit of the drug.
        * @param QualitativeValue|string|array|mixed $value
    * @return $this
    */
    public function costPerUnit($value)
    {
        $this->setProperty('costPerUnit', $value);
        return $this;
    }

    /**
    * @param QualitativeValue|string|array|mixed $value
    * @return $this
    */
    public function setCostPerUnit($value)
    {
        $this->setProperty('costPerUnit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCostPerUnit()
    {
       return $this->getProperty('costPerUnit');
    }


    /**
        * The category of cost, such as wholesale, retail, reimbursement cap, etc.
        * @param DrugCostCategory|array|string|mixed $value
    * @return $this
    */
    public function costCategory($value)
    {
        $this->setProperty('costCategory', $value);
        return $this;
    }

    /**
    * @param DrugCostCategory|array|string|mixed $value
    * @return $this
    */
    public function setCostCategory($value)
    {
        $this->setProperty('costCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCostCategory()
    {
       return $this->getProperty('costCategory');
    }


    /**
        * The location in which the status applies.
        * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function applicableLocation($value)
    {
        $this->setProperty('applicableLocation', $value);
        return $this;
    }

    /**
    * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function setApplicableLocation($value)
    {
        $this->setProperty('applicableLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicableLocation()
    {
       return $this->getProperty('applicableLocation');
    }


    /**
        * Additional details to capture the origin of the cost data. For example,
 * 'Medicare Part B'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function costOrigin($value)
    {
        $this->setProperty('costOrigin', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCostOrigin($value)
    {
        $this->setProperty('costOrigin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCostOrigin()
    {
       return $this->getProperty('costOrigin');
    }


    /**
        * The unit in which the drug is measured, e.g. '5 mg tablet'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function drugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setDrugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDrugUnit()
    {
       return $this->getProperty('drugUnit');
    }


}
