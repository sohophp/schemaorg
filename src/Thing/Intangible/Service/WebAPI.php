<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* An application programming interface accessible over Web/Internet technologies.
* @see http://schema.org/WebAPI
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class WebAPI extends Service
{

    /**
    * Further documentation describing the Web API in more detail.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function documentation($value)
    {
        $this->setProperty('documentation', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\WebAPI','Thing\\WebAPI');

