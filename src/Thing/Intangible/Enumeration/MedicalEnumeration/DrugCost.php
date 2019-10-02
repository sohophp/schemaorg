<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugCostCategory;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* The cost per unit of a medical drug. Note that this type is not meant to represent the price in an offer of a drug for sale; see the Offer type for that. This type will typically be used to tag wholesale or average retail cost of a drug, or maximum reimbursable cost. Costs of medical drugs vary widely depending on how and where they are paid for, so while this type captures some of the variables, costs should be used with caution by consumers of this schema's markup.
* @see http://schema.org/DrugCost
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration
*/
class DrugCost extends MedicalEnumeration
{

    /**
    * The currency (in 3-letter of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217
    * @param string $value
    * @return $this
    */
    public function costCurrency(?string $value)
    {
        $this->setProperty('costCurrency', $value);
        return $this;
    }

    /**
    * The cost per unit of the drug.
    * @param QualitativeValue|string $value
    * @return $this
    */
    public function costPerUnit($value)
    {
        $this->setProperty('costPerUnit', $value);
        return $this;
    }

    /**
    * The category of cost, such as wholesale, retail, reimbursement cap, etc.
    * @param DrugCostCategory $value
    * @return $this
    */
    public function costCategory(?DrugCostCategory $value)
    {
        $this->setProperty('costCategory', $value);
        return $this;
    }

    /**
    * The location in which the status applies.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function applicableLocation(?AdministrativeArea $value)
    {
        $this->setProperty('applicableLocation', $value);
        return $this;
    }

    /**
    * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
    * @param string $value
    * @return $this
    */
    public function costOrigin(?string $value)
    {
        $this->setProperty('costOrigin', $value);
        return $this;
    }

    /**
    * The unit in which the drug is measured, e.g. '5 mg tablet'.
    * @param string $value
    * @return $this
    */
    public function drugUnit(?string $value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Enumeration\\MedicalEnumeration\\DrugCost','Thing\\DrugCost');

