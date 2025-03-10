<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset\DataFeed;

/**
* A software application.
* @see http://schema.org/SoftwareApplication
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class SoftwareApplication extends CreativeWork
{


    /**
        * Permission(s) required to run the app (for example, a mobile app may require
 * full internet access or may run only on wifi).
        * @param string|array|mixed $value
    * @return $this
    */
    public function permissions($value)
    {
        $this->setProperty('permissions', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPermissions($value)
    {
        $this->setProperty('permissions', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPermissions()
    {
       return $this->getProperty('permissions');
    }


    /**
        * Processor architecture required to run the application (e.g. IA64).
        * @param string|array|mixed $value
    * @return $this
    */
    public function processorRequirements($value)
    {
        $this->setProperty('processorRequirements', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setProcessorRequirements($value)
    {
        $this->setProperty('processorRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProcessorRequirements()
    {
       return $this->getProperty('processorRequirements');
    }


    /**
        * Device required to run the application. Used in cases where a specific
 * make/model is required to run the application.
        * @param string|array|mixed $value
    * @return $this
    */
    public function availableOnDevice($value)
    {
        $this->setProperty('availableOnDevice', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setAvailableOnDevice($value)
    {
        $this->setProperty('availableOnDevice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableOnDevice()
    {
       return $this->getProperty('availableOnDevice');
    }


    /**
        * If the file can be downloaded, URL to download the binary.
        * @param string|array|mixed $value
    * @return $this
    */
    public function downloadUrl($value)
    {
        $this->setProperty('downloadUrl', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setDownloadUrl($value)
    {
        $this->setProperty('downloadUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDownloadUrl()
    {
       return $this->getProperty('downloadUrl');
    }


    /**
        * Subcategory of the application, e.g. 'Arcade Game'.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function applicationSubCategory($value)
    {
        $this->setProperty('applicationSubCategory', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setApplicationSubCategory($value)
    {
        $this->setProperty('applicationSubCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicationSubCategory()
    {
       return $this->getProperty('applicationSubCategory');
    }


    /**
        * Component dependency requirements for application. This includes runtime
 * environments and shared libraries that are not included in the application
 * distribution package, but required to run the application (Examples: DirectX,
 * Java or .NET runtime).
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function requirements($value)
    {
        $this->setProperty('requirements', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setRequirements($value)
    {
        $this->setProperty('requirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequirements()
    {
       return $this->getProperty('requirements');
    }


    /**
        * Device required to run the application. Used in cases where a specific
 * make/model is required to run the application.
        * @param string|array|mixed $value
    * @return $this
    */
    public function device($value)
    {
        $this->setProperty('device', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setDevice($value)
    {
        $this->setProperty('device', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDevice()
    {
       return $this->getProperty('device');
    }


    /**
        * Type of software application, e.g. 'Game, Multimedia'.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function applicationCategory($value)
    {
        $this->setProperty('applicationCategory', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setApplicationCategory($value)
    {
        $this->setProperty('applicationCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicationCategory()
    {
       return $this->getProperty('applicationCategory');
    }


    /**
        * Version of the software instance.
        * @param string|array|mixed $value
    * @return $this
    */
    public function softwareVersion($value)
    {
        $this->setProperty('softwareVersion', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSoftwareVersion($value)
    {
        $this->setProperty('softwareVersion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSoftwareVersion()
    {
       return $this->getProperty('softwareVersion');
    }


    /**
        * Features or modules provided by this application (and possibly required by
 * other applications).
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function featureList($value)
    {
        $this->setProperty('featureList', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setFeatureList($value)
    {
        $this->setProperty('featureList', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFeatureList()
    {
       return $this->getProperty('featureList');
    }


    /**
        * Storage requirements (free space required).
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function storageRequirements($value)
    {
        $this->setProperty('storageRequirements', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setStorageRequirements($value)
    {
        $this->setProperty('storageRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStorageRequirements()
    {
       return $this->getProperty('storageRequirements');
    }


    /**
        * The name of the application suite to which the application belongs (e.g.
 * Excel belongs to Office).
        * @param string|array|mixed $value
    * @return $this
    */
    public function applicationSuite($value)
    {
        $this->setProperty('applicationSuite', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setApplicationSuite($value)
    {
        $this->setProperty('applicationSuite', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicationSuite()
    {
       return $this->getProperty('applicationSuite');
    }


    /**
        * Minimum memory requirements.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function memoryRequirements($value)
    {
        $this->setProperty('memoryRequirements', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setMemoryRequirements($value)
    {
        $this->setProperty('memoryRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMemoryRequirements()
    {
       return $this->getProperty('memoryRequirements');
    }


    /**
        * A link to a screenshot image of the app.
        * @param ImageObject|string|array|mixed $value
    * @return $this
    */
    public function screenshot($value)
    {
        $this->setProperty('screenshot', $value);
        return $this;
    }

    /**
    * @param ImageObject|string|array|mixed $value
    * @return $this
    */
    public function setScreenshot($value)
    {
        $this->setProperty('screenshot', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getScreenshot()
    {
       return $this->getProperty('screenshot');
    }


    /**
        * Countries for which the application is supported. You can also provide the
 * two-letter ISO 3166-1 alpha-2 country code.
        * @param string|array|mixed $value
    * @return $this
    */
    public function countriesSupported($value)
    {
        $this->setProperty('countriesSupported', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCountriesSupported($value)
    {
        $this->setProperty('countriesSupported', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCountriesSupported()
    {
       return $this->getProperty('countriesSupported');
    }


    /**
        * Software application help.
        * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function softwareHelp($value)
    {
        $this->setProperty('softwareHelp', $value);
        return $this;
    }

    /**
    * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function setSoftwareHelp($value)
    {
        $this->setProperty('softwareHelp', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSoftwareHelp()
    {
       return $this->getProperty('softwareHelp');
    }


    /**
        * Additional content for a software application.
        * @param SoftwareApplication|array|string|mixed $value
    * @return $this
    */
    public function softwareAddOn($value)
    {
        $this->setProperty('softwareAddOn', $value);
        return $this;
    }

    /**
    * @param SoftwareApplication|array|string|mixed $value
    * @return $this
    */
    public function setSoftwareAddOn($value)
    {
        $this->setProperty('softwareAddOn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSoftwareAddOn()
    {
       return $this->getProperty('softwareAddOn');
    }


    /**
        * Description of what changed in this version.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function releaseNotes($value)
    {
        $this->setProperty('releaseNotes', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setReleaseNotes($value)
    {
        $this->setProperty('releaseNotes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReleaseNotes()
    {
       return $this->getProperty('releaseNotes');
    }


    /**
        * Supporting data for a SoftwareApplication.
        * @param DataFeed|array|string|mixed $value
    * @return $this
    */
    public function supportingData($value)
    {
        $this->setProperty('supportingData', $value);
        return $this;
    }

    /**
    * @param DataFeed|array|string|mixed $value
    * @return $this
    */
    public function setSupportingData($value)
    {
        $this->setProperty('supportingData', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSupportingData()
    {
       return $this->getProperty('supportingData');
    }


    /**
        * Component dependency requirements for application. This includes runtime
 * environments and shared libraries that are not included in the application
 * distribution package, but required to run the application (Examples: DirectX,
 * Java or .NET runtime).
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function softwareRequirements($value)
    {
        $this->setProperty('softwareRequirements', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setSoftwareRequirements($value)
    {
        $this->setProperty('softwareRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSoftwareRequirements()
    {
       return $this->getProperty('softwareRequirements');
    }


    /**
        * Countries for which the application is not supported. You can also provide
 * the two-letter ISO 3166-1 alpha-2 country code.
        * @param string|array|mixed $value
    * @return $this
    */
    public function countriesNotSupported($value)
    {
        $this->setProperty('countriesNotSupported', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCountriesNotSupported($value)
    {
        $this->setProperty('countriesNotSupported', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCountriesNotSupported()
    {
       return $this->getProperty('countriesNotSupported');
    }


    /**
        * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
        * @param string|array|mixed $value
    * @return $this
    */
    public function operatingSystem($value)
    {
        $this->setProperty('operatingSystem', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setOperatingSystem($value)
    {
        $this->setProperty('operatingSystem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOperatingSystem()
    {
       return $this->getProperty('operatingSystem');
    }


    /**
        * Size of the application / package (e.g. 18MB). In the absence of a unit (MB,
 * KB etc.), KB will be assumed.
        * @param string|array|mixed $value
    * @return $this
    */
    public function fileSize($value)
    {
        $this->setProperty('fileSize', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setFileSize($value)
    {
        $this->setProperty('fileSize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFileSize()
    {
       return $this->getProperty('fileSize');
    }


    /**
        * URL at which the app may be installed, if different from the URL of the item.
        * @param string|array|mixed $value
    * @return $this
    */
    public function installUrl($value)
    {
        $this->setProperty('installUrl', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setInstallUrl($value)
    {
        $this->setProperty('installUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInstallUrl()
    {
       return $this->getProperty('installUrl');
    }


}
