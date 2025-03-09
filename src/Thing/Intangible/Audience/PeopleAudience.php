<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* A set of characteristics belonging to people, e.g. who compose an item's target audience.
* @see schema:PeopleAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class PeopleAudience extends Audience
{
   /**
        * Specifying the health condition(s) of a patient, medical study, or other target audience.
        */
    protected $healthCondition = null;

   /**
        * Audiences defined by a person's minimum age.
        */
    protected $requiredMinAge = null;

   /**
        * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
        */
    protected $suggestedAge = null;

   /**
        * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
        */
    protected $suggestedGender = null;

   /**
        * Audiences defined by a person's gender.
        */
    protected $requiredGender = null;

   /**
        * Maximum recommended age in years for the audience or user.
        */
    protected $suggestedMaxAge = null;

   /**
        * Audiences defined by a person's maximum age.
        */
    protected $requiredMaxAge = null;

   /**
        * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or height between 170 and 190 cm. Typically found on a size chart for wearable products.
        */
    protected $suggestedMeasurement = null;

   /**
        * Minimum recommended age in years for the audience or user.
        */
    protected $suggestedMinAge = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
