<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
* Any bodily activity that enhances or maintains physical fitness and overall health and wellness. Includes activity that is part of daily living and routine, structured exercise, and exercise prescribed as part of a medical treatment or recovery plan.
* @see http://schema.org/PhysicalActivity
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification
*/
class PhysicalActivity extends LifestyleModification
{

    /**
    * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param string|PhysicalActivityCategory|Thing $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * The anatomy of the underlying organ system or structures associated with this entity.
    * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem $value
    * @return $this
    */
    public function associatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }

    /**
    * The characteristics of associated patients, such as age, gender, race etc.
    * @param string $value
    * @return $this
    */
    public function epidemiology(?string $value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
    * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
    * @param string $value
    * @return $this
    */
    public function pathophysiology(?string $value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\LifestyleModification\\PhysicalActivity','Thing\\PhysicalActivity');

