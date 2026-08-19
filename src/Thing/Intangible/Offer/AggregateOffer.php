<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Offer;

  use Sohophp\SchemaOrg\Thing\Intangible\Offer;
  use Sohophp\SchemaOrg\Thing\Intangible\Demand;

/**
  * When a single product is associated with multiple offers (for example, the
 * same pair of shoes is offered by different merchants), then AggregateOffer
 * can be used.
 * 
 * Note: AggregateOffers are normally expected to associate multiple offers that
 * all share the same defined [[businessFunction]] value, or default to
 * http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly
 * defined.
  * @see schema:AggregateOffer
* @package Sohophp\SchemaOrg\Thing\Intangible\Offer
*/
class AggregateOffer extends Offer
{


  /**
      * The number of offers for the product.
    * @param int|array $value
  * @return $this
  */
  public function offerCount($value)
  {
  $this->setProperty('offerCount', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setOfferCount($value)
  {
  $this->setProperty('offerCount', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addOfferCount($value)
  {
  $current = $this->getProperty('offerCount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('offerCount', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getOfferCount()
  {
  return $this->getProperty('offerCount');
  }


  /**
      * The lowest price of all offers available.
 * 
 * Usage guidelines:
 * 
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
    * @param string|array $value
  * @return $this
  */
  public function lowPrice($value)
  {
  $this->setProperty('lowPrice', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setLowPrice($value)
  {
  $this->setProperty('lowPrice', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addLowPrice($value)
  {
  $current = $this->getProperty('lowPrice');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('lowPrice', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getLowPrice()
  {
  return $this->getProperty('lowPrice');
  }


  /**
      * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
 * Use [[businessFunction]] to indicate the kind of transaction offered, i.e.
 * sell, lease, etc. This property can also be used to describe a [[Demand]].
 * While this property is listed as expected on a number of common types, it can
 * be used in others. In that case, using a second type, such as Product or a
 * subtype of Product, can clarify the nature of the offer.
    * @param Offer|Demand|array $value
  * @return $this
  */
  public function offers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand|array $value
  * @return $this
  */
  public function setOffers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand $value
  * @return $this
  */
  public function addOffers($value)
  {
  $current = $this->getProperty('offers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('offers', $current);
  return $this;
  }

  /**
  * @return Offer|Demand|array
  */
  public function getOffers()
  {
  return $this->getProperty('offers');
  }


  /**
      * The highest price of all offers available.
 * 
 * Usage guidelines:
 * 
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
    * @param string|array $value
  * @return $this
  */
  public function highPrice($value)
  {
  $this->setProperty('highPrice', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHighPrice($value)
  {
  $this->setProperty('highPrice', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHighPrice($value)
  {
  $current = $this->getProperty('highPrice');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('highPrice', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHighPrice()
  {
  return $this->getProperty('highPrice');
  }


}
