<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCancelRequest
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
     * @return ChtypeReason
     */
    public function getReason() : ChtypeReason
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
    public function setReason(ChtypeReason $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
}