<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\RealEstateAgent;

/**
* The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or property. For example, an agent rents a property from a landlord in exchange for a periodic payment.
* @see http://schema.org/RentAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction

*
*/
class RentAction extends TradeAction
{

    /**
    * A sub property of participant. The owner of the real estate property.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function landlord($value)
    {
        $this->setProperty('landlord', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setLandlord($value)
    {
        $this->setProperty('landlord', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLandlord()
    {
       return $this->getProperty('landlord');
    }

    /**
    * A sub property of participant. The real estate agent involved in the action.
    * @param RealEstateAgent|array $value
    * @return $this
    */
    public function realEstateAgent(?RealEstateAgent $value)
    {
        $this->setProperty('realEstateAgent', $value);
        return $this;
    }
   /**
    * @param RealEstateAgent|array $value
    * @return $this
    */
    public function setRealEstateAgent(?RealEstateAgent $value)
    {
        $this->setProperty('realEstateAgent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRealEstateAgent()
    {
       return $this->getProperty('realEstateAgent');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TradeAction\\RentAction','Thing\\RentAction');

