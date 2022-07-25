<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodTokenizeResponse
{
    /**
     * 
     *
     * @var bool
     */
    protected $success;
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var ChtypePaymentMethodInfo
     */
    protected $info;
    /**
     * 
     *
     * @var string[]
     */
    protected $additionalData;
    /**
     * 
     *
     * @var string
     */
    protected $customerMessage;
    /**
     * 
     *
     * @var string
     */
    protected $merchantMessage;
    /**
     * 
     *
     * @var ChargehivePCIBTokenizeResponse
     */
    protected $tokenizeResponse;
    /**
     * 
     *
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success) : self
    {
        $this->success = $success;
        return $this;
    }
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
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalData() : \ArrayObject
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param string[] $additionalData
     *
     * @return self
     */
    public function setAdditionalData(\ArrayObject $additionalData) : self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerMessage() : string
    {
        return $this->customerMessage;
    }
    /**
     * 
     *
     * @param string $customerMessage
     *
     * @return self
     */
    public function setCustomerMessage(string $customerMessage) : self
    {
        $this->customerMessage = $customerMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantMessage() : string
    {
        return $this->merchantMessage;
    }
    /**
     * 
     *
     * @param string $merchantMessage
     *
     * @return self
     */
    public function setMerchantMessage(string $merchantMessage) : self
    {
        $this->merchantMessage = $merchantMessage;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehivePCIBTokenizeResponse
     */
    public function getTokenizeResponse() : ChargehivePCIBTokenizeResponse
    {
        return $this->tokenizeResponse;
    }
    /**
     * 
     *
     * @param ChargehivePCIBTokenizeResponse $tokenizeResponse
     *
     * @return self
     */
    public function setTokenizeResponse(ChargehivePCIBTokenizeResponse $tokenizeResponse) : self
    {
        $this->tokenizeResponse = $tokenizeResponse;
        return $this;
    }
}