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
        * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
        */
    protected $feesAndCommissionsSpecification = null;


    /**
    * @param array|string $value
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
