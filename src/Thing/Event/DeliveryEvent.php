<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
* An event involving the delivery of an item.
* @see http://schema.org/DeliveryEvent
* @package Sohophp\SchemaOrg\Thing\Event

*
*/
class DeliveryEvent extends Event
{

    /**
    * Method used for delivery or shipping.
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function hasDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }
   /**
    * @param DeliveryMethod|array $value
    * @return $this
    */
    public function setHasDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasDeliveryMethod()
    {
       return $this->getProperty('hasDeliveryMethod');
    }

    /**
    * After this date, the item will no longer be available for pickup.
    * @param |array $value
    * @return $this
    */
    public function availableThrough($value)
    {
        $this->setProperty('availableThrough', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setAvailableThrough($value)
    {
        $this->setProperty('availableThrough', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableThrough()
    {
       return $this->getProperty('availableThrough');
    }

    /**
    * When the item is available for pickup from the store, locker, etc.
    * @param |array $value
    * @return $this
    */
    public function availableFrom($value)
    {
        $this->setProperty('availableFrom', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setAvailableFrom($value)
    {
        $this->setProperty('availableFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableFrom()
    {
       return $this->getProperty('availableFrom');
    }

    /**
    * Password, PIN, or access code needed for delivery (e.g. from a locker).
    * @param string|array $value
    * @return $this
    */
    public function accessCode(?string $value)
    {
        $this->setProperty('accessCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessCode(?string $value)
    {
        $this->setProperty('accessCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessCode()
    {
       return $this->getProperty('accessCode');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\DeliveryEvent','Thing\\DeliveryEvent');

