<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* A set of characteristics belonging to people, e.g. who compose an item's target audience.
* @see http://schema.org/PeopleAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class PeopleAudience extends Audience
{

    /**
    * Maximal age recommended for viewing content.
    * @param  $value
    * @return $this
    */
    public function suggestedMaxAge($value)
    {
        $this->setProperty('suggestedMaxAge', $value);
        return $this;
    }

    /**
    * Audiences defined by a person's minimum age.
    * @param int $value
    * @return $this
    */
    public function requiredMinAge(?int $value)
    {
        $this->setProperty('requiredMinAge', $value);
        return $this;
    }

    /**
    * Audiences defined by a person's gender.
    * @param string $value
    * @return $this
    */
    public function requiredGender(?string $value)
    {
        $this->setProperty('requiredGender', $value);
        return $this;
    }

    /**
    * The gender of the person or audience.
    * @param string $value
    * @return $this
    */
    public function suggestedGender(?string $value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
    * Audiences defined by a person's maximum age.
    * @param int $value
    * @return $this
    */
    public function requiredMaxAge(?int $value)
    {
        $this->setProperty('requiredMaxAge', $value);
        return $this;
    }

    /**
    * Minimal age recommended for viewing content.
    * @param  $value
    * @return $this
    */
    public function suggestedMinAge($value)
    {
        $this->setProperty('suggestedMinAge', $value);
        return $this;
    }


}

