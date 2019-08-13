<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
* An EducationalAudience.
* @see http://schema.org/EducationalAudience
* @package Sohophp\SchemaOrg\Thing\Intangible\Audience
*/
class EducationalAudience extends Audience
{

    /**
    * An educationalRole of an EducationalAudience.
    * @param string $value
    * @return $this
    */
    public function educationalRole(?string $value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Audience\\EducationalAudience','Thing\\EducationalAudience');

