<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DigitalPlatformEnumeration;

/**
 * An entry point, within some Web-based protocol.
 * @see https://schema.org/EntryPoint
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class EntryPoint extends Intangible
{
    /**
     * An application that can complete the request.
     * @see https://schema.org/actionApplication
     * @param SoftwareApplication|array $value
     * @return $this
     */
    public function actionApplication($value)
    {
        $this->setProperty('actionApplication', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication|array $value
     * @return $this
     */
    public function setActionApplication($value)
    {
        $this->setProperty('actionApplication', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication $value
     * @return $this
     */
    public function addActionApplication($value)
    {
        $current = $this->getProperty('actionApplication');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actionApplication', $current);
        return $this;
    }

    /**
     * @return SoftwareApplication|array
     */
    public function getActionApplication()
    {
        return $this->getProperty('actionApplication');
    }
    /**
     * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
     * @see https://schema.org/actionPlatform
     * @param string|DigitalPlatformEnumeration|array $value
     * @return $this
     */
    public function actionPlatform($value)
    {
        $this->setProperty('actionPlatform', $value);
        return $this;
    }

    /**
     * @param string|DigitalPlatformEnumeration|array $value
     * @return $this
     */
    public function setActionPlatform($value)
    {
        $this->setProperty('actionPlatform', $value);
        return $this;
    }

    /**
     * @param string|DigitalPlatformEnumeration $value
     * @return $this
     */
    public function addActionPlatform($value)
    {
        $current = $this->getProperty('actionPlatform');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actionPlatform', $current);
        return $this;
    }

    /**
     * @return string|DigitalPlatformEnumeration|array
     */
    public function getActionPlatform()
    {
        return $this->getProperty('actionPlatform');
    }
    /**
     * An url template (RFC6570) that will be used to construct the target of the execution of the action.
     * @see https://schema.org/urlTemplate
     * @param string|array $value
     * @return $this
     */
    public function urlTemplate($value)
    {
        $this->setProperty('urlTemplate', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setUrlTemplate($value)
    {
        $this->setProperty('urlTemplate', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addUrlTemplate($value)
    {
        $current = $this->getProperty('urlTemplate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('urlTemplate', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getUrlTemplate()
    {
        return $this->getProperty('urlTemplate');
    }
    /**
     * An application that can complete the request.
     * @see https://schema.org/application
     * @param SoftwareApplication|array $value
     * @return $this
     */
    public function application($value)
    {
        $this->setProperty('application', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication|array $value
     * @return $this
     */
    public function setApplication($value)
    {
        $this->setProperty('application', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication $value
     * @return $this
     */
    public function addApplication($value)
    {
        $current = $this->getProperty('application');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('application', $current);
        return $this;
    }

    /**
     * @return SoftwareApplication|array
     */
    public function getApplication()
    {
        return $this->getProperty('application');
    }
    /**
     * The supported encoding type(s) for an EntryPoint request.
     * @see https://schema.org/encodingType
     * @param string|array $value
     * @return $this
     */
    public function encodingType($value)
    {
        $this->setProperty('encodingType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEncodingType($value)
    {
        $this->setProperty('encodingType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEncodingType($value)
    {
        $current = $this->getProperty('encodingType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('encodingType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEncodingType()
    {
        return $this->getProperty('encodingType');
    }
    /**
     * The supported content type(s) for an EntryPoint response.
     * @see https://schema.org/contentType
     * @param string|array $value
     * @return $this
     */
    public function contentType($value)
    {
        $this->setProperty('contentType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setContentType($value)
    {
        $this->setProperty('contentType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addContentType($value)
    {
        $current = $this->getProperty('contentType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contentType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getContentType()
    {
        return $this->getProperty('contentType');
    }
    /**
     * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     * @see https://schema.org/httpMethod
     * @param string|array $value
     * @return $this
     */
    public function httpMethod($value)
    {
        $this->setProperty('httpMethod', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHttpMethod($value)
    {
        $this->setProperty('httpMethod', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHttpMethod($value)
    {
        $current = $this->getProperty('httpMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('httpMethod', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHttpMethod()
    {
        return $this->getProperty('httpMethod');
    }
}
