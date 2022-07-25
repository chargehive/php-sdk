<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeTransactionDetail
{
    /**
     * 
     *
     * @var string
     */
    protected $actorId;
    /**
     * 
     *
     * @var string
     */
    protected $actorVersion;
    /**
     * 
     *
     * @var string
     */
    protected $actorType = 'ACTOR_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $transactionId;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $requestedAmount;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $processedAmount;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $feeEstimate;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $feeActual;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $startTime;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $endTime;
    /**
     * 
     *
     * @var bool
     */
    protected $wasSuccessful;
    /**
     * 
     *
     * @var string
     */
    protected $environment = 'ENVIRONMENT_INVALID';
    /**
     * 
     *
     * @var ChtypeResponseDetail
     */
    protected $response;
    /**
     * 
     *
     * @var ChtypeVerificationResult
     */
    protected $verificationResult;
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
    protected $authorizationCode;
    /**
     * 
     *
     * @var string
     */
    protected $liability = 'LIABILITY_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $connectorLibrary;
    /**
     * 
     *
     * @var string
     */
    protected $connectorId;
    /**
     * 
     *
     * @var bool
     */
    protected $primary;
    /**
     * 
     *
     * @return string
     */
    public function getActorId() : string
    {
        return $this->actorId;
    }
    /**
     * 
     *
     * @param string $actorId
     *
     * @return self
     */
    public function setActorId(string $actorId) : self
    {
        $this->actorId = $actorId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActorVersion() : string
    {
        return $this->actorVersion;
    }
    /**
     * 
     *
     * @param string $actorVersion
     *
     * @return self
     */
    public function setActorVersion(string $actorVersion) : self
    {
        $this->actorVersion = $actorVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActorType() : string
    {
        return $this->actorType;
    }
    /**
     * 
     *
     * @param string $actorType
     *
     * @return self
     */
    public function setActorType(string $actorType) : self
    {
        $this->actorType = $actorType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionId() : string
    {
        return $this->transactionId;
    }
    /**
     * 
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId) : self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getRequestedAmount() : ChtypeAmount
    {
        return $this->requestedAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $requestedAmount
     *
     * @return self
     */
    public function setRequestedAmount(ChtypeAmount $requestedAmount) : self
    {
        $this->requestedAmount = $requestedAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getProcessedAmount() : ChtypeAmount
    {
        return $this->processedAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $processedAmount
     *
     * @return self
     */
    public function setProcessedAmount(ChtypeAmount $processedAmount) : self
    {
        $this->processedAmount = $processedAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getFeeEstimate() : ChtypeAmount
    {
        return $this->feeEstimate;
    }
    /**
     * 
     *
     * @param ChtypeAmount $feeEstimate
     *
     * @return self
     */
    public function setFeeEstimate(ChtypeAmount $feeEstimate) : self
    {
        $this->feeEstimate = $feeEstimate;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getFeeActual() : ChtypeAmount
    {
        return $this->feeActual;
    }
    /**
     * 
     *
     * @param ChtypeAmount $feeActual
     *
     * @return self
     */
    public function setFeeActual(ChtypeAmount $feeActual) : self
    {
        $this->feeActual = $feeActual;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStartTime() : \DateTime
    {
        return $this->startTime;
    }
    /**
     * 
     *
     * @param \DateTime $startTime
     *
     * @return self
     */
    public function setStartTime(\DateTime $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndTime() : \DateTime
    {
        return $this->endTime;
    }
    /**
     * 
     *
     * @param \DateTime $endTime
     *
     * @return self
     */
    public function setEndTime(\DateTime $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWasSuccessful() : bool
    {
        return $this->wasSuccessful;
    }
    /**
     * 
     *
     * @param bool $wasSuccessful
     *
     * @return self
     */
    public function setWasSuccessful(bool $wasSuccessful) : self
    {
        $this->wasSuccessful = $wasSuccessful;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnvironment() : string
    {
        return $this->environment;
    }
    /**
     * 
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment) : self
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeResponseDetail
     */
    public function getResponse() : ChtypeResponseDetail
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ChtypeResponseDetail $response
     *
     * @return self
     */
    public function setResponse(ChtypeResponseDetail $response) : self
    {
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeVerificationResult
     */
    public function getVerificationResult() : ChtypeVerificationResult
    {
        return $this->verificationResult;
    }
    /**
     * 
     *
     * @param ChtypeVerificationResult $verificationResult
     *
     * @return self
     */
    public function setVerificationResult(ChtypeVerificationResult $verificationResult) : self
    {
        $this->verificationResult = $verificationResult;
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
    public function getAuthorizationCode() : string
    {
        return $this->authorizationCode;
    }
    /**
     * 
     *
     * @param string $authorizationCode
     *
     * @return self
     */
    public function setAuthorizationCode(string $authorizationCode) : self
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLiability() : string
    {
        return $this->liability;
    }
    /**
     * 
     *
     * @param string $liability
     *
     * @return self
     */
    public function setLiability(string $liability) : self
    {
        $this->liability = $liability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorLibrary() : string
    {
        return $this->connectorLibrary;
    }
    /**
     * 
     *
     * @param string $connectorLibrary
     *
     * @return self
     */
    public function setConnectorLibrary(string $connectorLibrary) : self
    {
        $this->connectorLibrary = $connectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorId() : string
    {
        return $this->connectorId;
    }
    /**
     * 
     *
     * @param string $connectorId
     *
     * @return self
     */
    public function setConnectorId(string $connectorId) : self
    {
        $this->connectorId = $connectorId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrimary() : bool
    {
        return $this->primary;
    }
    /**
     * 
     *
     * @param bool $primary
     *
     * @return self
     */
    public function setPrimary(bool $primary) : self
    {
        $this->primary = $primary;
        return $this;
    }
}