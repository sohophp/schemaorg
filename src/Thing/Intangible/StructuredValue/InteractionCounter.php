<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebSite;
use Sohophp\SchemaOrg\Thing\Action;

/**
* A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the specific type of interaction.
* @see http://schema.org/InteractionCounter
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class InteractionCounter extends StructuredValue
{

    /**
    * The WebSite or SoftwareApplication where the interactions took place.
    * @param SoftwareApplication|WebSite|array $value
    * @return $this
    */
    public function interactionService($value)
    {
        $this->setProperty('interactionService', $value);
        return $this;
    }
   /**
    * @param SoftwareApplication|WebSite|array $value
    * @return $this
    */
    public function setInteractionService($value)
    {
        $this->setProperty('interactionService', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInteractionService()
    {
       return $this->getProperty('interactionService');
    }

    /**
    * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
    * @param int|array $value
    * @return $this
    */
    public function userInteractionCount(?int $value)
    {
        $this->setProperty('userInteractionCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setUserInteractionCount(?int $value)
    {
        $this->setProperty('userInteractionCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUserInteractionCount()
    {
       return $this->getProperty('userInteractionCount');
    }

    /**
    * The Action representing the type of interaction. For up votes, +1s, etc. use <a class="localLink" href="http://schema.org/LikeAction">LikeAction</a>. For down votes use <a class="localLink" href="http://schema.org/DislikeAction">DislikeAction</a>. Otherwise, use the most specific Action.
    * @param Action|array $value
    * @return $this
    */
    public function interactionType(?Action $value)
    {
        $this->setProperty('interactionType', $value);
        return $this;
    }
   /**
    * @param Action|array $value
    * @return $this
    */
    public function setInteractionType(?Action $value)
    {
        $this->setProperty('interactionType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInteractionType()
    {
       return $this->getProperty('interactionType');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\InteractionCounter','Thing\\InteractionCounter');

