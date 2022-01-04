<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A thesis or dissertation document submitted in support of candidature for an academic degree or professional qualification.
* @see http://schema.org/Thesis
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Thesis extends CreativeWork
{

    /**
    * Qualification, candidature, degree, application that Thesis supports.
    * @param string|array $value
    * @return $this
    * @deprecated use setInSupportOf
    */
    public function inSupportOf($value)
    {
        $this->setProperty('inSupportOf', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setInSupportOf($value)
    {
        $this->setProperty('inSupportOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInSupportOf()
    {
       return $this->getProperty('inSupportOf');
    }


}
