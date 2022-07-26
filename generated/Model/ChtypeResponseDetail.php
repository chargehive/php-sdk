<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeResponseDetail implements \JsonSerializable
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
    public function getResponseCode()
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
    public function setResponseCode(string $responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConsumerMessage()
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
    public function setConsumerMessage(string $consumerMessage)
    {
        $this->consumerMessage = $consumerMessage;
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
     * @return string
     */
    public function getFailureType()
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
    public function setFailureType(string $failureType)
    {
        $this->failureType = $failureType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategory()
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
    public function setCategory(string $category)
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getErrorType()
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
    public function setErrorType(string $errorType)
    {
        $this->errorType = $errorType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getErrorProperties()
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
    public function setErrorProperties(\ArrayObject $errorProperties)
    {
        $this->errorProperties = $errorProperties;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOriginatingCode()
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
    public function setOriginatingCode(string $originatingCode)
    {
        $this->originatingCode = $originatingCode;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeResponseDetail[]
     */
    public function getSpecificErrors()
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
    public function setSpecificErrors(array $specificErrors)
    {
        $this->specificErrors = $specificErrors;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['responseCode' => $this->responseCode, 'consumerMessage' => $this->consumerMessage, 'merchantMessage' => $this->merchantMessage, 'failureType' => $this->failureType, 'category' => $this->category, 'errorType' => $this->errorType, 'errorProperties' => $this->errorProperties, 'originatingCode' => $this->originatingCode, 'specificErrors' => $this->specificErrors];
    }
}