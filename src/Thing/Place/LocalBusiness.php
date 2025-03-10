<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;

/**
* A particular physical business or branch of an organization. Examples of
 * LocalBusiness include a restaurant, a particular branch of a restaurant
 * chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
* @see schema:LocalBusiness
* @package Sohophp\SchemaOrg\Thing\Place
*/
class LocalBusiness extends Place
{


    /**
        * The general opening hours for a business. Opening hours can be specified as a
 * weekly time range, starting with days, then times per day. Multiple days can
 * be listed with commas ',' separating each day. Day or time ranges are
 * specified using a hyphen '-'.
 * 
 * * Days are specified using the following two-letter combinations: ```Mo```,
 * ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.
 * * Times are specified using 24:00 format. For example, 3pm is specified as
 * ```15:00```, 10am as ```10:00```. 
 * * Here is an example: ```<time itemprop="openingHours" datetime="Tu,Th
 * 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>```.
 * * If a business is open 7 days a week, then it can be specified as ```<time
 * itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all
 * day</time>```.
        * @param array|string|mixed $value
    * @return $this
    */
    public function openingHours($value)
    {
        $this->setProperty('openingHours', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOpeningHours($value)
    {
        $this->setProperty('openingHours', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOpeningHours()
    {
       return $this->getProperty('openingHours');
    }


    /**
        * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentAccepted($value)
    {
        $this->setProperty('paymentAccepted', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPaymentAccepted($value)
    {
        $this->setProperty('paymentAccepted', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentAccepted()
    {
       return $this->getProperty('paymentAccepted');
    }


    /**
        * The larger organization that this local business is a branch of, if any. Not
 * to be confused with (anatomical) [[branch]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function branchOf($value)
    {
        $this->setProperty('branchOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBranchOf($value)
    {
        $this->setProperty('branchOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBranchOf()
    {
       return $this->getProperty('branchOf');
    }


    /**
        * The price range of the business, for example ```$$$```.
        * @param array|string|mixed $value
    * @return $this
    */
    public function priceRange($value)
    {
        $this->setProperty('priceRange', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPriceRange($value)
    {
        $this->setProperty('priceRange', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceRange()
    {
       return $this->getProperty('priceRange');
    }


    /**
        * The currency accepted.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types, e.g. "Ithaca HOUR".
        * @param array|string|mixed $value
    * @return $this
    */
    public function currenciesAccepted($value)
    {
        $this->setProperty('currenciesAccepted', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCurrenciesAccepted($value)
    {
        $this->setProperty('currenciesAccepted', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCurrenciesAccepted()
    {
       return $this->getProperty('currenciesAccepted');
    }


}
