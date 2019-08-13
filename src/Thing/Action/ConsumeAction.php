<?php declare(strict_types=1);
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
    * A set of requirements that a must be fulfilled in order to perform an Action. If more than one value is specied, fulfilling one set of requirements will allow the Action to be performed.
    * @param ActionAccessSpecification $value
    * @return $this
    */
    public function actionAccessibilityRequirement(?ActionAccessSpecification $value)
    {
        $this->setProperty('actionAccessibilityRequirement', $value);
        return $this;
    }

    /**
    * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
    * @param Offer $value
    * @return $this
    */
    public function expectsAcceptanceOf(?Offer $value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\ConsumeAction','Thing\\ConsumeAction');

