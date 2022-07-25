<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUpdateRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var ChtypePaymentMethod
     */
    protected $paymentMethodUpdates;
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethod
     */
    public function getPaymentMethodUpdates() : ChtypePaymentMethod
    {
        return $this->paymentMethodUpdates;
    }
    /**
     * 
     *
     * @param ChtypePaymentMethod $paymentMethodUpdates
     *
     * @return self
     */
    public function setPaymentMethodUpdates(ChtypePaymentMethod $paymentMethodUpdates) : self
    {
        $this->paymentMethodUpdates = $paymentMethodUpdates;
        return $this;
    }
}