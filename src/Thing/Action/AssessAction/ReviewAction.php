<?php
namespace Sohophp\SchemaOrg\Thing\Action\AssessAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction;

/**
* The act of producing a balanced opinion about the object for an audience. An
 * agent reviews an object with participants resulting in a review.
* @see schema:ReviewAction
* @package Sohophp\SchemaOrg\Thing\Action\AssessAction
*/
class ReviewAction extends AssessAction
{


    /**
        * A sub property of result. The review that resulted in the performing of the
 * action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function resultReview($value)
    {
        $this->setProperty('resultReview', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setResultReview($value)
    {
        $this->setProperty('resultReview', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getResultReview()
    {
       return $this->getProperty('resultReview');
    }


}
