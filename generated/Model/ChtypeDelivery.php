<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeDelivery implements \JsonSerializable
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
    public function getStandard()
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
    public function setStandard(string $standard)
    {
        $this->standard = $standard;
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
    public function getTrackingCode()
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
    public function setTrackingCode(string $trackingCode)
    {
        $this->trackingCode = $trackingCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCourier()
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
    public function setCourier(string $courier)
    {
        $this->courier = $courier;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['standard' => $this->standard, 'type' => $this->type, 'trackingCode' => $this->trackingCode, 'courier' => $this->courier];
    }
}