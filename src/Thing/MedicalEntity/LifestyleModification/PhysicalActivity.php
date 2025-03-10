<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

/**
* Any bodily activity that enhances or maintains physical fitness and overall
 * health and wellness. Includes activity that is part of daily living and
 * routine, structured exercise, and exercise prescribed as part of a medical
 * treatment or recovery plan.
* @see schema:PhysicalActivity
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification
*/
class PhysicalActivity extends LifestyleModification
{


    /**
        * The characteristics of associated patients, such as age, gender, race etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function epidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEpidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpidemiology()
    {
       return $this->getProperty('epidemiology');
    }


    /**
        * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }


    /**
        * Changes in the normal mechanical, physical, and biochemical functions that
 * are associated with this activity or condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function pathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPathophysiology()
    {
       return $this->getProperty('pathophysiology');
    }


    /**
        * The anatomy of the underlying organ system or structures associated with this
 * entity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function associatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAssociatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedAnatomy()
    {
       return $this->getProperty('associatedAnatomy');
    }


}
