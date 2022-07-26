<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRefundResponse implements \JsonSerializable
{
    /**
     * 
     *
     * @var bool
     */
    protected $acknowledged;
    /**
     * 
     *
     * @var string
     */
    protected $processId;
    /**
     * 
     *
     * @return bool
     */
    public function getAcknowledged()
    {
        return $this->acknowledged;
    }
    /**
     * 
     *
     * @param bool $acknowledged
     *
     * @return self
     */
    public function setAcknowledged(bool $acknowledged)
    {
        $this->acknowledged = $acknowledged;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProcessId()
    {
        return $this->processId;
    }
    /**
     * 
     *
     * @param string $processId
     *
     * @return self
     */
    public function setProcessId(string $processId)
    {
        $this->processId = $processId;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['acknowledged' => $this->acknowledged, 'processId' => $this->processId];
    }
}