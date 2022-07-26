<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeAuthorizeRequest implements \JsonSerializable
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
    public function getChargeId()
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
    public function setChargeId(string $chargeId)
    {
        $this->chargeId = $chargeId;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId];
    }
}