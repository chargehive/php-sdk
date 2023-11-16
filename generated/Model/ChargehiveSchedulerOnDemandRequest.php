<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveSchedulerOnDemandRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $schedulerId;
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
    /**
     * 
     *
     * @return string
     */
    public function getSchedulerId()
    {
        return $this->schedulerId;
    }
    /**
     * 
     *
     * @param string $schedulerId
     *
     * @return self
     */
    public function setSchedulerId(string $schedulerId)
    {
        $this->schedulerId = $schedulerId;
        return $this;
    }
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
    public function jsonSerialize()
    {
        return ['schedulerId' => $this->schedulerId, 'chargeId' => $this->chargeId];
    }
}