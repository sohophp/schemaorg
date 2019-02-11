<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
* @see http://schema.org/BusinessAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class BusinessAudience extends Audience
{

    /**
    * The age of the business.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function yearsInOperation(?QuantitativeValue $value)
    {
        $this->setProperty('yearsInOperation', $value);
        return $this;
    }

    /**
    * The size of the business in annual revenue.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function yearlyRevenue(?QuantitativeValue $value)
    {
        $this->setProperty('yearlyRevenue', $value);
        return $this;
    }

    /**
    * The number of employees in an organization e.g. business.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfEmployees(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }


}

