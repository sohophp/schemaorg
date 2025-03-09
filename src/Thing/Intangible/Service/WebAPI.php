<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;

/**
* An application programming interface accessible over Web/Internet technologies.
* @see schema:WebAPI
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class WebAPI extends Service
{
   /**
        * Further documentation describing the Web API in more detail.
        */
    protected $documentation = null;


    /**
    * @param array|string $value
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
