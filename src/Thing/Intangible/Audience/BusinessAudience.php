<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
* @see http://schema.org/BusinessAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience

*
*/
class BusinessAudience extends Audience
{

    /**
    * The age of the business.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setYearsInOperation
    */
    public function yearsInOperation($value)
    {
        $this->setProperty('yearsInOperation', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setYearsInOperation($value)
    {
        $this->setProperty('yearsInOperation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getYearsInOperation()
    {
       return $this->getProperty('yearsInOperation');
    }

    /**
    * The size of the business in annual revenue.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setYearlyRevenue
    */
    public function yearlyRevenue($value)
    {
        $this->setProperty('yearlyRevenue', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setYearlyRevenue($value)
    {
        $this->setProperty('yearlyRevenue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getYearlyRevenue()
    {
       return $this->getProperty('yearlyRevenue');
    }

    /**
    * The number of employees in an organization e.g. business.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setNumberOfEmployees
    */
    public function numberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setNumberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfEmployees()
    {
       return $this->getProperty('numberOfEmployees');
    }


}
