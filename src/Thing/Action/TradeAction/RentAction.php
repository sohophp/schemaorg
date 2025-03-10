<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;

/**
* The act of giving money in return for temporary use, but not ownership, of an
 * object such as a vehicle or property. For example, an agent rents a property
 * from a landlord in exchange for a periodic payment.
* @see schema:RentAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class RentAction extends TradeAction
{


    /**
        * A sub property of participant. The owner of the real estate property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function landlord($value)
    {
        $this->setProperty('landlord', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLandlord($value)
    {
        $this->setProperty('landlord', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLandlord()
    {
       return $this->getProperty('landlord');
    }


    /**
        * A sub property of participant. The real estate agent involved in the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function realEstateAgent($value)
    {
        $this->setProperty('realEstateAgent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRealEstateAgent($value)
    {
        $this->setProperty('realEstateAgent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRealEstateAgent()
    {
       return $this->getProperty('realEstateAgent');
    }


}
