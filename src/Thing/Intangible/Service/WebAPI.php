<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* An application programming interface accessible over Web/Internet technologies.
* @see http://schema.org/WebAPI
* @package Sohophp\SchemaOrg\Thing\Intangible\Service

*
*/
class WebAPI extends Service
{

    /**
    * Further documentation describing the Web API in more detail.
    * @param CreativeWork|string|array $value
    * @return $this
    * @deprecated use setDocumentation
    */
    public function documentation($value)
    {
        $this->setProperty('documentation', $value);
        return $this;
    }
   /**
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function setDocumentation($value)
    {
        $this->setProperty('documentation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDocumentation()
    {
       return $this->getProperty('documentation');
    }


}
