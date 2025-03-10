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
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessCode($value)
    {
        $this->setProperty('accessCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * After this date, the item will no longer be available for pickup.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableThrough($value)
    {
        $this->setProperty('availableThrough', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Method used for delivery or shipping.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasDeliveryMethod($value)
    {
        $this->setProperty('hasDeliveryMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * When the item is available for pickup from the store, locker, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableFrom($value)
    {
        $this->setProperty('availableFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
