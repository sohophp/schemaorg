<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An entry point, within some Web-based protocol.
* @see schema:EntryPoint
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class EntryPoint extends Intangible
{


    /**
        * An application that can complete the request.
        * @param array|string|mixed $value
    * @return $this
    */
    public function application($value)
    {
        $this->setProperty('application', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setApplication($value)
    {
        $this->setProperty('application', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplication()
    {
       return $this->getProperty('application');
    }


    /**
        * The supported content type(s) for an EntryPoint response.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contentType($value)
    {
        $this->setProperty('contentType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContentType($value)
    {
        $this->setProperty('contentType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContentType()
    {
       return $this->getProperty('contentType');
    }


    /**
        * The high level platform(s) where the Action can be performed for the given
 * URL. To specify a specific application or operating system instance, use
 * actionApplication.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actionPlatform($value)
    {
        $this->setProperty('actionPlatform', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActionPlatform($value)
    {
        $this->setProperty('actionPlatform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionPlatform()
    {
       return $this->getProperty('actionPlatform');
    }


    /**
        * An application that can complete the request.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actionApplication($value)
    {
        $this->setProperty('actionApplication', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActionApplication($value)
    {
        $this->setProperty('actionApplication', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionApplication()
    {
       return $this->getProperty('actionApplication');
    }


    /**
        * The supported encoding type(s) for an EntryPoint request.
        * @param array|string|mixed $value
    * @return $this
    */
    public function encodingType($value)
    {
        $this->setProperty('encodingType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEncodingType($value)
    {
        $this->setProperty('encodingType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEncodingType()
    {
       return $this->getProperty('encodingType');
    }


    /**
        * An url template (RFC6570) that will be used to construct the target of the
 * execution of the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function urlTemplate($value)
    {
        $this->setProperty('urlTemplate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUrlTemplate($value)
    {
        $this->setProperty('urlTemplate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUrlTemplate()
    {
       return $this->getProperty('urlTemplate');
    }


    /**
        * An HTTP method that specifies the appropriate HTTP method for a request to an
 * HTTP EntryPoint. Values are capitalized strings as used in HTTP.
        * @param array|string|mixed $value
    * @return $this
    */
    public function httpMethod($value)
    {
        $this->setProperty('httpMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHttpMethod($value)
    {
        $this->setProperty('httpMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHttpMethod()
    {
       return $this->getProperty('httpMethod');
    }


}
