<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* An application programming interface accessible over Web/Internet
 * technologies.
* @see http://schema.org/WebAPI
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class WebAPI extends Service
{


    /**
        * Further documentation describing the Web API in more detail.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function documentation($value)
    {
        $this->setProperty('documentation', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function setDocumentation($value)
    {
        $this->setProperty('documentation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDocumentation()
    {
       return $this->getProperty('documentation');
    }


}
