<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
* A set of characteristics belonging to people, e.g. who compose an item's
 * target audience.
* @see http://schema.org/PeopleAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class PeopleAudience extends Audience
{


    /**
        * Maximal age recommended for viewing content.
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedMaxAge($value)
    {
        $this->setProperty('suggestedMaxAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedMaxAge($value)
    {
        $this->setProperty('suggestedMaxAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedMaxAge()
    {
       return $this->getProperty('suggestedMaxAge');
    }


    /**
        * Audiences defined by a person's minimum age.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function requiredMinAge($value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setRequiredMinAge($value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequiredMinAge()
    {
       return $this->getProperty('requiredMinAge');
    }


    /**
        * Specifying the health condition(s) of a patient, medical study, or other
 * target audience.
        * @param MedicalCondition|array|string|mixed $value
    * @return $this
    */
    public function healthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * @param MedicalCondition|array|string|mixed $value
    * @return $this
    */
    public function setHealthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthCondition()
    {
       return $this->getProperty('healthCondition');
    }


    /**
        * Audiences defined by a person's gender.
        * @param string|array|mixed $value
    * @return $this
    */
    public function requiredGender($value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setRequiredGender($value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequiredGender()
    {
       return $this->getProperty('requiredGender');
    }


    /**
        * The gender of the person or audience.
        * @param string|array|mixed $value
    * @return $this
    */
    public function suggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSuggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedGender()
    {
       return $this->getProperty('suggestedGender');
    }


    /**
        * Audiences defined by a person's maximum age.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function requiredMaxAge($value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setRequiredMaxAge($value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequiredMaxAge()
    {
       return $this->getProperty('requiredMaxAge');
    }


    /**
        * Minimal age recommended for viewing content.
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedMinAge($value)
    {
        $this->setProperty('suggestedMinAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedMinAge($value)
    {
        $this->setProperty('suggestedMinAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedMinAge()
    {
       return $this->getProperty('suggestedMinAge');
    }


}
