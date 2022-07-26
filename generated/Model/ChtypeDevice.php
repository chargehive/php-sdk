<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeDevice implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $browserAcceptHeader;
    /**
     * 
     *
     * @var int
     */
    protected $colorDepth;
    /**
     * 
     *
     * @var bool
     */
    protected $javaEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $javascriptEnabled;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var ChtypeDimension
     */
    protected $screen;
    /**
     * 
     *
     * @var ChtypeDimension
     */
    protected $screenAvailable;
    /**
     * 
     *
     * @var ChtypeDimension
     */
    protected $windowInner;
    /**
     * 
     *
     * @var ChtypeDimension
     */
    protected $windowOuter;
    /**
     * 
     *
     * @var int
     */
    protected $timezoneOffsetMins;
    /**
     * 
     *
     * @var string
     */
    protected $userAgent;
    /**
     * 
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * 
     *
     * @var bool
     */
    protected $cookiesEnabled;
    /**
     * 
     *
     * @var string
     */
    protected $flashVersion;
    /**
     * 
     *
     * @var bool
     */
    protected $isTouch;
    /**
     * 
     *
     * @var string
     */
    protected $os;
    /**
     * 
     *
     * @var string
     */
    protected $osVersion;
    /**
     * 
     *
     * @var string
     */
    protected $browser;
    /**
     * 
     *
     * @var string
     */
    protected $browserVersion;
    /**
     * 
     *
     * @var string
     */
    protected $deviceManufacturer;
    /**
     * 
     *
     * @var string
     */
    protected $deviceName;
    /**
     * 
     *
     * @var string
     */
    protected $deviceVersion;
    /**
     * 
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'DEVICE_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $timezone;
    /**
     * 
     *
     * @return string
     */
    public function getBrowserAcceptHeader()
    {
        return $this->browserAcceptHeader;
    }
    /**
     * 
     *
     * @param string $browserAcceptHeader
     *
     * @return self
     */
    public function setBrowserAcceptHeader(string $browserAcceptHeader)
    {
        $this->browserAcceptHeader = $browserAcceptHeader;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getColorDepth()
    {
        return $this->colorDepth;
    }
    /**
     * 
     *
     * @param int $colorDepth
     *
     * @return self
     */
    public function setColorDepth(int $colorDepth)
    {
        $this->colorDepth = $colorDepth;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getJavaEnabled()
    {
        return $this->javaEnabled;
    }
    /**
     * 
     *
     * @param bool $javaEnabled
     *
     * @return self
     */
    public function setJavaEnabled(bool $javaEnabled)
    {
        $this->javaEnabled = $javaEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getJavascriptEnabled()
    {
        return $this->javascriptEnabled;
    }
    /**
     * 
     *
     * @param bool $javascriptEnabled
     *
     * @return self
     */
    public function setJavascriptEnabled(bool $javascriptEnabled)
    {
        $this->javascriptEnabled = $javascriptEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getScreen()
    {
        return $this->screen;
    }
    /**
     * 
     *
     * @param ChtypeDimension $screen
     *
     * @return self
     */
    public function setScreen(ChtypeDimension $screen)
    {
        $this->screen = $screen;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getScreenAvailable()
    {
        return $this->screenAvailable;
    }
    /**
     * 
     *
     * @param ChtypeDimension $screenAvailable
     *
     * @return self
     */
    public function setScreenAvailable(ChtypeDimension $screenAvailable)
    {
        $this->screenAvailable = $screenAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getWindowInner()
    {
        return $this->windowInner;
    }
    /**
     * 
     *
     * @param ChtypeDimension $windowInner
     *
     * @return self
     */
    public function setWindowInner(ChtypeDimension $windowInner)
    {
        $this->windowInner = $windowInner;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getWindowOuter()
    {
        return $this->windowOuter;
    }
    /**
     * 
     *
     * @param ChtypeDimension $windowOuter
     *
     * @return self
     */
    public function setWindowOuter(ChtypeDimension $windowOuter)
    {
        $this->windowOuter = $windowOuter;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimezoneOffsetMins()
    {
        return $this->timezoneOffsetMins;
    }
    /**
     * 
     *
     * @param int $timezoneOffsetMins
     *
     * @return self
     */
    public function setTimezoneOffsetMins(int $timezoneOffsetMins)
    {
        $this->timezoneOffsetMins = $timezoneOffsetMins;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }
    /**
     * 
     *
     * @param string $userAgent
     *
     * @return self
     */
    public function setUserAgent(string $userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    /**
     * 
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCookiesEnabled()
    {
        return $this->cookiesEnabled;
    }
    /**
     * 
     *
     * @param bool $cookiesEnabled
     *
     * @return self
     */
    public function setCookiesEnabled(bool $cookiesEnabled)
    {
        $this->cookiesEnabled = $cookiesEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFlashVersion()
    {
        return $this->flashVersion;
    }
    /**
     * 
     *
     * @param string $flashVersion
     *
     * @return self
     */
    public function setFlashVersion(string $flashVersion)
    {
        $this->flashVersion = $flashVersion;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsTouch()
    {
        return $this->isTouch;
    }
    /**
     * 
     *
     * @param bool $isTouch
     *
     * @return self
     */
    public function setIsTouch(bool $isTouch)
    {
        $this->isTouch = $isTouch;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * 
     *
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os)
    {
        $this->os = $os;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }
    /**
     * 
     *
     * @param string $osVersion
     *
     * @return self
     */
    public function setOsVersion(string $osVersion)
    {
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }
    /**
     * 
     *
     * @param string $browser
     *
     * @return self
     */
    public function setBrowser(string $browser)
    {
        $this->browser = $browser;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrowserVersion()
    {
        return $this->browserVersion;
    }
    /**
     * 
     *
     * @param string $browserVersion
     *
     * @return self
     */
    public function setBrowserVersion(string $browserVersion)
    {
        $this->browserVersion = $browserVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceManufacturer()
    {
        return $this->deviceManufacturer;
    }
    /**
     * 
     *
     * @param string $deviceManufacturer
     *
     * @return self
     */
    public function setDeviceManufacturer(string $deviceManufacturer)
    {
        $this->deviceManufacturer = $deviceManufacturer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }
    /**
     * 
     *
     * @param string $deviceName
     *
     * @return self
     */
    public function setDeviceName(string $deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceVersion()
    {
        return $this->deviceVersion;
    }
    /**
     * 
     *
     * @param string $deviceVersion
     *
     * @return self
     */
    public function setDeviceVersion(string $deviceVersion)
    {
        $this->deviceVersion = $deviceVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    /**
     * 
     *
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(string $fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
    /**
     * 
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['browserAcceptHeader' => $this->browserAcceptHeader, 'colorDepth' => $this->colorDepth, 'javaEnabled' => $this->javaEnabled, 'javascriptEnabled' => $this->javascriptEnabled, 'language' => $this->language, 'screen' => $this->screen, 'screenAvailable' => $this->screenAvailable, 'windowInner' => $this->windowInner, 'windowOuter' => $this->windowOuter, 'timezoneOffsetMins' => $this->timezoneOffsetMins, 'userAgent' => $this->userAgent, 'ipAddress' => $this->ipAddress, 'cookiesEnabled' => $this->cookiesEnabled, 'flashVersion' => $this->flashVersion, 'isTouch' => $this->isTouch, 'os' => $this->os, 'osVersion' => $this->osVersion, 'browser' => $this->browser, 'browserVersion' => $this->browserVersion, 'deviceManufacturer' => $this->deviceManufacturer, 'deviceName' => $this->deviceName, 'deviceVersion' => $this->deviceVersion, 'fingerprint' => $this->fingerprint, 'type' => $this->type, 'timezone' => $this->timezone];
    }
}