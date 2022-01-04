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
    * @param DeliveryMethod|array|string $value
    * @return $this
    * @deprecated use setHasDeliveryMethod
    */
    public function hasDeliveryMethod($value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }
   /**
    * @param DeliveryMethod|array|string $value
    * @return $this
    */
    public function setHasDeliveryMethod($value)
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
    * @param array|string $value
    * @return $this
    * @deprecated use setAvailableThrough
    */
    public function availableThrough($value)
    {
        $this->setProperty('availableThrough', $value);
        return $this;
    }
   /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    * @deprecated use setAvailableFrom
    */
    public function availableFrom($value)
    {
        $this->setProperty('availableFrom', $value);
        return $this;
    }
   /**
    * @param array|string $value
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
    * @deprecated use setAccessCode
    */
    public function accessCode($value)
    {
        $this->setProperty('accessCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessCode($value)
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
