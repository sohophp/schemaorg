<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* The causative agent(s) that are responsible for the pathophysiologic process
 * that eventually results in a medical condition, symptom or sign. In this
 * schema, unless otherwise specified this is meant to be the proximate cause of
 * the medical condition, symptom or sign. The proximate cause is defined as the
 * causative agent that most directly results in the medical condition, symptom
 * or sign. For example, the HIV virus could be considered a cause of AIDS. Or
 * in a diagnostic context, if a patient fell and sustained a hip fracture and
 * two days later sustained a pulmonary embolism which eventuated in a cardiac
 * arrest, the cause of the cardiac arrest (the proximate cause) would be the
 * pulmonary embolism and not the fall. Medical causes can include
 * cardiovascular, chemical, dermatologic, endocrine, environmental,
 * gastroenterologic, genetic, hematologic, gynecologic, iatrogenic, infectious,
 * musculoskeletal, neurologic, nutritional, obstetric, oncologic,
 * otolaryngologic, pharmacologic, psychiatric, pulmonary, renal, rheumatologic,
 * toxic, traumatic, or urologic causes; medical conditions can be causes as
 * well.
* @see http://schema.org/MedicalCause
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalCause extends MedicalEntity
{


    /**
        * The condition, complication, symptom, sign, etc. caused.
        * @param MedicalEntity|array|string|mixed $value
    * @return $this
    */
    public function causeOf($value)
    {
        $this->setProperty('causeOf', $value);
        return $this;
    }

    /**
    * @param MedicalEntity|array|string|mixed $value
    * @return $this
    */
    public function setCauseOf($value)
    {
        $this->setProperty('causeOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCauseOf()
    {
       return $this->getProperty('causeOf');
    }


}
