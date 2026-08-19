<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Audience;

use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
 * An EducationalAudience.
 * @see https://schema.org/EducationalAudience
 * @package Sohophp\SchemaOrg\Thing\Intangible\Audience
 */
class EducationalAudience extends Audience
{
    /**
     * An educationalRole of an EducationalAudience.
     * @see https://schema.org/educationalRole
     * @param string|array $value
     * @return $this
     */
    public function educationalRole($value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEducationalRole($value)
    {
        $this->setProperty('educationalRole', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEducationalRole($value)
    {
        $current = $this->getProperty('educationalRole');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalRole', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEducationalRole()
    {
        return $this->getProperty('educationalRole');
    }
}
