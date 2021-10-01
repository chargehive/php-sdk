<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUnlockRequest implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return ['methodId' => $this->methodId];
    }
}