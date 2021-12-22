<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A DatedMoneySpecification represents monetary values with optional start and end dates. For example, this could represent an employee's salary over a specific period of time. <strong>Note:</strong> This type has been superseded by <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a> use of that type is recommended
* @see http://schema.org/DatedMoneySpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class DatedMoneySpecification extends StructuredValue
{

    /**
    * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param |array $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
    }

    /**
    * The amount of money.
    * @param MonetaryAmount|array $value
    * @return $this
    */
    public function amount(?MonetaryAmount $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }
   /**
    * @param MonetaryAmount|array $value
    * @return $this
    */
    public function setAmount(?MonetaryAmount $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAmount()
    {
       return $this->getProperty('amount');
    }

    /**
    * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
    * @param |array $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }

    /**
    * The currency in which the monetary amount is expressed.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string|array $value
    * @return $this
    */
    public function currency(?string $value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCurrency(?string $value)
    {
        $this->setProperty('currency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCurrency()
    {
       return $this->getProperty('currency');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\DatedMoneySpecification','Thing\\DatedMoneySpecification');

