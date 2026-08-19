<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication\RuntimePlatform;
use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset\DataFeed;
use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication\OperatingSystem;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;

/**
 * A software application.
 * @see https://schema.org/SoftwareApplication
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class SoftwareApplication extends CreativeWork
{
    /**
     * Version of the software instance.
     * @see https://schema.org/softwareVersion
     * @param string|array $value
     * @return $this
     */
    public function softwareVersion($value)
    {
        $this->setProperty('softwareVersion', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSoftwareVersion($value)
    {
        $this->setProperty('softwareVersion', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSoftwareVersion($value)
    {
        $current = $this->getProperty('softwareVersion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('softwareVersion', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSoftwareVersion()
    {
        return $this->getProperty('softwareVersion');
    }
    /**
     * Minimum memory requirements.
     * @see https://schema.org/memoryRequirements
     * @param string|array $value
     * @return $this
     */
    public function memoryRequirements($value)
    {
        $this->setProperty('memoryRequirements', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setMemoryRequirements($value)
    {
        $this->setProperty('memoryRequirements', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addMemoryRequirements($value)
    {
        $current = $this->getProperty('memoryRequirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('memoryRequirements', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getMemoryRequirements()
    {
        return $this->getProperty('memoryRequirements');
    }
    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
     * @see https://schema.org/requirements
     * @param string|array $value
     * @return $this
     */
    public function requirements($value)
    {
        $this->setProperty('requirements', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setRequirements($value)
    {
        $this->setProperty('requirements', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addRequirements($value)
    {
        $current = $this->getProperty('requirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requirements', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getRequirements()
    {
        return $this->getProperty('requirements');
    }
    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
     * @see https://schema.org/softwareRequirements
     * @param SoftwareApplication|string|array $value
     * @return $this
     */
    public function softwareRequirements($value)
    {
        $this->setProperty('softwareRequirements', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication|string|array $value
     * @return $this
     */
    public function setSoftwareRequirements($value)
    {
        $this->setProperty('softwareRequirements', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication|string $value
     * @return $this
     */
    public function addSoftwareRequirements($value)
    {
        $current = $this->getProperty('softwareRequirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('softwareRequirements', $current);
        return $this;
    }

    /**
     * @return SoftwareApplication|string|array
     */
    public function getSoftwareRequirements()
    {
        return $this->getProperty('softwareRequirements');
    }
    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
     * @see https://schema.org/applicationSuite
     * @param string|array $value
     * @return $this
     */
    public function applicationSuite($value)
    {
        $this->setProperty('applicationSuite', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setApplicationSuite($value)
    {
        $this->setProperty('applicationSuite', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addApplicationSuite($value)
    {
        $current = $this->getProperty('applicationSuite');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicationSuite', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getApplicationSuite()
    {
        return $this->getProperty('applicationSuite');
    }
    /**
     * Description of what changed in this version.
     * @see https://schema.org/releaseNotes
     * @param string|array $value
     * @return $this
     */
    public function releaseNotes($value)
    {
        $this->setProperty('releaseNotes', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setReleaseNotes($value)
    {
        $this->setProperty('releaseNotes', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addReleaseNotes($value)
    {
        $current = $this->getProperty('releaseNotes');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('releaseNotes', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getReleaseNotes()
    {
        return $this->getProperty('releaseNotes');
    }
    /**
     * Features or modules provided by this application (and possibly required by other applications).
     * @see https://schema.org/featureList
     * @param string|array $value
     * @return $this
     */
    public function featureList($value)
    {
        $this->setProperty('featureList', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setFeatureList($value)
    {
        $this->setProperty('featureList', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFeatureList($value)
    {
        $current = $this->getProperty('featureList');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('featureList', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getFeatureList()
    {
        return $this->getProperty('featureList');
    }
    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     * @see https://schema.org/applicationSubCategory
     * @param string|array $value
     * @return $this
     */
    public function applicationSubCategory($value)
    {
        $this->setProperty('applicationSubCategory', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setApplicationSubCategory($value)
    {
        $this->setProperty('applicationSubCategory', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addApplicationSubCategory($value)
    {
        $current = $this->getProperty('applicationSubCategory');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicationSubCategory', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getApplicationSubCategory()
    {
        return $this->getProperty('applicationSubCategory');
    }
    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     * @see https://schema.org/fileSize
     * @param string|array $value
     * @return $this
     */
    public function fileSize($value)
    {
        $this->setProperty('fileSize', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setFileSize($value)
    {
        $this->setProperty('fileSize', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFileSize($value)
    {
        $current = $this->getProperty('fileSize');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('fileSize', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getFileSize()
    {
        return $this->getProperty('fileSize');
    }
    /**
     * Storage requirements (free space required).
     * @see https://schema.org/storageRequirements
     * @param string|array $value
     * @return $this
     */
    public function storageRequirements($value)
    {
        $this->setProperty('storageRequirements', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setStorageRequirements($value)
    {
        $this->setProperty('storageRequirements', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addStorageRequirements($value)
    {
        $current = $this->getProperty('storageRequirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('storageRequirements', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getStorageRequirements()
    {
        return $this->getProperty('storageRequirements');
    }
    /**
     * Software application help.
     * @see https://schema.org/softwareHelp
     * @param CreativeWork|array $value
     * @return $this
     */
    public function softwareHelp($value)
    {
        $this->setProperty('softwareHelp', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setSoftwareHelp($value)
    {
        $this->setProperty('softwareHelp', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addSoftwareHelp($value)
    {
        $current = $this->getProperty('softwareHelp');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('softwareHelp', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getSoftwareHelp()
    {
        return $this->getProperty('softwareHelp');
    }
    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     * @see https://schema.org/applicationCategory
     * @param string|array $value
     * @return $this
     */
    public function applicationCategory($value)
    {
        $this->setProperty('applicationCategory', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setApplicationCategory($value)
    {
        $this->setProperty('applicationCategory', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addApplicationCategory($value)
    {
        $current = $this->getProperty('applicationCategory');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicationCategory', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getApplicationCategory()
    {
        return $this->getProperty('applicationCategory');
    }
    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @see https://schema.org/countriesNotSupported
     * @param string|array $value
     * @return $this
     */
    public function countriesNotSupported($value)
    {
        $this->setProperty('countriesNotSupported', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCountriesNotSupported($value)
    {
        $this->setProperty('countriesNotSupported', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCountriesNotSupported($value)
    {
        $current = $this->getProperty('countriesNotSupported');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countriesNotSupported', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCountriesNotSupported()
    {
        return $this->getProperty('countriesNotSupported');
    }
    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @see https://schema.org/device
     * @param string|array $value
     * @return $this
     */
    public function device($value)
    {
        $this->setProperty('device', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDevice($value)
    {
        $this->setProperty('device', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDevice($value)
    {
        $current = $this->getProperty('device');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('device', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDevice()
    {
        return $this->getProperty('device');
    }
    /**
     * Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
     * @see https://schema.org/runtimePlatform
     * @param RuntimePlatform|string|array $value
     * @return $this
     */
    public function runtimePlatform($value)
    {
        $this->setProperty('runtimePlatform', $value);
        return $this;
    }

    /**
     * @param RuntimePlatform|string|array $value
     * @return $this
     */
    public function setRuntimePlatform($value)
    {
        $this->setProperty('runtimePlatform', $value);
        return $this;
    }

    /**
     * @param RuntimePlatform|string $value
     * @return $this
     */
    public function addRuntimePlatform($value)
    {
        $current = $this->getProperty('runtimePlatform');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('runtimePlatform', $current);
        return $this;
    }

    /**
     * @return RuntimePlatform|string|array
     */
    public function getRuntimePlatform()
    {
        return $this->getProperty('runtimePlatform');
    }
    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
     * @see https://schema.org/permissions
     * @param string|array $value
     * @return $this
     */
    public function permissions($value)
    {
        $this->setProperty('permissions', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPermissions($value)
    {
        $this->setProperty('permissions', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPermissions($value)
    {
        $current = $this->getProperty('permissions');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('permissions', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPermissions()
    {
        return $this->getProperty('permissions');
    }
    /**
     * Supporting data for a SoftwareApplication.
     * @see https://schema.org/supportingData
     * @param DataFeed|array $value
     * @return $this
     */
    public function supportingData($value)
    {
        $this->setProperty('supportingData', $value);
        return $this;
    }

    /**
     * @param DataFeed|array $value
     * @return $this
     */
    public function setSupportingData($value)
    {
        $this->setProperty('supportingData', $value);
        return $this;
    }

    /**
     * @param DataFeed $value
     * @return $this
     */
    public function addSupportingData($value)
    {
        $current = $this->getProperty('supportingData');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('supportingData', $current);
        return $this;
    }

    /**
     * @return DataFeed|array
     */
    public function getSupportingData()
    {
        return $this->getProperty('supportingData');
    }
    /**
     * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
     * @see https://schema.org/operatingSystem
     * @param OperatingSystem|string|array $value
     * @return $this
     */
    public function operatingSystem($value)
    {
        $this->setProperty('operatingSystem', $value);
        return $this;
    }

    /**
     * @param OperatingSystem|string|array $value
     * @return $this
     */
    public function setOperatingSystem($value)
    {
        $this->setProperty('operatingSystem', $value);
        return $this;
    }

    /**
     * @param OperatingSystem|string $value
     * @return $this
     */
    public function addOperatingSystem($value)
    {
        $current = $this->getProperty('operatingSystem');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('operatingSystem', $current);
        return $this;
    }

    /**
     * @return OperatingSystem|string|array
     */
    public function getOperatingSystem()
    {
        return $this->getProperty('operatingSystem');
    }
    /**
     * If the file can be downloaded, URL to download the binary.
     * @see https://schema.org/downloadUrl
     * @param string|array $value
     * @return $this
     */
    public function downloadUrl($value)
    {
        $this->setProperty('downloadUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDownloadUrl($value)
    {
        $this->setProperty('downloadUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDownloadUrl($value)
    {
        $current = $this->getProperty('downloadUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('downloadUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDownloadUrl()
    {
        return $this->getProperty('downloadUrl');
    }
    /**
     * A link to a screenshot image of the app.
     * @see https://schema.org/screenshot
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function screenshot($value)
    {
        $this->setProperty('screenshot', $value);
        return $this;
    }

    /**
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function setScreenshot($value)
    {
        $this->setProperty('screenshot', $value);
        return $this;
    }

    /**
     * @param string|ImageObject $value
     * @return $this
     */
    public function addScreenshot($value)
    {
        $current = $this->getProperty('screenshot');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('screenshot', $current);
        return $this;
    }

    /**
     * @return string|ImageObject|array
     */
    public function getScreenshot()
    {
        return $this->getProperty('screenshot');
    }
    /**
     * Additional content for a software application.
     * @see https://schema.org/softwareAddOn
     * @param SoftwareApplication|array $value
     * @return $this
     */
    public function softwareAddOn($value)
    {
        $this->setProperty('softwareAddOn', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication|array $value
     * @return $this
     */
    public function setSoftwareAddOn($value)
    {
        $this->setProperty('softwareAddOn', $value);
        return $this;
    }

    /**
     * @param SoftwareApplication $value
     * @return $this
     */
    public function addSoftwareAddOn($value)
    {
        $current = $this->getProperty('softwareAddOn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('softwareAddOn', $current);
        return $this;
    }

    /**
     * @return SoftwareApplication|array
     */
    public function getSoftwareAddOn()
    {
        return $this->getProperty('softwareAddOn');
    }
    /**
     * Processor architecture required to run the application (e.g. IA64).
     * @see https://schema.org/processorRequirements
     * @param string|array $value
     * @return $this
     */
    public function processorRequirements($value)
    {
        $this->setProperty('processorRequirements', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setProcessorRequirements($value)
    {
        $this->setProperty('processorRequirements', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addProcessorRequirements($value)
    {
        $current = $this->getProperty('processorRequirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('processorRequirements', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getProcessorRequirements()
    {
        return $this->getProperty('processorRequirements');
    }
    /**
     * URL at which the app may be installed, if different from the URL of the item.
     * @see https://schema.org/installUrl
     * @param string|array $value
     * @return $this
     */
    public function installUrl($value)
    {
        $this->setProperty('installUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setInstallUrl($value)
    {
        $this->setProperty('installUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addInstallUrl($value)
    {
        $current = $this->getProperty('installUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('installUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getInstallUrl()
    {
        return $this->getProperty('installUrl');
    }
    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     * @see https://schema.org/availableOnDevice
     * @param string|array $value
     * @return $this
     */
    public function availableOnDevice($value)
    {
        $this->setProperty('availableOnDevice', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAvailableOnDevice($value)
    {
        $this->setProperty('availableOnDevice', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAvailableOnDevice($value)
    {
        $current = $this->getProperty('availableOnDevice');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableOnDevice', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAvailableOnDevice()
    {
        return $this->getProperty('availableOnDevice');
    }
    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @see https://schema.org/countriesSupported
     * @param string|array $value
     * @return $this
     */
    public function countriesSupported($value)
    {
        $this->setProperty('countriesSupported', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCountriesSupported($value)
    {
        $this->setProperty('countriesSupported', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCountriesSupported($value)
    {
        $current = $this->getProperty('countriesSupported');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countriesSupported', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCountriesSupported()
    {
        return $this->getProperty('countriesSupported');
    }
}
