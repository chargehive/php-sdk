<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeFraudScanRequest implements \JsonSerializable
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
    public function getChargeId()
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
    public function setChargeId(string $chargeId)
    {
        $this->chargeId = $chargeId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalData()
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
    public function setAdditionalData(\ArrayObject $additionalData)
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'additionalData' => $this->additionalData];
    }
}