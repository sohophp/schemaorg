<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\RealEstateAgent;

/**
* The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or property. For example, an agent rents a property from a landlord in exchange for a periodic payment.
* @see http://schema.org/RentAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class RentAction extends TradeAction
{

    /**
    * A sub property of participant. The owner of the real estate property.
    * @param Person|Organization $value
    * @return $this
    */
    public function landlord($value)
    {
        $this->setProperty('landlord', $value);
        return $this;
    }

    /**
    * A sub property of participant. The real estate agent involved in the action.
    * @param RealEstateAgent $value
    * @return $this
    */
    public function realEstateAgent(?RealEstateAgent $value)
    {
        $this->setProperty('realEstateAgent', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TradeAction\\RentAction','Thing\\RentAction');

