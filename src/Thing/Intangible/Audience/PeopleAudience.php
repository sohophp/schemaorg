<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
* A set of characteristics belonging to people, e.g. who compose an item's target audience.
* @see http://schema.org/PeopleAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience

*
*/
class PeopleAudience extends Audience
{

    /**
    * Maximal age recommended for viewing content.
    * @param |array $value
    * @return $this
    */
    public function suggestedMaxAge($value)
    {
        $this->setProperty('suggestedMaxAge', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setSuggestedMaxAge($value)
    {
        $this->setProperty('suggestedMaxAge', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuggestedMaxAge()
    {
       return $this->getProperty('suggestedMaxAge');
    }

    /**
    * Audiences defined by a person's minimum age.
    * @param int|array $value
    * @return $this
    */
    public function requiredMinAge(?int $value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setRequiredMinAge(?int $value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRequiredMinAge()
    {
       return $this->getProperty('requiredMinAge');
    }

    /**
    * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function healthCondition(?MedicalCondition $value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }
   /**
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function setHealthCondition(?MedicalCondition $value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthCondition()
    {
       return $this->getProperty('healthCondition');
    }

    /**
    * Audiences defined by a person's gender.
    * @param string|array $value
    * @return $this
    */
    public function requiredGender(?string $value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setRequiredGender(?string $value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRequiredGender()
    {
       return $this->getProperty('requiredGender');
    }

    /**
    * The gender of the person or audience.
    * @param string|array $value
    * @return $this
    */
    public function suggestedGender(?string $value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setSuggestedGender(?string $value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuggestedGender()
    {
       return $this->getProperty('suggestedGender');
    }

    /**
    * Audiences defined by a person's maximum age.
    * @param int|array $value
    * @return $this
    */
    public function requiredMaxAge(?int $value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setRequiredMaxAge(?int $value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRequiredMaxAge()
    {
       return $this->getProperty('requiredMaxAge');
    }

    /**
    * Minimal age recommended for viewing content.
    * @param |array $value
    * @return $this
    */
    public function suggestedMinAge($value)
    {
        $this->setProperty('suggestedMinAge', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setSuggestedMinAge($value)
    {
        $this->setProperty('suggestedMinAge', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuggestedMinAge()
    {
       return $this->getProperty('suggestedMinAge');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Audience\\PeopleAudience','Thing\\PeopleAudience');

