<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUpdateResponse
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
    /**
     * 
     *
     * @return ChtypePaymentMethodInfo
     */
    public function getInfo() : ChtypePaymentMethodInfo
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
    public function setInfo(ChtypePaymentMethodInfo $info) : self
    {
        $this->info = $info;
        return $this;
    }
}