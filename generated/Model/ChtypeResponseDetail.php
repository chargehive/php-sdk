<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeResponseDetail
{
    /**
     * 
     *
     * @var string
     */
    protected $responseCode;
    /**
     * 
     *
     * @var string
     */
    protected $consumerMessage;
    /**
     * 
     *
     * @var string
     */
    protected $merchantMessage;
    /**
     * 
     *
     * @var string
     */
    protected $failureType = 'FAILURE_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $category = 'RESPONSE_CATEGORY_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $errorType = 'RESPONSE_ERROR_INVALID';
    /**
     * 
     *
     * @var string[]
     */
    protected $errorProperties;
    /**
     * 
     *
     * @var string
     */
    protected $originatingCode;
    /**
     * 
     *
     * @var ChtypeResponseDetail[]
     */
    protected $specificErrors;
    /**
     * 
     *
     * @return string
     */
    public function getResponseCode() : string
    {
        return $this->responseCode;
    }
    /**
     * 
     *
     * @param string $responseCode
     *
     * @return self
     */
    public function setResponseCode(string $responseCode) : self
    {
        $this->responseCode = $responseCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConsumerMessage() : string
    {
        return $this->consumerMessage;
    }
    /**
     * 
     *
     * @param string $consumerMessage
     *
     * @return self
     */
    public function setConsumerMessage(string $consumerMessage) : self
    {
        $this->consumerMessage = $consumerMessage;
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
     * @return string
     */
    public function getFailureType() : string
    {
        return $this->failureType;
    }
    /**
     * 
     *
     * @param string $failureType
     *
     * @return self
     */
    public function setFailureType(string $failureType) : self
    {
        $this->failureType = $failureType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getErrorType() : string
    {
        return $this->errorType;
    }
    /**
     * 
     *
     * @param string $errorType
     *
     * @return self
     */
    public function setErrorType(string $errorType) : self
    {
        $this->errorType = $errorType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getErrorProperties() : \ArrayObject
    {
        return $this->errorProperties;
    }
    /**
     * 
     *
     * @param string[] $errorProperties
     *
     * @return self
     */
    public function setErrorProperties(\ArrayObject $errorProperties) : self
    {
        $this->errorProperties = $errorProperties;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOriginatingCode() : string
    {
        return $this->originatingCode;
    }
    /**
     * 
     *
     * @param string $originatingCode
     *
     * @return self
     */
    public function setOriginatingCode(string $originatingCode) : self
    {
        $this->originatingCode = $originatingCode;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeResponseDetail[]
     */
    public function getSpecificErrors() : array
    {
        return $this->specificErrors;
    }
    /**
     * 
     *
     * @param ChtypeResponseDetail[] $specificErrors
     *
     * @return self
     */
    public function setSpecificErrors(array $specificErrors) : self
    {
        $this->specificErrors = $specificErrors;
        return $this;
    }
}