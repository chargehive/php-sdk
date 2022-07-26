<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUpdateResponse implements \JsonSerializable
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
     * @var ChtypePaymentMethodInfo
     */
    protected $info;
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
     * @return ChtypePaymentMethodInfo
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param ChtypePaymentMethodInfo $info
     *
     * @return self
     */
    public function setInfo(ChtypePaymentMethodInfo $info)
    {
        $this->info = $info;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['acknowledged' => $this->acknowledged, 'info' => $this->info];
    }
}