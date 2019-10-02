<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A thesis or dissertation document submitted in support of candidature for an academic degree or professional qualification.
* @see http://schema.org/Thesis
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Thesis extends CreativeWork
{

    /**
    * Qualification, candidature, degree, application that Thesis supports.
    * @param string $value
    * @return $this
    */
    public function inSupportOf(?string $value)
    {
        $this->setProperty('inSupportOf', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Thesis','Thing\\Thesis');
