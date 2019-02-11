<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and investment companies which comprise the financial services industry.
* @see http://schema.org/FinancialProduct
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class FinancialProduct extends Service
{

    /**
    * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function annualPercentageRate(?QuantitativeValue $value)
    {
        $this->setProperty('annualPercentageRate', $value);
        return $this;
    }

    /**
    * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function interestRate(? $value)
    {
        $this->setProperty('interestRate', $value);
        return $this;
    }

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

