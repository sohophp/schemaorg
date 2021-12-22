<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

/**
* A web page that provides medical information.
* @see http://schema.org/MedicalWebPage
* @package Sohophp\SchemaOrg\Thing\CreativeWork\WebPage

*
*/
class MedicalWebPage extends WebPage
{

    /**
    * An aspect of medical practice that is considered on the page, such as 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology', etc.
    * @param string|array $value
    * @return $this
    */
    public function aspect(?string $value)
    {
        $this->setProperty('aspect', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAspect(?string $value)
    {
        $this->setProperty('aspect', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAspect()
    {
       return $this->getProperty('aspect');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\WebPage\\MedicalWebPage','Thing\\MedicalWebPage');

