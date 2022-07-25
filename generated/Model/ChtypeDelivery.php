<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeDelivery
{
    /**
     * 
     *
     * @var string
     */
    protected $standard = 'DELIVERY_STANDARD_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $type = 'DELIVERY_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $trackingCode;
    /**
     * 
     *
     * @var string
     */
    protected $courier;
    /**
     * 
     *
     * @return string
     */
    public function getStandard() : string
    {
        return $this->standard;
    }
    /**
     * 
     *
     * @param string $standard
     *
     * @return self
     */
    public function setStandard(string $standard) : self
    {
        $this->standard = $standard;
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
    public function getTrackingCode() : string
    {
        return $this->trackingCode;
    }
    /**
     * 
     *
     * @param string $trackingCode
     *
     * @return self
     */
    public function setTrackingCode(string $trackingCode) : self
    {
        $this->trackingCode = $trackingCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCourier() : string
    {
        return $this->courier;
    }
    /**
     * 
     *
     * @param string $courier
     *
     * @return self
     */
    public function setCourier(string $courier) : self
    {
        $this->courier = $courier;
        return $this;
    }
}