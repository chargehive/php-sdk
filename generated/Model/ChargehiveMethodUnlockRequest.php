<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUnlockRequest
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
    public function getMethodId() : string
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
    public function setMethodId(string $methodId) : self
    {
        $this->methodId = $methodId;
        return $this;
    }
}