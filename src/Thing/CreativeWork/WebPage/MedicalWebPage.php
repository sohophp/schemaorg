<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

/**
* A web page that provides medical information.
* @see schema:MedicalWebPage
* @package Sohophp\SchemaOrg\Thing\CreativeWork\WebPage
*/
class MedicalWebPage extends WebPage
{


    /**
        * Medical audience for page.
        * @param array|string|mixed $value
    * @return $this
    */
    public function medicalAudience($value)
    {
        $this->setProperty('medicalAudience', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMedicalAudience($value)
    {
        $this->setProperty('medicalAudience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMedicalAudience()
    {
       return $this->getProperty('medicalAudience');
    }


    /**
        * An aspect of medical practice that is considered on the page, such as
 * 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology',
 * etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function aspect($value)
    {
        $this->setProperty('aspect', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAspect($value)
    {
        $this->setProperty('aspect', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAspect()
    {
       return $this->getProperty('aspect');
    }


}
