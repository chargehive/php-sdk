<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodLockRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $methodId;
    /**
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @var string
     */
    protected $duration;
    /**
     * 
     *
     * @return string
     */
    public function getMethodId()
    {
        return $this->methodId;
    }
    /**
     * 
     *
     * @param string $methodId
     *
     * @return self
     */
    public function setMethodId(string $methodId)
    {
        $this->methodId = $methodId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration)
    {
        $this->duration = $duration;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['methodId' => $this->methodId, 'reason' => $this->reason, 'duration' => $this->duration];
    }
}