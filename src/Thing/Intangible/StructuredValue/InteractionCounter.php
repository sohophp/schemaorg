<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
* @see schema:InteractionCounter
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class InteractionCounter extends StructuredValue
{


    /**
        * The number of interactions for the CreativeWork using the WebSite or
 * SoftwareApplication.
        * @param array|string|mixed $value
    * @return $this
    */
    public function userInteractionCount($value)
    {
        $this->setProperty('userInteractionCount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUserInteractionCount($value)
    {
        $this->setProperty('userInteractionCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUserInteractionCount()
    {
       return $this->getProperty('userInteractionCount');
    }


    /**
        * The Action representing the type of interaction. For up votes, +1s, etc. use
 * [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most
 * specific Action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function interactionType($value)
    {
        $this->setProperty('interactionType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInteractionType($value)
    {
        $this->setProperty('interactionType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInteractionType()
    {
       return $this->getProperty('interactionType');
    }


    /**
        * The startTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to start. For
 * actions that span a period of time, when the action was performed. E.g. John
 * wrote a book from *January* to December. For media, including audio and
 * video, it's the time offset of the start of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStartTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartTime()
    {
       return $this->getProperty('startTime');
    }


    /**
        * The endTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to end. For
 * actions that span a period of time, when the action was performed. E.g. John
 * wrote a book from January to *December*. For media, including audio and
 * video, it's the time offset of the end of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEndTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndTime()
    {
       return $this->getProperty('endTime');
    }


    /**
        * The WebSite or SoftwareApplication where the interactions took place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function interactionService($value)
    {
        $this->setProperty('interactionService', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInteractionService($value)
    {
        $this->setProperty('interactionService', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInteractionService()
    {
       return $this->getProperty('interactionService');
    }


    /**
        * The location of, for example, where an event is happening, where an
 * organization is located, or where an action takes place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLocation($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLocation()
    {
       return $this->getProperty('location');
    }


}
