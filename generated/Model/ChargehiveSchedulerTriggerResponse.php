<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveSchedulerTriggerResponse
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
    public function getTriggered() : bool
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
    public function setTriggered(bool $triggered) : self
    {
        $this->triggered = $triggered;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
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
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}