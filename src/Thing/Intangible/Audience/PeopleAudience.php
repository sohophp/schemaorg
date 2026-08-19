<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GenderType;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 * @see https://schema.org/PeopleAudience
 * @package Sohophp\SchemaOrg\Thing\Intangible\Audience
 */
class PeopleAudience extends Audience
{
    /**
     * Maximum recommended age in years for the audience or user.
     * @see https://schema.org/suggestedMaxAge
     * @param mixed $value
     * @return $this
     */
    public function suggestedMaxAge($value)
    {
        $this->setProperty('suggestedMaxAge', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setSuggestedMaxAge($value)
    {
        $this->setProperty('suggestedMaxAge', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addSuggestedMaxAge($value)
    {
        $current = $this->getProperty('suggestedMaxAge');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedMaxAge', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSuggestedMaxAge()
    {
        return $this->getProperty('suggestedMaxAge');
    }
    /**
     * Audiences defined by a person's maximum age.
     * @see https://schema.org/requiredMaxAge
     * @param int|array $value
     * @return $this
     */
    public function requiredMaxAge($value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setRequiredMaxAge($value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addRequiredMaxAge($value)
    {
        $current = $this->getProperty('requiredMaxAge');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requiredMaxAge', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getRequiredMaxAge()
    {
        return $this->getProperty('requiredMaxAge');
    }
    /**
     * A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or height between 170 and 190 cm. Typically found on a size chart for wearable products.
     * @see https://schema.org/suggestedMeasurement
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function suggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setSuggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addSuggestedMeasurement($value)
    {
        $current = $this->getProperty('suggestedMeasurement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedMeasurement', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getSuggestedMeasurement()
    {
        return $this->getProperty('suggestedMeasurement');
    }
    /**
     * The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
     * @see https://schema.org/suggestedGender
     * @param string|GenderType|array $value
     * @return $this
     */
    public function suggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
     * @param string|GenderType|array $value
     * @return $this
     */
    public function setSuggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
     * @param string|GenderType $value
     * @return $this
     */
    public function addSuggestedGender($value)
    {
        $current = $this->getProperty('suggestedGender');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedGender', $current);
        return $this;
    }

    /**
     * @return string|GenderType|array
     */
    public function getSuggestedGender()
    {
        return $this->getProperty('suggestedGender');
    }
    /**
     * Minimum recommended age in years for the audience or user.
     * @see https://schema.org/suggestedMinAge
     * @param mixed $value
     * @return $this
     */
    public function suggestedMinAge($value)
    {
        $this->setProperty('suggestedMinAge', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setSuggestedMinAge($value)
    {
        $this->setProperty('suggestedMinAge', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addSuggestedMinAge($value)
    {
        $current = $this->getProperty('suggestedMinAge');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedMinAge', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSuggestedMinAge()
    {
        return $this->getProperty('suggestedMinAge');
    }
    /**
     * Audiences defined by a person's minimum age.
     * @see https://schema.org/requiredMinAge
     * @param int|array $value
     * @return $this
     */
    public function requiredMinAge($value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setRequiredMinAge($value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addRequiredMinAge($value)
    {
        $current = $this->getProperty('requiredMinAge');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requiredMinAge', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getRequiredMinAge()
    {
        return $this->getProperty('requiredMinAge');
    }
    /**
     * The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
     * @see https://schema.org/suggestedAge
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function suggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setSuggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addSuggestedAge($value)
    {
        $current = $this->getProperty('suggestedAge');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('suggestedAge', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getSuggestedAge()
    {
        return $this->getProperty('suggestedAge');
    }
    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     * @see https://schema.org/healthCondition
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function healthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function setHealthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
     * @param MedicalCondition $value
     * @return $this
     */
    public function addHealthCondition($value)
    {
        $current = $this->getProperty('healthCondition');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('healthCondition', $current);
        return $this;
    }

    /**
     * @return MedicalCondition|array
     */
    public function getHealthCondition()
    {
        return $this->getProperty('healthCondition');
    }
    /**
     * Audiences defined by a person's gender.
     * @see https://schema.org/requiredGender
     * @param string|array $value
     * @return $this
     */
    public function requiredGender($value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setRequiredGender($value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addRequiredGender($value)
    {
        $current = $this->getProperty('requiredGender');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requiredGender', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getRequiredGender()
    {
        return $this->getProperty('requiredGender');
    }
}
