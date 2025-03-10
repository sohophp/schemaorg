<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Intangible\ActionAccessSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;

/**
* The act of ingesting information/resources/food.
* @see http://schema.org/ConsumeAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class ConsumeAction extends Action
{


    /**
        * A set of requirements that a must be fulfilled in order to perform an Action.
 * If more than one value is specied, fulfilling one set of requirements will
 * allow the Action to be performed.
        * @param ActionAccessSpecification|array|string|mixed $value
    * @return $this
    */
    public function actionAccessibilityRequirement($value)
    {
        $this->setProperty('actionAccessibilityRequirement', $value);
        return $this;
    }

    /**
    * @param ActionAccessSpecification|array|string|mixed $value
    * @return $this
    */
    public function setActionAccessibilityRequirement($value)
    {
        $this->setProperty('actionAccessibilityRequirement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionAccessibilityRequirement()
    {
       return $this->getProperty('actionAccessibilityRequirement');
    }


    /**
        * An Offer which must be accepted before the user can perform the Action. For
 * example, the user may need to buy a movie before being able to watch it.
        * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function expectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
    * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function setExpectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpectsAcceptanceOf()
    {
       return $this->getProperty('expectsAcceptanceOf');
    }


}
