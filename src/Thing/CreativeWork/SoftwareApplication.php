<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset\DataFeed;

/**
 * A software application.
 *
 * @see http://schema.org/SoftwareApplication
 */
class SoftwareApplication extends CreativeWork
{
    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @param string $value
     *
     * @return $this
     */
    public function downloadUrl(?string $value): self
    {
        $this->setProperty('downloadUrl', $value);

        return $this;
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function softwareRequirements($value): self
    {
        $this->setProperty('softwareRequirements', $value);

        return $this;
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
     *
     * @param string $value
     *
     * @return $this
     */
    public function permissions(?string $value): self
    {
        $this->setProperty('permissions', $value);

        return $this;
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @param string $value
     *
     * @return $this
     */
    public function processorRequirements(?string $value): self
    {
        $this->setProperty('processorRequirements', $value);

        return $this;
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     * @param string $value
     *
     * @return $this
     */
    public function availableOnDevice(?string $value): self
    {
        $this->setProperty('availableOnDevice', $value);

        return $this;
    }

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function featureList($value): self
    {
        $this->setProperty('featureList', $value);

        return $this;
    }

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function applicationSubCategory($value): self
    {
        $this->setProperty('applicationSubCategory', $value);

        return $this;
    }

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     * @param string $value
     *
     * @return $this
     */
    public function device(?string $value): self
    {
        $this->setProperty('device', $value);

        return $this;
    }

    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function applicationCategory($value): self
    {
        $this->setProperty('applicationCategory', $value);

        return $this;
    }

    /**
     * Version of the software instance.
     *
     * @param string $value
     *
     * @return $this
     */
    public function softwareVersion(?string $value): self
    {
        $this->setProperty('softwareVersion', $value);

        return $this;
    }

    /**
     * Storage requirements (free space required).
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function storageRequirements($value): self
    {
        $this->setProperty('storageRequirements', $value);

        return $this;
    }

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     *
     * @param string $value
     *
     * @return $this
     */
    public function applicationSuite(?string $value): self
    {
        $this->setProperty('applicationSuite', $value);

        return $this;
    }

    /**
     * Minimum memory requirements.
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function memoryRequirements($value): self
    {
        $this->setProperty('memoryRequirements', $value);

        return $this;
    }

    /**
     * A link to a screenshot image of the app.
     *
     * @param string|ImageObject $value
     *
     * @return $this
     */
    public function screenshot($value): self
    {
        $this->setProperty('screenshot', $value);

        return $this;
    }

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param string $value
     *
     * @return $this
     */
    public function countriesSupported(?string $value): self
    {
        $this->setProperty('countriesSupported', $value);

        return $this;
    }

    /**
     * Software application help.
     *
     * @param CreativeWork $value
     *
     * @return $this
     */
    public function softwareHelp(?CreativeWork $value): self
    {
        $this->setProperty('softwareHelp', $value);

        return $this;
    }

    /**
     * Additional content for a software application.
     *
     * @param SoftwareApplication $value
     *
     * @return $this
     */
    public function softwareAddOn(?SoftwareApplication $value): self
    {
        $this->setProperty('softwareAddOn', $value);

        return $this;
    }

    /**
     * Description of what changed in this version.
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function releaseNotes($value): self
    {
        $this->setProperty('releaseNotes', $value);

        return $this;
    }

    /**
     * Supporting data for a SoftwareApplication.
     *
     * @param DataFeed $value
     *
     * @return $this
     */
    public function supportingData(?DataFeed $value): self
    {
        $this->setProperty('supportingData', $value);

        return $this;
    }

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function requirements($value): self
    {
        $this->setProperty('requirements', $value);

        return $this;
    }

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param string $value
     *
     * @return $this
     */
    public function countriesNotSupported(?string $value): self
    {
        $this->setProperty('countriesNotSupported', $value);

        return $this;
    }

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     *
     * @param string $value
     *
     * @return $this
     */
    public function operatingSystem(?string $value): self
    {
        $this->setProperty('operatingSystem', $value);

        return $this;
    }

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     *
     * @param string $value
     *
     * @return $this
     */
    public function fileSize(?string $value): self
    {
        $this->setProperty('fileSize', $value);

        return $this;
    }

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     *
     * @param string $value
     *
     * @return $this
     */
    public function installUrl(?string $value): self
    {
        $this->setProperty('installUrl', $value);

        return $this;
    }
}
