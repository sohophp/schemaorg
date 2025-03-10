<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebSite;
use Sohophp\SchemaOrg\Thing\Action;

/**
* A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
* @see http://schema.org/InteractionCounter
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class InteractionCounter extends StructuredValue
{


    /**
        * The WebSite or SoftwareApplication where the interactions took place.
        * @param SoftwareApplication|WebSite|array|string|mixed $value
    * @return $this
    */
    public function interactionService($value)
    {
        $this->setProperty('interactionService', $value);
        return $this;
    }

    /**
    * @param SoftwareApplication|WebSite|array|string|mixed $value
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
        * The number of interactions for the CreativeWork using the WebSite or
 * SoftwareApplication.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function userInteractionCount($value)
    {
        $this->setProperty('userInteractionCount', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
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
        * @param Action|array|string|mixed $value
    * @return $this
    */
    public function interactionType($value)
    {
        $this->setProperty('interactionType', $value);
        return $this;
    }

    /**
    * @param Action|array|string|mixed $value
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


}
