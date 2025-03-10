<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Offer;

use Sohophp\SchemaOrg\Thing\Intangible\Offer;

/**
* When a single product is associated with multiple offers (for example, the
 * same pair of shoes is offered by different merchants), then AggregateOffer
 * can be used.
* @see http://schema.org/AggregateOffer
* @package Sohophp\SchemaOrg\Thing\Intangible\Offer
*/
class AggregateOffer extends Offer
{


    /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
        * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @param Offer|array|string|mixed $value
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
        * The number of offers for the product.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function offerCount($value)
    {
        $this->setProperty('offerCount', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
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


    /**
        * The lowest price of all offers available.
 * 
 * Usage guidelines:
 * 
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similiar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
        * @param string|array|mixed $value
    * @return $this
    */
    public function lowPrice($value)
    {
        $this->setProperty('lowPrice', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The highest price of all offers available.
 * 
 * Usage guidelines:
 * 
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similiar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
        * @param string|array|mixed $value
    * @return $this
    */
    public function highPrice($value)
    {
        $this->setProperty('highPrice', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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


}
