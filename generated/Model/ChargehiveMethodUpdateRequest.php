<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodUpdateRequest implements \JsonSerializable
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
    public function getToken()
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
    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethod
     */
    public function getPaymentMethodUpdates()
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
    public function setPaymentMethodUpdates(ChtypePaymentMethod $paymentMethodUpdates)
    {
        $this->paymentMethodUpdates = $paymentMethodUpdates;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['token' => $this->token, 'paymentMethodUpdates' => $this->paymentMethodUpdates];
    }
}