<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeTransactionDetail implements \JsonSerializable
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
    public function getActorId()
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
    public function setActorId(string $actorId)
    {
        $this->actorId = $actorId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActorVersion()
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
    public function setActorVersion(string $actorVersion)
    {
        $this->actorVersion = $actorVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActorType()
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
    public function setActorType(string $actorType)
    {
        $this->actorType = $actorType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionId()
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
    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getRequestedAmount()
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
    public function setRequestedAmount(ChtypeAmount $requestedAmount)
    {
        $this->requestedAmount = $requestedAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getProcessedAmount()
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
    public function setProcessedAmount(ChtypeAmount $processedAmount)
    {
        $this->processedAmount = $processedAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getFeeEstimate()
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
    public function setFeeEstimate(ChtypeAmount $feeEstimate)
    {
        $this->feeEstimate = $feeEstimate;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getFeeActual()
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
    public function setFeeActual(ChtypeAmount $feeActual)
    {
        $this->feeActual = $feeActual;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStartTime()
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
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndTime()
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
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWasSuccessful()
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
    public function setWasSuccessful(bool $wasSuccessful)
    {
        $this->wasSuccessful = $wasSuccessful;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnvironment()
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
    public function setEnvironment(string $environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeResponseDetail
     */
    public function getResponse()
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
    public function setResponse(ChtypeResponseDetail $response)
    {
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeVerificationResult
     */
    public function getVerificationResult()
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
    public function setVerificationResult(ChtypeVerificationResult $verificationResult)
    {
        $this->verificationResult = $verificationResult;
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
    public function getAuthorizationCode()
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
    public function setAuthorizationCode(string $authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLiability()
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
    public function setLiability(string $liability)
    {
        $this->liability = $liability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorLibrary()
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
    public function setConnectorLibrary(string $connectorLibrary)
    {
        $this->connectorLibrary = $connectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorId()
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
    public function setConnectorId(string $connectorId)
    {
        $this->connectorId = $connectorId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrimary()
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
    public function setPrimary(bool $primary)
    {
        $this->primary = $primary;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['actorId' => $this->actorId, 'actorVersion' => $this->actorVersion, 'actorType' => $this->actorType, 'transactionId' => $this->transactionId, 'requestedAmount' => $this->requestedAmount, 'processedAmount' => $this->processedAmount, 'feeEstimate' => $this->feeEstimate, 'feeActual' => $this->feeActual, 'startTime' => $this->startTime, 'endTime' => $this->endTime, 'wasSuccessful' => $this->wasSuccessful, 'environment' => $this->environment, 'response' => $this->response, 'verificationResult' => $this->verificationResult, 'additionalData' => $this->additionalData, 'authorizationCode' => $this->authorizationCode, 'liability' => $this->liability, 'connectorLibrary' => $this->connectorLibrary, 'connectorId' => $this->connectorId, 'primary' => $this->primary];
    }
}