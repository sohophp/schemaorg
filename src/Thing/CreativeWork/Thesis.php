<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A thesis or dissertation document submitted in support of candidature for an academic degree or professional qualification.
* @see schema:Thesis
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Thesis extends CreativeWork
{
   /**
        * Qualification, candidature, degree, application that Thesis supports.
        */
    protected $inSupportOf = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setInSupportOf($value)
    {
        $this->setProperty('inSupportOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInSupportOf()
    {
       return $this->getProperty('inSupportOf');
    }


}
