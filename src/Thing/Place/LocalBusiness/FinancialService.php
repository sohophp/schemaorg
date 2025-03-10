<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

/**
* Financial services business.
* @see schema:FinancialService
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class FinancialService extends LocalBusiness
{


    /**
        * Description of fees, commissions, and other terms applied either to a class
 * of financial product, or by a financial service organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function feesAndCommissionsSpecification($value)
    {
        $this->setProperty('feesAndCommissionsSpecification', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
