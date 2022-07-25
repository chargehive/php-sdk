<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRefundResponse
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
    public function getAcknowledged() : bool
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
    public function setAcknowledged(bool $acknowledged) : self
    {
        $this->acknowledged = $acknowledged;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProcessId() : string
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
    public function setProcessId(string $processId) : self
    {
        $this->processId = $processId;
        return $this;
    }
}