<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
* @see schema:BusinessAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class BusinessAudience extends Audience
{
   /**
        * The number of employees in an organization, e.g. business.
        */
    protected $numberOfEmployees = null;

   /**
        * The size of the business in annual revenue.
        */
    protected $yearlyRevenue = null;

   /**
        * The age of the business.
        */
    protected $yearsInOperation = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfEmployees()
    {
       return $this->getProperty('numberOfEmployees');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setYearlyRevenue($value)
    {
        $this->setProperty('yearlyRevenue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getYearlyRevenue()
    {
       return $this->getProperty('yearlyRevenue');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setYearsInOperation($value)
    {
        $this->setProperty('yearsInOperation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getYearsInOperation()
    {
       return $this->getProperty('yearsInOperation');
    }


}
