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
     * @var ChtypePaymentMethodVerificationItem[]
     */
    protected $paymentMethodVerification;
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
    /**
     * 
     *
     * @return ChtypePaymentMethodVerificationItem[]
     */
    public function getPaymentMethodVerification()
    {
        return $this->paymentMethodVerification;
    }
    /**
     * 
     *
     * @param ChtypePaymentMethodVerificationItem[] $paymentMethodVerification
     *
     * @return self
     */
    public function setPaymentMethodVerification(array $paymentMethodVerification)
    {
        $this->paymentMethodVerification = $paymentMethodVerification;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'paymentMethodVerification' => $this->paymentMethodVerification];
    }
}