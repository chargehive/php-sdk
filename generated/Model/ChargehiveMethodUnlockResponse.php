<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUnlockResponse
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
}