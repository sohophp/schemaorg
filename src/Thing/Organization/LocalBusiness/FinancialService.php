<?php
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

/**
* Financial services business.
* @see http://schema.org/FinancialService
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness
*/
class FinancialService extends LocalBusiness
{


    /**
        * Description of fees, commissions, and other terms applied either to a class
 * of financial product, or by a financial service organization.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function feesAndCommissionsSpecification($value)
    {
        $this->setProperty('feesAndCommissionsSpecification', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setFeesAndCommissionsSpecification($value)
    {
        $this->setProperty('feesAndCommissionsSpecification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFeesAndCommissionsSpecification()
    {
       return $this->getProperty('feesAndCommissionsSpecification');
    }


}
