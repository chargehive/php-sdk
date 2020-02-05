<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveSchedulerOnDemandTriggerResponse implements \JsonSerializable
{
    /**
     * 
     *
     * @var bool
     */
    protected $triggered;
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
    public function getTriggered()
    {
        return $this->triggered;
    }
    /**
     * 
     *
     * @param bool $triggered
     *
     * @return self
     */
    public function setTriggered(bool $triggered)
    {
        $this->triggered = $triggered;
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
        return ['triggered' => $this->triggered, 'message' => $this->message];
    }
}