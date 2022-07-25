<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeDevice
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
    public function getBrowserAcceptHeader() : string
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
    public function setBrowserAcceptHeader(string $browserAcceptHeader) : self
    {
        $this->browserAcceptHeader = $browserAcceptHeader;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getColorDepth() : int
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
    public function setColorDepth(int $colorDepth) : self
    {
        $this->colorDepth = $colorDepth;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getJavaEnabled() : bool
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
    public function setJavaEnabled(bool $javaEnabled) : self
    {
        $this->javaEnabled = $javaEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getJavascriptEnabled() : bool
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
    public function setJavascriptEnabled(bool $javascriptEnabled) : self
    {
        $this->javascriptEnabled = $javascriptEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
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
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getScreen() : ChtypeDimension
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
    public function setScreen(ChtypeDimension $screen) : self
    {
        $this->screen = $screen;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getScreenAvailable() : ChtypeDimension
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
    public function setScreenAvailable(ChtypeDimension $screenAvailable) : self
    {
        $this->screenAvailable = $screenAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getWindowInner() : ChtypeDimension
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
    public function setWindowInner(ChtypeDimension $windowInner) : self
    {
        $this->windowInner = $windowInner;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDimension
     */
    public function getWindowOuter() : ChtypeDimension
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
    public function setWindowOuter(ChtypeDimension $windowOuter) : self
    {
        $this->windowOuter = $windowOuter;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimezoneOffsetMins() : int
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
    public function setTimezoneOffsetMins(int $timezoneOffsetMins) : self
    {
        $this->timezoneOffsetMins = $timezoneOffsetMins;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserAgent() : string
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
    public function setUserAgent(string $userAgent) : self
    {
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIpAddress() : string
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
    public function setIpAddress(string $ipAddress) : self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCookiesEnabled() : bool
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
    public function setCookiesEnabled(bool $cookiesEnabled) : self
    {
        $this->cookiesEnabled = $cookiesEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFlashVersion() : string
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
    public function setFlashVersion(string $flashVersion) : self
    {
        $this->flashVersion = $flashVersion;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsTouch() : bool
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
    public function setIsTouch(bool $isTouch) : self
    {
        $this->isTouch = $isTouch;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOs() : string
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
    public function setOs(string $os) : self
    {
        $this->os = $os;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOsVersion() : string
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
    public function setOsVersion(string $osVersion) : self
    {
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrowser() : string
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
    public function setBrowser(string $browser) : self
    {
        $this->browser = $browser;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrowserVersion() : string
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
    public function setBrowserVersion(string $browserVersion) : self
    {
        $this->browserVersion = $browserVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceManufacturer() : string
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
    public function setDeviceManufacturer(string $deviceManufacturer) : self
    {
        $this->deviceManufacturer = $deviceManufacturer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceName() : string
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
    public function setDeviceName(string $deviceName) : self
    {
        $this->deviceName = $deviceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeviceVersion() : string
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
    public function setDeviceVersion(string $deviceVersion) : self
    {
        $this->deviceVersion = $deviceVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFingerprint() : string
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
    public function setFingerprint(string $fingerprint) : self
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
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
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimezone() : string
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
    public function setTimezone(string $timezone) : self
    {
        $this->timezone = $timezone;
        return $this;
    }
}