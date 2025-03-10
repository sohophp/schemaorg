<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
* The act of ingesting information/resources/food.
* @see schema:ConsumeAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class ConsumeAction extends Action
{


    /**
        * An Offer which must be accepted before the user can perform the Action. For
 * example, the user may need to buy a movie before being able to watch it.
        * @param array|string|mixed $value
    * @return $this
    */
    public function expectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * A set of requirements that must be fulfilled in order to perform an Action.
 * If more than one value is specified, fulfilling one set of requirements will
 * allow the Action to be performed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actionAccessibilityRequirement($value)
    {
        $this->setProperty('actionAccessibilityRequirement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
