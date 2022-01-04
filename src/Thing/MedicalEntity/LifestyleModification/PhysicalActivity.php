<?php
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

*
*/
class PhysicalActivity extends LifestyleModification
{

    /**
    * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    * @deprecated use setCategory
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
   /**
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }

    /**
    * The anatomy of the underlying organ system or structures associated with this entity.
    * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array|string $value
    * @return $this
    * @deprecated use setAssociatedAnatomy
    */
    public function associatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }
   /**
    * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array|string $value
    * @return $this
    */
    public function setAssociatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAssociatedAnatomy()
    {
       return $this->getProperty('associatedAnatomy');
    }

    /**
    * The characteristics of associated patients, such as age, gender, race etc.
    * @param string|array $value
    * @return $this
    * @deprecated use setEpidemiology
    */
    public function epidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setEpidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEpidemiology()
    {
       return $this->getProperty('epidemiology');
    }

    /**
    * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
    * @param string|array $value
    * @return $this
    * @deprecated use setPathophysiology
    */
    public function pathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPathophysiology()
    {
       return $this->getProperty('pathophysiology');
    }


}
