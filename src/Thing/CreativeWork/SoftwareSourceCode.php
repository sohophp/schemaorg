<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ComputerLanguage;

/**
 * Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
 *
 * @see http://schema.org/SoftwareSourceCode
 */
class SoftwareSourceCode extends CreativeWork
{
    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     *
     * @param SoftwareApplication $value
     *
     * @return $this
     */
    public function targetProduct(?SoftwareApplication $value): self
    {
        $this->setProperty('targetProduct', $value);

        return $this;
    }

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
     *
     * @param string $value
     *
     * @return $this
     */
    public function codeRepository(?string $value): self
    {
        $this->setProperty('codeRepository', $value);

        return $this;
    }

    /**
     * The computer programming language.
     *
     * @param ComputerLanguage|string $value
     *
     * @return $this
     */
    public function programmingLanguage($value): self
    {
        $this->setProperty('programmingLanguage', $value);

        return $this;
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     * @param string $value
     *
     * @return $this
     */
    public function codeSampleType(?string $value): self
    {
        $this->setProperty('codeSampleType', $value);

        return $this;
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
     *
     * @param string $value
     *
     * @return $this
     */
    public function runtimePlatform(?string $value): self
    {
        $this->setProperty('runtimePlatform', $value);

        return $this;
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     * @param string $value
     *
     * @return $this
     */
    public function sampleType(?string $value): self
    {
        $this->setProperty('sampleType', $value);

        return $this;
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
     *
     * @param string $value
     *
     * @return $this
     */
    public function runtime(?string $value): self
    {
        $this->setProperty('runtime', $value);

        return $this;
    }
}
