<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * An application programming interface accessible over Web/Internet technologies.
 * @see https://schema.org/WebAPI
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service
 */
class WebAPI extends Service
{
    /**
     * Further documentation describing the Web API in more detail.
     * @see https://schema.org/documentation
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function documentation($value)
    {
        $this->setProperty('documentation', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function setDocumentation($value)
    {
        $this->setProperty('documentation', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork $value
     * @return $this
     */
    public function addDocumentation($value)
    {
        $current = $this->getProperty('documentation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('documentation', $current);
        return $this;
    }

    /**
     * @return string|CreativeWork|array
     */
    public function getDocumentation()
    {
        return $this->getProperty('documentation');
    }
}
