<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
* An entry point, within some Web-based protocol.
* @see http://schema.org/EntryPoint
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class EntryPoint extends Intangible
{

    /**
    * An url template (RFC6570) that will be used to construct the target of the execution of the action.
    * @param string $value
    * @return $this
    */
    public function urlTemplate(?string $value)
    {
        $this->setProperty('urlTemplate', $value);
        return $this;
    }

    /**
    * An application that can complete the request.
    * @param SoftwareApplication $value
    * @return $this
    */
    public function actionApplication(?SoftwareApplication $value)
    {
        $this->setProperty('actionApplication', $value);
        return $this;
    }

    /**
    * An application that can complete the request.
    * @param SoftwareApplication $value
    * @return $this
    */
    public function application(?SoftwareApplication $value)
    {
        $this->setProperty('application', $value);
        return $this;
    }

    /**
    * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
    * @param string|string $value
    * @return $this
    */
    public function actionPlatform($value)
    {
        $this->setProperty('actionPlatform', $value);
        return $this;
    }

    /**
    * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
    * @param string $value
    * @return $this
    */
    public function httpMethod(?string $value)
    {
        $this->setProperty('httpMethod', $value);
        return $this;
    }

    /**
    * The supported encoding type(s) for an EntryPoint request.
    * @param string $value
    * @return $this
    */
    public function encodingType(?string $value)
    {
        $this->setProperty('encodingType', $value);
        return $this;
    }

    /**
    * The supported content type(s) for an EntryPoint response.
    * @param string $value
    * @return $this
    */
    public function contentType(?string $value)
    {
        $this->setProperty('contentType', $value);
        return $this;
    }


}

