<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A software application.
* @see schema:SoftwareApplication
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class SoftwareApplication extends CreativeWork
{
   /**
        * Minimum memory requirements.
        */
    protected $memoryRequirements = null;

   /**
        * URL at which the app may be installed, if different from the URL of the item.
        */
    protected $installUrl = null;

   /**
        * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
        */
    protected $countriesSupported = null;

   /**
        * Description of what changed in this version.
        */
    protected $releaseNotes = null;

   /**
        * Subcategory of the application, e.g. 'Arcade Game'.
        */
    protected $applicationSubCategory = null;

   /**
        * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
        */
    protected $permissions = null;

   /**
        * Type of software application, e.g. 'Game, Multimedia'.
        */
    protected $applicationCategory = null;

   /**
        * Device required to run the application. Used in cases where a specific make/model is required to run the application.
        */
    protected $device = null;

   /**
        * Supporting data for a SoftwareApplication.
        */
    protected $supportingData = null;

   /**
        * Operating systems supported (Windows 7, OS X 10.6, Android 1.6).
        */
    protected $operatingSystem = null;

   /**
        * Device required to run the application. Used in cases where a specific make/model is required to run the application.
        */
    protected $availableOnDevice = null;

   /**
        * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
        */
    protected $countriesNotSupported = null;

   /**
        * Storage requirements (free space required).
        */
    protected $storageRequirements = null;

   /**
        * If the file can be downloaded, URL to download the binary.
        */
    protected $downloadUrl = null;

   /**
        * A link to a screenshot image of the app.
        */
    protected $screenshot = null;

   /**
        * Software application help.
        */
    protected $softwareHelp = null;

   /**
        * Features or modules provided by this application (and possibly required by other applications).
        */
    protected $featureList = null;

   /**
        * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
        */
    protected $applicationSuite = null;

   /**
        * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
        */
    protected $requirements = null;

   /**
        * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).
        */
    protected $softwareRequirements = null;

   /**
        * Version of the software instance.
        */
    protected $softwareVersion = null;

   /**
        * Processor architecture required to run the application (e.g. IA64).
        */
    protected $processorRequirements = null;

   /**
        * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
        */
    protected $fileSize = null;

   /**
        * Additional content for a software application.
        */
    protected $softwareAddOn = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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


}
