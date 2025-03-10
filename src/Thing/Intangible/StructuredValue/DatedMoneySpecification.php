<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A DatedMoneySpecification represents monetary values with optional start and
 * end dates. For example, this could represent an employee's salary over a
 * specific period of time. __Note:__ This type has been superseded by
 * [[MonetaryAmount]] use of that type is recommended
* @see http://schema.org/DatedMoneySpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class DatedMoneySpecification extends StructuredValue
{


    /**
        * The end date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
    }


    /**
        * The amount of money.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function amount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function setAmount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmount()
    {
       return $this->getProperty('amount');
    }


    /**
        * The start date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }


    /**
        * The currency in which the monetary amount is expressed.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types e.g. "Ithaca HOUR".
        * @param string|array|mixed $value
    * @return $this
    */
    public function currency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCurrency($value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCurrency()
    {
       return $this->getProperty('currency');
    }


}
