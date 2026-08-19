<?php
namespace Sohophp\SchemaOrg\Thing\Place;

  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Organization;

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
      * The larger organization that this local business is a branch of, if any. Not
 * to be confused with (anatomical) [[branch]].
    * @param Organization|array $value
  * @return $this
  */
  public function branchOf($value)
  {
  $this->setProperty('branchOf', $value);
  return $this;
  }

  /**
  * @param Organization|array $value
  * @return $this
  */
  public function setBranchOf($value)
  {
  $this->setProperty('branchOf', $value);
  return $this;
  }

  /**
  * @param Organization $value
  * @return $this
  */
  public function addBranchOf($value)
  {
  $current = $this->getProperty('branchOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('branchOf', $current);
  return $this;
  }

  /**
  * @return Organization|array
  */
  public function getBranchOf()
  {
  return $this->getProperty('branchOf');
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
    * @param string|array $value
  * @return $this
  */
  public function currenciesAccepted($value)
  {
  $this->setProperty('currenciesAccepted', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCurrenciesAccepted($value)
  {
  $this->setProperty('currenciesAccepted', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCurrenciesAccepted($value)
  {
  $current = $this->getProperty('currenciesAccepted');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('currenciesAccepted', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCurrenciesAccepted()
  {
  return $this->getProperty('currenciesAccepted');
  }


  /**
      * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
    * @param string|array $value
  * @return $this
  */
  public function paymentAccepted($value)
  {
  $this->setProperty('paymentAccepted', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPaymentAccepted($value)
  {
  $this->setProperty('paymentAccepted', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPaymentAccepted($value)
  {
  $current = $this->getProperty('paymentAccepted');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentAccepted', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPaymentAccepted()
  {
  return $this->getProperty('paymentAccepted');
  }


  /**
      * The floor level for an [[Accommodation]] in a multi-storey building. Since
 * counting
 *   systems [vary
 * internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations),
 * the local system should be used where possible.
    * @param string|array $value
  * @return $this
  */
  public function floorLevel($value)
  {
  $this->setProperty('floorLevel', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setFloorLevel($value)
  {
  $this->setProperty('floorLevel', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addFloorLevel($value)
  {
  $current = $this->getProperty('floorLevel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('floorLevel', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getFloorLevel()
  {
  return $this->getProperty('floorLevel');
  }


  /**
      * The price range of the business, for example ```$$$```.
    * @param string|array $value
  * @return $this
  */
  public function priceRange($value)
  {
  $this->setProperty('priceRange', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPriceRange($value)
  {
  $this->setProperty('priceRange', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPriceRange($value)
  {
  $current = $this->getProperty('priceRange');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('priceRange', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPriceRange()
  {
  return $this->getProperty('priceRange');
  }


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
    * @param string|array $value
  * @return $this
  */
  public function openingHours($value)
  {
  $this->setProperty('openingHours', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setOpeningHours($value)
  {
  $this->setProperty('openingHours', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addOpeningHours($value)
  {
  $current = $this->getProperty('openingHours');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('openingHours', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getOpeningHours()
  {
  return $this->getProperty('openingHours');
  }


}
