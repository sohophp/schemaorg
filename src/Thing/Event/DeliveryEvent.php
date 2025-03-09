<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;

/**
* An event involving the delivery of an item.
* @see schema:DeliveryEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class DeliveryEvent extends Event
{
   /**
        * Password, PIN, or access code needed for delivery (e.g. from a locker).
        */
    protected $accessCode = null;

   /**
        * After this date, the item will no longer be available for pickup.
        */
    protected $availableThrough = null;

   /**
        * Method used for delivery or shipping.
        */
    protected $hasDeliveryMethod = null;

   /**
        * When the item is available for pickup from the store, locker, etc.
        */
    protected $availableFrom = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAccessCode($value)
    {
        $this->setProperty('accessCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessCode()
    {
       return $this->getProperty('accessCode');
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
    * @return string|array|mixed
    */
    public function getAvailableThrough()
    {
       return $this->getProperty('availableThrough');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasDeliveryMethod($value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasDeliveryMethod()
    {
       return $this->getProperty('hasDeliveryMethod');
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
    * @return string|array|mixed
    */
    public function getAvailableFrom()
    {
       return $this->getProperty('availableFrom');
    }


}
