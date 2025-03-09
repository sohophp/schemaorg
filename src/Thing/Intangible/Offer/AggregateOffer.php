<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Offer;

use Sohophp\SchemaOrg\Thing\Intangible\Offer;

/**
* When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.\n\nNote: AggregateOffers are normally expected to associate multiple offers that all share the same defined [[businessFunction]] value, or default to http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly defined.
* @see schema:AggregateOffer
* @package Sohophp\SchemaOrg\Thing\Intangible\Offer
*/
class AggregateOffer extends Offer
{
   /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
      
        */
    protected $offers = null;

   /**
        * The highest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
        */
    protected $highPrice = null;

   /**
        * The lowest price of all offers available.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
        */
    protected $lowPrice = null;

   /**
        * The number of offers for the product.
        */
    protected $offerCount = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHighPrice($value)
    {
        $this->setProperty('highPrice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHighPrice()
    {
       return $this->getProperty('highPrice');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLowPrice($value)
    {
        $this->setProperty('lowPrice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLowPrice()
    {
       return $this->getProperty('lowPrice');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOfferCount($value)
    {
        $this->setProperty('offerCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOfferCount()
    {
       return $this->getProperty('offerCount');
    }


}
