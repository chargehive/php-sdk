<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUnlockResponse implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return ['acknowledged' => $this->acknowledged];
    }
}