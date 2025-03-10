<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Indicates employment-related experience requirements, e.g.
 * [[monthsOfExperience]].
* @see schema:OccupationalExperienceRequirements
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class OccupationalExperienceRequirements extends Intangible
{


    /**
        * Indicates the minimal number of months of experience required for a position.
        * @param array|string|mixed $value
    * @return $this
    */
    public function monthsOfExperience($value)
    {
        $this->setProperty('monthsOfExperience', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMonthsOfExperience($value)
    {
        $this->setProperty('monthsOfExperience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMonthsOfExperience()
    {
       return $this->getProperty('monthsOfExperience');
    }


}
