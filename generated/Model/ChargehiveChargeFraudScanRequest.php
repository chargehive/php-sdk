<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeFraudScanRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
    /**
     * 
     *
     * @var string[]
     */
    protected $additionalData;
    /**
     * 
     *
     * @return string
     */
    public function getChargeId() : string
    {
        return $this->chargeId;
    }
    /**
     * 
     *
     * @param string $chargeId
     *
     * @return self
     */
    public function setChargeId(string $chargeId) : self
    {
        $this->chargeId = $chargeId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalData() : \ArrayObject
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param string[] $additionalData
     *
     * @return self
     */
    public function setAdditionalData(\ArrayObject $additionalData) : self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
}