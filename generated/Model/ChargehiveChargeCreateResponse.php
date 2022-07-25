<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCreateResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
    /**
     * 
     *
     * @return string
     */
    public function getChargeId() : string
    {
        return $this->chargeId;
    }
    /**
     * 
     *
     * @param string $chargeId
     *
     * @return self
     */
    public function setChargeId(string $chargeId) : self
    {
        $this->chargeId = $chargeId;
        return $this;
    }
}