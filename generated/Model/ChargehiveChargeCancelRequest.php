<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCancelRequest implements \JsonSerializable
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
     * @var ChtypeReason
     */
    protected $reason;
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
     * @return ChtypeReason
     */
    public function getReason()
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param ChtypeReason $reason
     *
     * @return self
     */
    public function setReason(ChtypeReason $reason)
    {
        $this->reason = $reason;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'reason' => $this->reason];
    }
}