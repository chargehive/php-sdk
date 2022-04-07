<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodTokenizeResponse implements \JsonSerializable
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
    public function getSuccess()
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
    public function setSuccess(bool $success)
    {
        $this->success = $success;
        return $this;
    }
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
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalData()
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
    public function setAdditionalData(\ArrayObject $additionalData)
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerMessage()
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
    public function setCustomerMessage(string $customerMessage)
    {
        $this->customerMessage = $customerMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantMessage()
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
    public function setMerchantMessage(string $merchantMessage)
    {
        $this->merchantMessage = $merchantMessage;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehivePCIBTokenizeResponse
     */
    public function getTokenizeResponse()
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
    public function setTokenizeResponse(ChargehivePCIBTokenizeResponse $tokenizeResponse)
    {
        $this->tokenizeResponse = $tokenizeResponse;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['success' => $this->success, 'token' => $this->token, 'info' => $this->info, 'additionalData' => $this->additionalData, 'customerMessage' => $this->customerMessage, 'merchantMessage' => $this->merchantMessage, 'tokenizeResponse' => $this->tokenizeResponse];
    }
}