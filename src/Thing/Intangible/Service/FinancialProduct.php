<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;

/**
* A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and investment companies which comprise the financial services industry.
* @see schema:FinancialProduct
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class FinancialProduct extends Service
{
   /**
        * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
        */
    protected $annualPercentageRate = null;

   /**
        * The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
        */
    protected $interestRate = null;

   /**
        * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
        */
    protected $feesAndCommissionsSpecification = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAnnualPercentageRate($value)
    {
        $this->setProperty('annualPercentageRate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAnnualPercentageRate()
    {
       return $this->getProperty('annualPercentageRate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setInterestRate($value)
    {
        $this->setProperty('interestRate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInterestRate()
    {
       return $this->getProperty('interestRate');
    }

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
