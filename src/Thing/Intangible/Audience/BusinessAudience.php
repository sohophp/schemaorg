<?php declare(strict_types=1);
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
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function yearsInOperation(?QuantitativeValue $value)
    {
        $this->setProperty('yearsInOperation', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setYearsInOperation(?QuantitativeValue $value)
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
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function yearlyRevenue(?QuantitativeValue $value)
    {
        $this->setProperty('yearlyRevenue', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setYearlyRevenue(?QuantitativeValue $value)
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
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function numberOfEmployees(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setNumberOfEmployees(?QuantitativeValue $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Audience\\BusinessAudience','Thing\\BusinessAudience');

