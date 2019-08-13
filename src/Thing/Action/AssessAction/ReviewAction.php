<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\AssessAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
* The act of producing a balanced opinion about the object for an audience. An agent reviews an object with participants resulting in a review.
* @see http://schema.org/ReviewAction
* @package Sohophp\SchemaOrg\Thing\Action\AssessAction
*/
class ReviewAction extends AssessAction
{

    /**
    * A sub property of result. The review that resulted in the performing of the action.
    * @param Review $value
    * @return $this
    */
    public function resultReview(?Review $value)
    {
        $this->setProperty('resultReview', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\AssessAction\\ReviewAction','Thing\\ReviewAction');

