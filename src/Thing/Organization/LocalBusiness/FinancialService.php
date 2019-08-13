<?php declare(strict_types=1);
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
    * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
    * @param string|string $value
    * @return $this
    */
    public function feesAndCommissionsSpecification($value)
    {
        $this->setProperty('feesAndCommissionsSpecification', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\LocalBusiness\\FinancialService','Thing\\FinancialService');

