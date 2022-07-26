<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCaptureResponse implements \JsonSerializable
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
     * @var string
     */
    protected $message;
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
    /**
     * 
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['acknowledged' => $this->acknowledged, 'processId' => $this->processId, 'message' => $this->message];
    }
}