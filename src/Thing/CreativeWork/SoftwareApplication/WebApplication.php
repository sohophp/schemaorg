<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
* Web applications.
* @see http://schema.org/WebApplication
* @package Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication
*/
class WebApplication extends SoftwareApplication
{

    /**
    * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
    * @param string $value
    * @return $this
    */
    public function browserRequirements(?string $value)
    {
        $this->setProperty('browserRequirements', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\SoftwareApplication\\WebApplication','Thing\\WebApplication');

