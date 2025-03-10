<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* A set of characteristics belonging to people, e.g. who compose an item's
 * target audience.
* @see schema:PeopleAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class PeopleAudience extends Audience
{


    /**
        * Specifying the health condition(s) of a patient, medical study, or other
 * target audience.
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Audiences defined by a person's minimum age.
        * @param array|string|mixed $value
    * @return $this
    */
    public function requiredMinAge($value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The age or age range for the intended audience or person, for example 3-12
 * months for infants, 1-5 years for toddlers.
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedAge()
    {
       return $this->getProperty('suggestedAge');
    }


    /**
        * The suggested gender of the intended person or audience, for example "male",
 * "female", or "unisex".
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Audiences defined by a person's gender.
        * @param array|string|mixed $value
    * @return $this
    */
    public function requiredGender($value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Maximum recommended age in years for the audience or user.
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
        * Audiences defined by a person's maximum age.
        * @param array|string|mixed $value
    * @return $this
    */
    public function requiredMaxAge($value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A suggested range of body measurements for the intended audience or person,
 * for example inseam between 32 and 34 inches or height between 170 and 190 cm.
 * Typically found on a size chart for wearable products.
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedMeasurement()
    {
       return $this->getProperty('suggestedMeasurement');
    }


    /**
        * Minimum recommended age in years for the audience or user.
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
